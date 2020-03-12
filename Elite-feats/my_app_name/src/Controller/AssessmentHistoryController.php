<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssessmentHistory Controller
 *
 * @property \App\Model\Table\AssessmentHistoryTable $AssessmentHistory
 *
 * @method \App\Model\Entity\AssessmentHistory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssessmentHistoryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Assessment', 'Groups', 'Coaches', 'Athletes'],
        ];
        $assessmentHistory = $this->paginate($this->AssessmentHistory);

        $this->set(compact('assessmentHistory'));
    }

    /**
     * View method
     *
     * @param string|null $id Assessment History id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assessmentHistory = $this->AssessmentHistory->get($id, [
            'contain' => ['Assessment', 'Groups', 'Coaches', 'Athletes'],
        ]);

        $this->set('assessmentHistory', $assessmentHistory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assessmentHistory = $this->AssessmentHistory->newEntity();
        if ($this->request->is('post')) {
            $assessmentHistory = $this->AssessmentHistory->patchEntity($assessmentHistory, $this->request->getData());
            if ($this->AssessmentHistory->save($assessmentHistory)) {
                $this->Flash->success(__('The assessment history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assessment history could not be saved. Please, try again.'));
        }
        $assessment = $this->AssessmentHistory->Assessment->find('list', ['limit' => 200]);
        $groups = $this->AssessmentHistory->Groups->find('list', ['limit' => 200]);
        $coaches = $this->AssessmentHistory->Coaches->find('list', ['limit' => 200]);
        $athletes = $this->AssessmentHistory->Athletes->find('list', ['limit' => 200]);
        $this->set(compact('assessmentHistory', 'assessment', 'groups', 'coaches', 'athletes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Assessment History id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assessmentHistory = $this->AssessmentHistory->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assessmentHistory = $this->AssessmentHistory->patchEntity($assessmentHistory, $this->request->getData());
            if ($this->AssessmentHistory->save($assessmentHistory)) {
                $this->Flash->success(__('The assessment history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assessment history could not be saved. Please, try again.'));
        }
        $assessment = $this->AssessmentHistory->Assessment->find('list', ['limit' => 200]);
        $groups = $this->AssessmentHistory->Groups->find('list', ['limit' => 200]);
        $coaches = $this->AssessmentHistory->Coaches->find('list', ['limit' => 200]);
        $athletes = $this->AssessmentHistory->Athletes->find('list', ['limit' => 200]);
        $this->set(compact('assessmentHistory', 'assessment', 'groups', 'coaches', 'athletes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Assessment History id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assessmentHistory = $this->AssessmentHistory->get($id);
        if ($this->AssessmentHistory->delete($assessmentHistory)) {
            $this->Flash->success(__('The assessment history has been deleted.'));
        } else {
            $this->Flash->error(__('The assessment history could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
