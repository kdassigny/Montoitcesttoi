<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Partners Controller
 *
 * @property \App\Model\Table\PartnersTable $News
 */

class PartnersController extends AppController{

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