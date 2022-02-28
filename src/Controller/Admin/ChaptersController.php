<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use cake\Event\EventInterface;
use App\Controller\Admin\AppController;


class ChaptersController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Stories'],
        ];
        $chapters = $this->paginate($this->Chapters, ['limit' => '5']);

        $this->set(compact('chapters'));
    }


    public function view($id = null)
    {
        $chapters = $this->paginate($this->Chapters, ['limit' => '5']);
        $chapter = $this->Chapters->get($id, [
            'contain' => ['Stories'],
        ]);

        $this->set(compact('chapter'));
    }


    public function add()
    {
        $chapter = $this->Chapters->newEmptyEntity();
        if ($this->request->is('post')) {
            $chapter = $this->Chapters->patchEntity($chapter, $this->request->getData());
            if ($this->Chapters->save($chapter)) {
                $this->Flash->success(__('The chapter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter could not be saved. Please, try again.'));
        }
        $stories = $this->Chapters->Stories->find('list', ['limit' => 200]);
        $this->set(compact('chapter', 'stories'));
    }


    public function edit($id = null)
    {
        $chapter = $this->Chapters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapter = $this->Chapters->patchEntity($chapter, $this->request->getData());
            if ($this->Chapters->save($chapter)) {
                $this->Flash->success(__('The chapter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter could not be saved. Please, try again.'));
        }
        $stories = $this->Chapters->Stories->find('list', ['limit' => 200]);
        $this->set(compact('chapter', 'stories'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapter = $this->Chapters->get($id);
        if ($this->Chapters->delete($chapter)) {
            $this->Flash->success(__('The chapter has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
