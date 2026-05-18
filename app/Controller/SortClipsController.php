<?php

class SortClipsController extends AppController
{
    public $name = 'SortClips';

    public $helpers = ['Html', 'Form'];

    public $uses = ['NdClip'];

    public function index()
    {
        $conditions = [];

        $this->data['NdClip'] = $this->passedArgs = array_merge($this->passedArgs, $this->params['url']);
        if (isset($this->passedArgs['category_id']) && $this->passedArgs['category_id'] !== '') {
            $conditions['and'][] = ['NdClip.category_id' => $this->passedArgs['category_id']];
        } else {
            $this->data['NdClip']['category_id'] = 12;
            $conditions['and'][] = ['NdClip.category_id' => 12];
        }

        $this->NdClip->recursive = 0;
        $this->set('ndClips', $this->paginate('NdClip', $conditions));
        $ndCategories = $this->NdClip->NdCategory->find('list');
        $this->set(compact('ndCategories'));
    }

    public function view($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid NdClip.', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('ndClip', $this->NdClip->read(null, $id));
    }

    public function add()
    {
        if (! empty($this->data)) {
            $this->NdClip->create();
            if ($this->NdClip->save($this->data)) {
                $this->Session->setFlash(__('The NdClip has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The NdClip could not be saved. Please, try again.', true));
            }
        }
        $ndGenres = $this->NdClip->NdGenre->find('list');
        $ndCategories = $this->NdClip->NdCategory->find('list');
        $this->set(compact('ndGenres', 'ndCategories'));
    }

    public function edit($id = null)
    {
        if (! $id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid NdClip', true));
            $this->redirect(['action' => 'index']);
        }
        if (! empty($this->data)) {
            if ($this->NdClip->save($this->data)) {
                $this->Session->setFlash(__('The NdClip has been saved', true));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The NdClip could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->NdClip->read(null, $id);
        }
        $ndGenres = $this->NdClip->NdGenre->find('list');
        $ndCategories = $this->NdClip->NdCategory->find('list');
        $this->set(compact('ndGenres', 'ndCategories'));
    }

    public function delete($id = null)
    {
        if (! $id) {
            $this->Session->setFlash(__('Invalid id for NdClip', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->NdClip->del($id)) {
            $this->Session->setFlash(__('NdClip deleted', true));
            $this->redirect(['action' => 'index']);
        }
    }
}
