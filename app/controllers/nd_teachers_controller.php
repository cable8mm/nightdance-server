<?php

class NdTeachersController extends AppController
{
    public $name = 'NdTeachers';

    public $helpers = ['Html', 'Form'];

    public function index()
    {
        $this->NdTeacher->recursive = 0;
        $this->set('ndTeachers', $this->paginate());
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid NdTeacher', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('ndTeacher', $this->NdTeacher->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            $this->NdTeacher->create();
            if ($this->NdTeacher->save($this->data)) {
                $this->Session->setFlash(__('The NdTeacher has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The NdTeacher could not be saved. Please, try again.', true));
            }
        }
        $teacherPositions = $this->NdTeacher->TeacherPosition->find('list');
        $branches = $this->NdTeacher->Branch->find('list');
        $this->set(compact('teacherPositions', 'branches'));
    }

    public function edit($id = null)
    {
        if (! $id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid NdTeacher', true));
            $this->redirect(['action' => 'index']);
        }
        if (! empty($this->data)) {
            if ($this->NdTeacher->save($this->data)) {
                $this->Session->setFlash(__('The NdTeacher has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The NdTeacher could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->NdTeacher->read(null, $id);
        }
        $teacherPositions = $this->NdTeacher->TeacherPosition->find('list');
        $branches = $this->NdTeacher->Branch->find('list');
        $this->set(compact('teacherPositions', 'branches'));
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid id for NdTeacher', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->NdTeacher->del($id)) {
            $this->Session->setFlash(__('NdTeacher deleted', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('The NdTeacher could not be deleted. Please, try again.', true));
        $this->redirect(['action' => 'index']);
    }
}
