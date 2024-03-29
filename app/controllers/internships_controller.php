<?php

class InternshipsController extends AppController
{
    public $name = 'Internships';

    public $helpers = ['Html', 'Form'];

    public function index()
    {
        $conditions = [];
        $this->data['Internship'] = $this->passedArgs = array_merge($this->passedArgs, $this->params['url']);
        $createYear = empty($this->data['Internship']['create_year']) ? date('Y') : $this->data['Internship']['create_year'];

        if ($createYear != '2008') {
            $conditions['and'][] = ['Internship.created >= ' => $createYear.'-01-01'];
            $conditions['and'][] = ['Internship.created <= ' => $createYear.'-12-31'];
        }

        $this->data['Internship']['create_year'] = $createYear;

        $this->Internship->recursive = 0;
        $this->set('internships', $this->paginate('Internship', $conditions));
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid Internship.', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('internship', $this->Internship->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            $this->Internship->create();
            if ($this->Internship->save($this->data)) {
                $this->Session->setFlash(__('The Internship has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The Internship could not be saved. Please, try again.', true));
            }
        }
    }

    public function edit($id = null)
    {
        if (! $id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid Internship', true));
            $this->redirect(['action' => 'index']);
        }
        if (! empty($this->data)) {
            if ($this->Internship->save($this->data)) {
                $this->Session->setFlash(__('The Internship has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The Internship could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Internship->read(null, $id);
        }
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid id for Internship', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->Internship->del($id)) {
            $this->Session->setFlash(__('Internship deleted', true));
            $this->redirect(['action' => 'index']);
        }
    }
}
