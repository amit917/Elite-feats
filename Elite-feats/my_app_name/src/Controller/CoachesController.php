<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coaches Controller
 *
 * @property \App\Model\Table\CoachesTable $Coaches
 *
 * @method \App\Model\Entity\Coach[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoachesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $coaches = $this->paginate($this->Coaches);

        $this->set(compact('coaches'));
    }

    /**
     * View method
     *
     * @param string|null $id Coach id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coach = $this->Coaches->get($id, [
            'contain' => [],
        ]);

        $this->set('coach', $coach);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coach = $this->Coaches->newEntity();
        if ($this->request->is('post')) {
            $coach = $this->Coaches->patchEntity($coach, $this->request->getData());
            if ($this->Coaches->save($coach)) {
                $this->Flash->success(__('The coach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coach could not be saved. Please, try again.'));
        }
        $this->set(compact('coach'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coach id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coach = $this->Coaches->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coach = $this->Coaches->patchEntity($coach, $this->request->getData());
            if ($this->Coaches->save($coach)) {
                $this->Flash->success(__('The coach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coach could not be saved. Please, try again.'));
        }
        $this->set(compact('coach'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coach id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coach = $this->Coaches->get($id);
        if ($this->Coaches->delete($coach)) {
            $this->Flash->success(__('The coach has been deleted.'));
        } else {
            $this->Flash->error(__('The coach could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function home(){

        $this->loadModel('Athletes');
        $athletes = $this->Athletes->find("all");

        $this->set(compact('athletes'));
    }
    public function Email(){

    }
    public function search()
    {

        $this->request->allowMethod('ajax');

        $keyword = $this->request->getQuery('keyword');
        $this->loadModel('Athletes');

        $query = $this->Athletes->find('all',[
            'conditions' => ['user_firstname LIKE'=>'%'.$keyword.'%'],
            'limit' => 10
        ]);

        $this->set('athletes', $this->paginate($query));
        $this->set('_serialize', ['athletes']);

    }
}
