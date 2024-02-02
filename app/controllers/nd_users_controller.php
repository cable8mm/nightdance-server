<?php

class NdUsersController extends AppController
{
    public $name = 'NdUsers';

    public function index()
    {
        $conditions = [];
        $this->data['NdUser'] = $this->passedArgs = array_merge($this->passedArgs, $this->params['url']);

        if (isset($this->passedArgs['select']) && $this->passedArgs['select'] == 'username_1') {
            $conditions['and'][] = ['NdUser.username' => $this->passedArgs['select_data']];
        }
        if (isset($this->passedArgs['select']) && $this->passedArgs['select'] == 'username_2') {
            $conditions['and'][] = ['NdUser.username LIKE' => $this->passedArgs['select_data'].'%'];
        }
        if (isset($this->passedArgs['select']) && $this->passedArgs['select'] == 'username_3') {
            $conditions['and'][] = ['NdUser.username LIKE' => '%'.$this->passedArgs['select_data']];
        }
        if (isset($this->passedArgs['select']) && $this->passedArgs['select'] == 'username_4') {
            $conditions['and'][] = ['NdUser.username LIKE' => '%'.$this->passedArgs['select_data'].'%'];
        }
        if (isset($this->passedArgs['select']) && $this->passedArgs['select'] == 'user_email') {
            $conditions['and'][] = ['NdUserAddition.user_email' => $this->passedArgs['select_data']];
        }
        if (isset($this->passedArgs['select']) && $this->passedArgs['select'] == 'user_tel') {
            $conditions['and'][] = ['NdUserAddition.user_tel' => $this->passedArgs['select_data']];
        }
        if (isset($this->passedArgs['select']) && $this->passedArgs['select'] == 'realname') {
            $conditions['and'][] = ['NdUserAddition.realname' => $this->passedArgs['select_data']];
        }
        if (isset($this->passedArgs['select']) && $this->passedArgs['select'] == 'user_id') {
            $conditions['and'][] = ['NdUser.user_id' => $this->passedArgs['select_data']];
        }
        if (isset($this->passedArgs['select']) && $this->passedArgs['select'] == 'nickname') {
            $conditions['and'][] = ['NdUser.nickname' => $this->passedArgs['select_data']];
        }

        $this->NdUser->recursive = 0;
        $this->set('ndUsers', $this->paginate('NdUser', $conditions));
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid NdUser', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('ndUser', $this->NdUser->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            $this->NdUser->create();
            if ($this->NdUser->save($this->data)) {
                $this->Session->setFlash(__('The NdUser has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The NdUser could not be saved. Please, try again.', true));
            }
        }
    }

    public function edit($id = null)
    {
        if (! $id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid NdUser', true));
            $this->redirect(['action' => 'index']);
        }
        if (! empty($this->data)) {
            if ($this->NdUser->save($this->data)) {
                $this->Session->setFlash(__('The NdUser has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The NdUser could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->NdUser->read(null, $id);
        }
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid id for NdUser', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->NdUser->del($id)) {
            $this->Session->setFlash(__('NdUser deleted', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('The NdUser could not be deleted. Please, try again.', true));
        $this->redirect(['action' => 'index']);
    }
}
