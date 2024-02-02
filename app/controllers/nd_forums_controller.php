<?php

class NdForumsController extends AppController
{
    public $name = 'NdForums';

    public $helpers = ['Html', 'Form'];

    public function index()
    {
        $this->NdForum->recursive = 0;
        $this->set('ndForums', $this->paginate());
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid NdForum', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('ndForum', $this->NdForum->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            $this->NdForum->create();
            if ($this->NdForum->save($this->data)) {
                $this->Session->setFlash(__('The NdForum has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The NdForum could not be saved. Please, try again.', true));
            }
        }
    }

    public function edit($id = null)
    {
        if (! $id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid NdForum', true));
            $this->redirect(['action' => 'index']);
        }
        if (! empty($this->data)) {
            print_r($this->data);
            exit;

            if ($this->NdForum->save($this->data)) {
                $this->Session->setFlash(__('The NdForum has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The NdForum could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->NdForum->read(null, $id);
        }
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid id for NdForum', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->NdForum->del($id)) {
            $this->Session->setFlash(__('NdForum deleted', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('The NdForum could not be deleted. Please, try again.', true));
        $this->redirect(['action' => 'index']);
    }
}
