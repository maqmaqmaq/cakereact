<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Computers Controller
 *
 * @property \App\Model\Table\ComputersTable $Computers
 */
class ComputersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores']
        ];
        $computers = $this->paginate($this->Computers);

        $this->set(compact('computers'));
        $this->set('_serialize', ['computers']);
    }

    /**
     * View method
     *
     * @param string|null $id Computer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $computer = $this->Computers->get($id, [
            'contain' => ['Stores', 'Licenses', 'NewLicenses']
        ]);

        $this->set('computer', $computer);
        $this->set('_serialize', ['computer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $computer = $this->Computers->newEntity();
        if ($this->request->is('post')) {
            $computer = $this->Computers->patchEntity($computer, $this->request->data);
            if ($this->Computers->save($computer)) {
                $this->Flash->success(__('The computer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The computer could not be saved. Please, try again.'));
            }
        }
        $stores = $this->Computers->Stores->find('list', ['limit' => 200]);
        $this->set(compact('computer', 'stores'));
        $this->set('_serialize', ['computer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Computer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $computer = $this->Computers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $computer = $this->Computers->patchEntity($computer, $this->request->data);
            if ($this->Computers->save($computer)) {
                $this->Flash->success(__('The computer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The computer could not be saved. Please, try again.'));
            }
        }
        $stores = $this->Computers->Stores->find('list', ['limit' => 200]);
        $this->set(compact('computer', 'stores'));
        $this->set('_serialize', ['computer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Computer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $computer = $this->Computers->get($id);
        if ($this->Computers->delete($computer)) {
            $this->Flash->success(__('The computer has been deleted.'));
        } else {
            $this->Flash->error(__('The computer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
