<?php

class NdClipsController extends AppController
{
    public $name = 'NdClips';

    public $helpers = ['Html', 'Form'];

    public function index()
    {
        $conditions = [];
        $this->data['NdClip'] = $this->passedArgs = array_merge($this->passedArgs, $this->params['url']);
        if (isset($this->passedArgs['search_word']) && $this->passedArgs['search_word'] !== '') {
            $conditions['or'][] = ['NdClip.clip_title LIKE' => '%'.$this->passedArgs['search_word'].'%'];
        }
        if (isset($this->passedArgs['search_word']) && $this->passedArgs['search_word'] !== '') {
            $conditions['or'][] = ['NdClip.clip_credit LIKE' => '%'.$this->passedArgs['search_word'].'%'];
        }

        $this->NdClip->recursive = 0;

        $this->set('ndClips', $this->paginate('NdClip', $conditions));
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
        $clipCategories = $this->NdClip->ClipCategory->find('list');
        $this->set(compact('ndGenres', 'ndCategories', 'clipCategories'));
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
        $clipCategories = $this->NdClip->ClipCategory->find('list');
        $this->set(compact('ndGenres', 'ndCategories', 'clipCategories'));
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
