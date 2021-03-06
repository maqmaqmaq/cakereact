<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Licenses Controller
 *
 * @property \App\Model\Table\LicensesTable $Licenses
 */
class LicensesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Computers']
        ];
        $licenses = $this->paginate($this->Licenses);

        $this->set(compact('licenses'));
        $this->set('_serialize', ['licenses']);
    }

    /**
     * View method
     *
     * @param string|null $id License id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $license = $this->Licenses->get($id, [
            'contain' => ['Computers']
        ]);

        $this->set('license', $license);
        $this->set('_serialize', ['license']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $license = $this->Licenses->newEntity();
        if ($this->request->is('post')) {
            $license = $this->Licenses->patchEntity($license, $this->request->data);
            if ($this->Licenses->save($license)) {
                $this->Flash->success(__('The license has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The license could not be saved. Please, try again.'));
            }
        }
        $computers = $this->Licenses->Computers->find('list', ['limit' => 200]);
        $this->set(compact('license', 'computers'));
        $this->set('_serialize', ['license']);
    }

    /**
     * Edit method
     *
     * @param string|null $id License id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $license = $this->Licenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $license = $this->Licenses->patchEntity($license, $this->request->data);
            if ($this->Licenses->save($license)) {
                $this->Flash->success(__('The license has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The license could not be saved. Please, try again.'));
            }
        }
        $computers = $this->Licenses->Computers->find('list', ['limit' => 200]);
        $this->set(compact('license', 'computers'));
        $this->set('_serialize', ['license']);
    }

    /**
     * Delete method
     *
     * @param string|null $id License id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $license = $this->Licenses->get($id);
        if ($this->Licenses->delete($license)) {
            $this->Flash->success(__('The license has been deleted.'));
        } else {
            $this->Flash->error(__('The license could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
