<?php
class PointActionsController extends AppController {

	var $name = 'PointActions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->set('PointActions', $this->paginate('PointAction', $conditions));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid PointAction.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('PointAction', $this->PointAction->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PointAction->create();
			if ($this->PointAction->save($this->data)) {
				$this->Session->setFlash(__('The PointAction has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PointAction could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid PointAction', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->PointAction->save($this->data)) {
				$this->Session->setFlash(__('The PointAction has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PointAction could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PointAction->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for PointAction', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PointAction->del($id)) {
			$this->Session->setFlash(__('PointAction deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>