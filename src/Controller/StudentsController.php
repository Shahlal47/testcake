<?php
namespace App\Controller;

use App\Controller\AppController;

class StudentsController extends AppController
{
    public function index()
    {
        $this->set('students', $this->paginate($this->Students));
        $this->set('_serialize', ['students']);
    }

    public function view($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => []
        ]);
        $this->set('student', $student);
        $this->set('_serialize', ['student']);
    }

    public function add()
    {
        $student = $this->Students->newEntity();
        if ($this->request->is('post')) {
            $student = $this->Students->patchEntity($student, $this->request->data);
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The student could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('student'));
        $this->set('_serialize', ['student']);
    }

    public function edit($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Students->patchEntity($student, $this->request->data);
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The student could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('student'));
        $this->set('_serialize', ['student']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Students->get($id);
        if ($this->Students->delete($student)) {
            $this->Flash->success(__('The student has been deleted.'));
        } else {
            $this->Flash->error(__('The student could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
