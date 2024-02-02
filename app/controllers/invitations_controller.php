<?php

class InvitationsController extends AppController
{
    public $name = 'Invitations';

    public $helpers = ['Html', 'Form'];

    public function index()
    {
        $conditions = [];
        $this->data['Invitation'] = $this->passedArgs = array_merge($this->passedArgs, $this->params['url']);
        $createYear = empty($this->data['Invitation']['create_year']) ? '2010' : $this->data['Invitation']['create_year'];

        if ($createYear != '2008') {
            $conditions['and'][] = ['Invitation.created >= ' => $createYear.'-01-01'];
            $conditions['and'][] = ['Invitation.created <= ' => $createYear.'-12-31'];
        }

        $this->data['Invitation']['create_year'] = '2010';

        $this->Invitation->recursive = 0;
        $this->set('invitations', $this->paginate('Invitation', $conditions));
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid Invitation.', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('invitation', $this->Invitation->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            $this->Invitation->create();
            if ($this->Invitation->save($this->data)) {
                $this->Session->setFlash(__('The Invitation has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The Invitation could not be saved. Please, try again.', true));
            }
        }
    }

    public function edit($id = null)
    {
        if (! $id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid Invitation', true));
            $this->redirect(['action' => 'index']);
        }
        if (! empty($this->data)) {
            if ($this->Invitation->save($this->data)) {
                $this->Session->setFlash(__('The Invitation has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The Invitation could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Invitation->read(null, $id);
        }
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid id for Invitation', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->Invitation->del($id)) {
            $this->Session->setFlash(__('Invitation deleted', true));
            $this->redirect(['action' => 'index']);
        }
    }
}
