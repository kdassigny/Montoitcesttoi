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
    public function contact($email = null)
    {

        if ($this->request->is(['patch', 'post', 'put'])) {
            debug($this->request);
            die();
            $email = new Email('default');
            $email->template('default', 'default');
            $email->profile('default');
            $email->from([$this->request->data['mail'] => 'MTCT'])
                ->to('wolf.6993@hotmail.fr')
                ->subject('About')
                ->send($this->request->data['name'],
                    $this->request->data['phone'],
                    $this->request->data['text']);
        }
    }

public function partner(){

}
    public function team(){

    }
}