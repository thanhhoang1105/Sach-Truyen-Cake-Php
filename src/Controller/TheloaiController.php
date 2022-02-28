<?php

namespace App\Controller;

use App\Controller\AppController;
use cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;

class TheloaiController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('theloai');
    }

    public function index($id = null)
    {
        $this->loadModel('Categories');
        $category = $this->Categories->get($id, [
            'contain' => ['Stories'],
        ]);

        $this->set('category', $category);
    }
}
