<?php

class PackagesController extends AppController
{
    public $name = 'Packages';

    public $helpers = ['Html', 'Form'];

    public function index()
    {
        $this->Package->recursive = 0;
        $this->set('packages', $this->paginate());
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid Package', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('package', $this->Package->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            $this->Package->create();
            if ($this->Package->save($this->data)) {
                $this->Session->setFlash(__('The Package has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The Package could not be saved. Please, try again.', true));
            }
        }
    }

    public function edit($id = null)
    {
        if (! $id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid Package', true));
            $this->redirect(['action' => 'index']);
        }
        if (! empty($this->data)) {
            if ($this->Package->save($this->data)) {
                $this->Session->setFlash(__('The Package has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The Package could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Package->read(null, $id);
        }
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid id for Package', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->Package->del($id)) {
            $this->Session->setFlash(__('Package deleted', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('The Package could not be deleted. Please, try again.', true));
        $this->redirect(['action' => 'index']);
    }
}
