<?php
declare(strict_types=1);

namespace App\Controller\Component;
use Cake\ORM\TableRegistty;
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Http\ServerRequest;

/**
 * UserLogs component
 */
class UserLogsComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    public function saveIP($user_id)
    {
    	$request = new ServerRequest();
    	$userlogTable = TableRegistty::getTableLocator()->get('UserLogs');
    	$userlog = $userlogTable->newEmptyEntity();
    	$userlog->user_id= $user_id;
    	$userlog->ip -> $request->clientIP();
    	$userlogTable->save($userlog);
    }
}
