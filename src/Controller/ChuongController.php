<?php

namespace App\Controller;

use App\Controller\AppController;
use cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;

class ChuongController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('chuong');
    }
    public function index($id = null)
    {


        $this->loadModel('Chapters');
        $chapter = $this->Chapters->get($id);
        $this->set('chapter', $chapter);

        $chapter = $this->paginate($this->Chapters->find('all'));
        $this->set('chapters', $chapter);
    }
}
