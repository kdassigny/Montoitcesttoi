<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Animals Controller
 *
 * @property \App\Model\Table\AnimalsTable $Animals
 */
class AnimalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Especes', 'Categories', 'Images']
        ];

        //  filter animals
        if (isset($this->request->query) && !empty($this->request->query)) {

            $espece_id = $this->request->query('espece_id');
            $sexe = $this->request->query('sexe');
            $categorie_id = $this->request->query('categorie_id');

            $animals = $this->Animals->find('all');
            if ($this->request->query('espece_id') != null) {
                $animals->where(['espece_id' => $espece_id]);
            }
            if ($this->request->query('sexe') != null) {
                $animals->where(['sexe' => $sexe]);
            }
            if ($this->request->query('categorie_id') != null) {
                $animals->where(['categorie_id' => $categorie_id]);
            }
            $animals = $this->paginate($animals);

        } else {
            $animals = $this->paginate($this->Animals);
        }

        $especes = $this->Animals->Especes->find('list',['keyField'=>'id','valueField'=>'espece_name']);
        $categories = $this->Animals->Categories->find('list', ['keyField' => 'id', 'valueField' => 'categorie_name']);

        $this->set(compact('animals', 'especes', 'categories'));
        $this->set('_serialize', ['animals']);
    }

    /**
     * View method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => ['Especes', 'Categories', 'Addresses', 'Images']
        ]);

        $this->set('animal', $animal);
        $this->set('_serialize', ['animal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $animal = $this->Animals->newEntity();
        if ($this->request->is('post')) {
            $animal = $this->Animals->patchEntity($animal, $this->request->data);
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The animal could not be saved. Please, try again.'));
            }
        }
        $especes = $this->Animals->Especes->find('list', ['limit' => 200]);
        $categories = $this->Animals->Categories->find('list', ['limit' => 200]);
        $addresses = $this->Animals->Addresses->find('list', ['limit' => 200]);
        $this->set(compact('animal', 'especes', 'categories', 'addresses'));
        $this->set('_serialize', ['animal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animal = $this->Animals->patchEntity($animal, $this->request->data);
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The animal could not be saved. Please, try again.'));
            }
        }
        $especes = $this->Animals->Especes->find('list', ['limit' => 200]);
        $categories = $this->Animals->Categories->find('list', ['limit' => 200]);
        $addresses = $this->Animals->Addresses->find('list', ['limit' => 200]);
        $this->set(compact('animal', 'especes', 'categories', 'addresses'));
        $this->set('_serialize', ['animal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animal = $this->Animals->get($id);
        if ($this->Animals->delete($animal)) {
            $this->Flash->success(__('The animal has been deleted.'));
        } else {
            $this->Flash->error(__('The animal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
