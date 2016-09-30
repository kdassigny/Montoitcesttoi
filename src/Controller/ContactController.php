<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
/**
 * Partners Controller
 *
 * @property \App\Model\Table\UsersTable
 * @property \App\Model\Table\PartnersTable
 */

class ContactController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function contact(){
        $email = new Email('default');
        $email->from(['me@example.com' => 'My Site'])
            ->to('you@example.com')
            ->subject('About')
            ->send('My message');
    }

public function partner(){

}
    public function team(){

    }
}