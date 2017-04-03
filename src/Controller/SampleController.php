<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sample Controller
 *
 * @property \App\Model\Table\SampleTable $Sample
 */
class SampleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $sample = $this->paginate($this->Sample);

        $this->set(compact('sample'));
        $this->set('_serialize', ['sample']);
    }

    /**
     * View method
     *
     * @param string|null $id Sample id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sample = $this->Sample->get($id, [
            'contain' => []
        ]);

        $this->set('sample', $sample);
        $this->set('_serialize', ['sample']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sample = $this->Sample->newEntity();
        if ($this->request->is('post')) {
            $sample = $this->Sample->patchEntity($sample, $this->request->data);
            if ($this->Sample->save($sample)) {
                $this->Flash->success(__('The sample has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample could not be saved. Please, try again.'));
        }
        $this->set(compact('sample'));
        $this->set('_serialize', ['sample']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sample id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sample = $this->Sample->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sample = $this->Sample->patchEntity($sample, $this->request->data);
            if ($this->Sample->save($sample)) {
                $this->Flash->success(__('The sample has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample could not be saved. Please, try again.'));
        }
        $this->set(compact('sample'));
        $this->set('_serialize', ['sample']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sample id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sample = $this->Sample->get($id);
        if ($this->Sample->delete($sample)) {
            $this->Flash->success(__('The sample has been deleted.'));
        } else {
            $this->Flash->error(__('The sample could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
