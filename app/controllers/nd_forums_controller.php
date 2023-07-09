<?php
class NdForumsController extends AppController {

	var $name = 'NdForums';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->NdForum->recursive = 0;
		$this->set('ndForums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid NdForum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ndForum', $this->NdForum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->NdForum->create();
			if ($this->NdForum->save($this->data)) {
				$this->Session->setFlash(__('The NdForum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The NdForum could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid NdForum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
		print_r($this->data);exit;

			if ($this->NdForum->save($this->data)) {
				$this->Session->setFlash(__('The NdForum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The NdForum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->NdForum->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for NdForum', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->NdForum->del($id)) {
			$this->Session->setFlash(__('NdForum deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The NdForum could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>