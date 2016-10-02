<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Partners Controller
 *
 * @property \App\Model\Table\UsersTable $News
 */

class TeamController extends AppController{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }

    public function index(){
        $this->request->params;
    }
}