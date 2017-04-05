<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    //public $layout = 'admin_default';
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'Users', 
                'action' => 'dashboard',
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'loginAction' => [
                'controller' => 'Users', 
                'action' => 'login'
            ],
            'authenticate' => [
                'Form' => [
                    // 'userModel' => 'Users',
                    'fields' => ['username', 'password'],    
                    // 'scope' => ['Usuarios.habilitado' => 1]                           
                ]
            ],
            // 'authError' => 'Test',
            'storage' => 'Session'
        ]);

    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
         $this->Auth->deny();
       
        if ($this->Auth->user() && $this->isAuthorized($this->Auth->user())) { 
            // echo '<pre>';
            // print_r(get_class_methods($this->Auth));
                // die;
            $this->Auth->deny(['delete']); 
            $this->Auth->allow();
        } else if($this->Auth->user() && !$this->isAuthorized($this->Auth->user())) {
            echo $this->isAuthorized($this->Auth->user());
            $this->Auth->deny(['delete']); 
           
        } else {
            
            $this->Auth->deny(); 
            $this->Auth->allow(['add']);
        }
    }

    public function isAuthorized($user) {
        // print_r($user);
        // echo '<pre>';
        // print_r($this->request->prefix);
        // die;
        if ($this->request->prefix === 'admin') {
            // echo $user['role'];
            // echo '<pre>';
            // // print_r($user);
            // echo (bool)$user['role'] == 1;
            // die;
            return (bool)$user['role'] == 2;
        }
    }

}
