<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Examens Controller
 *
 * @property \App\Model\Table\ExamensTable $Examens
 *
 * @method \App\Model\Entity\Examen[] paginate($object = null, array $settings = [])
 */
class ExamensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Materias']
        ];
        $examens = $this->paginate($this->Examens);

        $this->set(compact('examens'));
        $this->set('_serialize', ['examens']);
    }

    /**
     * View method
     *
     * @param string|null $id Examen id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $examen = $this->Examens->get($id, [
            'contain' => ['Materias']
        ]);

        $this->set('examen', $examen);
        $this->set('_serialize', ['examen']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $examen = $this->Examens->newEntity();
        if ($this->request->is('post')) {
            $examen = $this->Examens->patchEntity($examen, $this->request->getData());
            if ($this->Examens->save($examen)) {
                $this->Flash->success(__('The examen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examen could not be saved. Please, try again.'));
        }
        $materias = $this->Examens->Materias->find('list', ['limit' => 200]);
        $this->set(compact('examen', 'materias'));
        $this->set('_serialize', ['examen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Examen id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $examen = $this->Examens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $examen = $this->Examens->patchEntity($examen, $this->request->getData());
            if ($this->Examens->save($examen)) {
                $this->Flash->success(__('The examen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examen could not be saved. Please, try again.'));
        }
        $materias = $this->Examens->Materias->find('list', ['limit' => 200]);
        $this->set(compact('examen', 'materias'));
        $this->set('_serialize', ['examen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Examen id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $examen = $this->Examens->get($id);
        if ($this->Examens->delete($examen)) {
            $this->Flash->success(__('The examen has been deleted.'));
        } else {
            $this->Flash->error(__('The examen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
