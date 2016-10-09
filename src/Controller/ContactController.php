<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Event\Event;
/**
 * Partners Controller
 *
 * @property \App\Model\Table\UsersTable
 * @property \App\Model\Table\PartnersTable
 */

class ContactController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['contact']);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function contact()
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $email = new Email();
            $email->profile('default');
            $email->from(['me@example.com' => 'MTCT'])
                ->to('wolf.6993@hotmail.fr')
                ->subject('About')
                ->send('My message');
        }
    }

public function partner(){

}
    public function team(){

    }
}