<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \App\Model\Table\AddressesTable $Addresses
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('add', 'team', 'famille');
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect([
                    'controller' => 'Users',
                    'action' => 'admin']);
            }
            $this->Flash->error(__('Authentification invalide'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function famille()
    {
        $this->paginate = [
            'contain' => ['Addresses', 'Images']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function team()
    {
        $this->paginate = [
            'contain' => ['Addresses', 'Images']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Addresses', 'Images', 'HostFamilies']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $user = $this->Users->newEntity($this->request->data, [
            'associated' => [
                'Addresses']
        ]);
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data, [
                'associated' => [
                    'Addresses']]);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Vos données on été sauvegardées'));

                return $this->redirect(['controller' => 'HostFamilies', 'action' => 'add', $user->id]);
            } else {
                $this->Flash->error(__('Vos données n\'ont pas pu etres sauvegardées, veuillez réessayer'));
            }
        }
        $host_famillies = $this->Users->HostFamilies->find('list', ['limit' => 200]);
        $addresses = $this->Users->Addresses->find('list', ['limit' => 200]);
        $images = $this->Users->Images->find('list', ['limit' => 200]);
        $this->set(compact('user', 'addresses', 'images', 'host_famillies'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $addresses = $this->Users->Addresses->find('list', ['limit' => 200]);
        $images = $this->Users->Images->find('list', ['limit' => 200]);
        $this->set(compact('user', 'addresses', 'images'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function admin()
    {

    }

    public function adminadd()
    {

        $user = $this->Users->newEntity($this->request->data, [
            'associated' => [
                'Addresses']
        ]);
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data, [
                'associated' => [
                    'Addresses']]);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Vos données on été sauvegardées'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Vos données n\'ont pas pu etres sauvegardées, veuillez réessayer'));
            }
        }
        $host_famillies = $this->Users->HostFamilies->find('list', ['limit' => 200]);
        $addresses = $this->Users->Addresses->find('list', ['limit' => 200]);
        $images = $this->Users->Images->find('list', ['limit' => 200]);
        $this->set(compact('user', 'addresses', 'images', 'host_famillies'));
        $this->set('_serialize', ['user']);

    }
}
