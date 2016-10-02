<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Donation Controller
 *
 */

class DonationController extends AppController{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'dont', 'materiel', 'financier']);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index(){

    }
    public function materiel(){

    }

    public function adherant()
    {

    }

    public function dont()
    {

    }
}