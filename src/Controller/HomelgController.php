<?php

namespace App\Controller;

use App\Controller\AppController;
use cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;

class HomelgController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('homelg');
    }

    public function index()
    {
        // exit;
        $this->loadModel('Stories');

        $stories = $this->Stories->find()
            ->order(['Stories.id DESC']);

        $storyList = $this->Stories->find('list')->limit('8');

        $this->set('stories', $this->paginate($stories, ['limit' => '9']));

        $this->set('storyList', $storyList);
    }

    public function getData()
    {

        $to_time = strtotime("2008-12-13 10:42:00");
        $from_time = strtotime("2008-12-13 10:21:00");
        echo round(abs($to_time - $from_time) / 60, 2) . " minute";


        $link = 'https://jsonplaceholder.typicode.com/posts';

        $data = [
            'userId' => '1',
            'title'  => 'testing',
            'body'   => 'content in the post'
        ];

        $http = new Client;

        $response = $http->post(
            $link,
            json_encode($data),
            ['type' => 'json']
        );

        $json = $response->getJson();

        $session = $this->request->getSession();

        $session->write('otp', 'en');

        echo $session->read('otp');



        if (time() > ($session->read('lastSubmitted') ?: 0)) {
            $session->write('lastSubmitted', strtotime('+1 minutes'));
            echo "Hello";
            echo $session->read('lastSubmitted');
        }

        echo time() . '==' . $session->read('lastSubmitted');

        exit;
    }
}
