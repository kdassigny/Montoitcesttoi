<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HostFamilies Controller
 *
 * @property \App\Model\Table\HostFamiliesTable $HostFamilies
 * @property \App\Model\Table\UsresTable $Users
 */
class HostFamiliesController extends AppController
{
//    public function beforeFilter(Event $event)
//    {
//        parent::beforeFilter($event);
//        $this->Auth->allow('add');
//    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $hostFamilies = $this->paginate($this->HostFamilies);

        $this->set(compact('hostFamilies'));
        $this->set('_serialize', ['hostFamilies']);
    }

    /**
     * View method
     *
     * @param string|null $id Host Family id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hostFamily = $this->HostFamilies->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('hostFamily', $hostFamily);
        $this->set('_serialize', ['hostFamily']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function addHostFamily($id_user = null)
    {
        $hostFamily = $this->HostFamilies->newEntity();

        if ($this->request->is('post')) {
            $hostFamily = $this->HostFamilies->patchEntity($hostFamily, $this->request->data);
            $hostFamily->user_id = $id_user;

            if ($this->HostFamilies->save($hostFamily)) {
                $this->Flash->success(__('Le formulaire à bien été sauvegardé'));
//getting last data saved for this user
                $users = $this->HostFamilies->Users->get($id_user, ['contain' => 'Addresses']);
//send a mail with all data for this user (user,address,hostFamily)
                $email = new Email('Infofa');
                $email->viewVars([$hostFamily, $users]);
                $email->from(['account@MTCT.fr' => 'MTCT'])
                    ->to('wolf.6993@hotmail.fr')
                    ->subject('Nouvelle candidature pour devenir FA')
                    ->send();

                return $this->redirect(['controller' => 'News', 'action' => 'index']);
            } else {
                $this->Flash->error(__('Le formulaire n\as pas pu être sauvegardé, veuillez vérifire les champs.'));
            }
        }
        $this->set(compact('hostFamily', 'users'));
        $this->set('_serialize', ['hostFamily']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Host Family id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hostFamily = $this->HostFamilies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hostFamily = $this->HostFamilies->patchEntity($hostFamily, $this->request->data);
            if ($this->HostFamilies->save($hostFamily)) {
                $this->Flash->success(__('The host family has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The host family could not be saved. Please, try again.'));
            }
        }
        $users = $this->HostFamilies->Users->find('list', ['limit' => 200]);
        $this->set(compact('hostFamily', 'users'));
        $this->set('_serialize', ['hostFamily']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Host Family id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hostFamily = $this->HostFamilies->get($id);
        if ($this->HostFamilies->delete($hostFamily)) {
            $this->Flash->success(__('The host family has been deleted.'));
        } else {
            $this->Flash->error(__('The host family could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function mail()
    {
        $this->viewBuilder()->layout(false);
    }
}
