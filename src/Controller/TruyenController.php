<?php

namespace App\Controller;

use App\Controller\AppController;
use cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;

class TruyenController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('truyen');
    }

    public function index($id = null)
    {
        $this->loadModel('Stories');
        $story = $this->Stories->get($id);
        $stories = $this->Stories->find('all');
        $this->set('stories', $stories);
        $this->set('story', $story);

        $this->loadModel('Chapters');
        $chapters = $this->Chapters->find()->where(['story_id' => $id])->all();
        $this->set('chapters', $chapters);
    }
}
