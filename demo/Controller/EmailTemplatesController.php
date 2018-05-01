<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Email Templates  Controller
 *
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class EmailTemplatesController extends AppController
{

   
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin-page');
        $emailtemplates = $this->paginate($this->EmailTemplates);

        $this->set(compact('emailtemplates'));
        $this->set('_serialize', ['emailtemplates']);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin-page');
        $emailtemplates = $this->EmailTemplates->newEntity();
        if ($this->request->is('post')) {
            $emailtemplates = $this->EmailTemplates->patchEntity($emailtemplates, $this->request->getData());
            if ($this->EmailTemplates->save($emailtemplates)) {
                $this->Flash->adminsuccess(__('The Email Template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->adminerror(__('The Email Template could not be saved. Please, try again.'));
        }
        $this->set(compact('emailtemplates'));
        $this->set('_serialize', ['emailtemplates']);
    }

    /**

        /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('admin-page');
        $emailtemplates = $this->EmailTemplates->get($id, [
            'contain' => []
            ]);

        $this->set('emailtemplates', $emailtemplates);
        $this->set('_serialize', ['emailtemplates']);
    }

    /**


     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin-page');
        $emailtemplates = $this->EmailTemplates->get($id, [
            'contain' => []
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailtemplates = $this->EmailTemplates->patchEntity($emailtemplates, $this->request->getData());
            if ($this->EmailTemplates->save($emailtemplates)) {
                $this->Flash->adminsuccess(__('The Email Template  has been Updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->adminerror(__('The Email Template could not be saved. Please, try again.'));
        }
        $this->set(compact('emailtemplates'));
        $this->set('_serialize', ['emailtemplates']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailtemplates = $this->EmailTemplates->get($id);
        if ($this->EmailTemplates->delete($emailtemplates)) {
            $this->Flash->adminsuccess(__('The Email Template has been deleted.'));
        } else {
            $this->Flash->adminerror(__('The Email Template could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
