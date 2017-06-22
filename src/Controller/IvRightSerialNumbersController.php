<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IvRightSerialNumbers Controller
 *
 * @property \App\Model\Table\IvRightSerialNumbersTable $IvRightSerialNumbers
 */
class IvRightSerialNumbersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['IvRightRows', 'ItemSerialNumbers']
        ];
        $ivRightSerialNumbers = $this->paginate($this->IvRightSerialNumbers);

        $this->set(compact('ivRightSerialNumbers'));
        $this->set('_serialize', ['ivRightSerialNumbers']);
    }

    /**
     * View method
     *
     * @param string|null $id Iv Right Serial Number id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ivRightSerialNumber = $this->IvRightSerialNumbers->get($id, [
            'contain' => ['IvRightRows', 'ItemSerialNumbers']
        ]);

        $this->set('ivRightSerialNumber', $ivRightSerialNumber);
        $this->set('_serialize', ['ivRightSerialNumber']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ivRightSerialNumber = $this->IvRightSerialNumbers->newEntity();
        if ($this->request->is('post')) {
            $ivRightSerialNumber = $this->IvRightSerialNumbers->patchEntity($ivRightSerialNumber, $this->request->data);
            if ($this->IvRightSerialNumbers->save($ivRightSerialNumber)) {
                $this->Flash->success(__('The iv right serial number has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The iv right serial number could not be saved. Please, try again.'));
            }
        }
        $ivRightRows = $this->IvRightSerialNumbers->IvRightRows->find('list', ['limit' => 200]);
        $itemSerialNumbers = $this->IvRightSerialNumbers->ItemSerialNumbers->find('list', ['limit' => 200]);
        $this->set(compact('ivRightSerialNumber', 'ivRightRows', 'itemSerialNumbers'));
        $this->set('_serialize', ['ivRightSerialNumber']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Iv Right Serial Number id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ivRightSerialNumber = $this->IvRightSerialNumbers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ivRightSerialNumber = $this->IvRightSerialNumbers->patchEntity($ivRightSerialNumber, $this->request->data);
            if ($this->IvRightSerialNumbers->save($ivRightSerialNumber)) {
                $this->Flash->success(__('The iv right serial number has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The iv right serial number could not be saved. Please, try again.'));
            }
        }
        $ivRightRows = $this->IvRightSerialNumbers->IvRightRows->find('list', ['limit' => 200]);
        $itemSerialNumbers = $this->IvRightSerialNumbers->ItemSerialNumbers->find('list', ['limit' => 200]);
        $this->set(compact('ivRightSerialNumber', 'ivRightRows', 'itemSerialNumbers'));
        $this->set('_serialize', ['ivRightSerialNumber']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Iv Right Serial Number id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ivRightSerialNumber = $this->IvRightSerialNumbers->get($id);
        if ($this->IvRightSerialNumbers->delete($ivRightSerialNumber)) {
            $this->Flash->success(__('The iv right serial number has been deleted.'));
        } else {
            $this->Flash->error(__('The iv right serial number could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
