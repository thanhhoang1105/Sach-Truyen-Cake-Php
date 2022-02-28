<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use cake\Event\EventInterface;
use App\Controller\Admin\AppController;


class StoriesController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
    }

    public function index()
    {
        $stories = $this->paginate($this->Stories, ['limit' => '5']);
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $stories = $this->paginate($this->Stories, ['limit' => '5']);

        $this->set(compact('stories'));
    }

    public function view($id = null)
    {
        $stories = $this->paginate($this->Stories, ['limit' => '5']);
        $story = $this->Stories->get($id, [
            'contain' => ['Categories', 'Chapters'],
        ]);

        $this->set(compact('story'));
    }

    public function add()
    {
        $story = $this->Stories->newEmptyEntity();
        if ($this->request->is('post')) {
            $story = $this->Stories->patchEntity($story, $this->request->getData());

            if (!$story->getErrors) {
                $image = $this->request->getData('image_file');

                $name  = $image->getClientFilename();

                if (!is_dir(WWW_ROOT . 'img' . DS . 'story-img'))
                    mkdir(WWW_ROOT . 'img' . DS . 'story-img', 0775);

                $targetPath = WWW_ROOT . 'img' . DS . 'story-img' . DS . $name;

                if ($name)
                    $image->moveTo($targetPath);

                $story->image = 'story-img/' . $name;
            }

            if ($this->Stories->save($story)) {
                $this->Flash->success(__('The story has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The story could not be saved. Please, try again.'));
        }
        $categories = $this->Stories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('story', 'categories'));
    }


    public function edit($id = null)
    {
        $story = $this->Stories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $story = $this->Stories->patchEntity($story, $this->request->getData());

            if (!$story->getErrors) {
                $image = $this->request->getData('change_image');

                $name  = $image->getClientFilename();

                if (!is_dir(WWW_ROOT . 'img' . DS . 'story-img'))
                    mkdir(WWW_ROOT . 'img' . DS . 'story-img', 0775);

                $targetPath = WWW_ROOT . 'img' . DS . 'story-img' . DS . $name;

                if ($name)
                    $image->moveTo($targetPath);

                $story->image = 'story-img/' . $name;
            }

            if ($this->Stories->save($story)) {
                $this->Flash->success(__('The story has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The story could not be saved. Please, try again.'));
        }
        $categories = $this->Stories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('story', 'categories'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $story = $this->Stories->get($id);
        if ($this->Stories->delete($story)) {
            $this->Flash->success(__('The story has been deleted.'));
        } else {
            $this->Flash->error(__('The story could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
