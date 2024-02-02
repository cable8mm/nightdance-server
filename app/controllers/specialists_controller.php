<?php

class SpecialistsController extends AppController
{
    public $name = 'Specialists';

    public $helpers = ['Html', 'Form'];

    public function index()
    {
        $this->Specialist->recursive = 0;
        $this->set('specialists', $this->paginate());
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid Specialist.', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('specialist', $this->Specialist->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            $this->Specialist->create();
            if ($this->Specialist->save($this->data)) {
                $this->Session->setFlash(__('The Specialist has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The Specialist could not be saved. Please, try again.', true));
            }
        }
        $branches = $this->Specialist->Branch->find('list');
        $this->set(compact('branches'));
    }

    public function edit($id = null)
    {
        if (! $id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid Specialist', true));
            $this->redirect(['action' => 'index']);
        }
        if (! empty($this->data)) {
            if ($this->Specialist->save($this->data)) {
                $this->Session->setFlash(__('The Specialist has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The Specialist could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Specialist->read(null, $id);
        }
        $branches = $this->Specialist->Branch->find('list');
        $this->set(compact('branches'));
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid id for Specialist', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->Specialist->del($id)) {
            $this->Session->setFlash(__('Specialist deleted', true));
            $this->redirect(['action' => 'index']);
        }
    }
}
