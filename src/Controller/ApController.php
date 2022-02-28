<?php

declare(strict_types=1);


namespace App\Controller;

use cake\Event\EventInterface;
use Cake\Controller\Controller;


class ApController extends Controller
{

    public function initialize(): void
    {

        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);
    }


    public function beforeRender(EventInterface $event)
    {


        // Login Check
        if ($this->request->getSession()->read('Auth.User')) {
            $this->set('loggedIn', true);
        } else {
            $this->set('loggedIn', false);
        }
    }
}
