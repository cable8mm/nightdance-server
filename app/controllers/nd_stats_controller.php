<?php
class NdStatsController extends AppController {

	var $name = 'NdStats';

	function index() {
		$conditions = array();
		$this->data['NdStat'] = $this->passedArgs = array_merge($this->passedArgs, $this->params['url']);
		if(isset($this->passedArgs['stats_typed']) && $this->passedArgs['stats_typed'] !== '') $conditions['and'][] = array('NdStat.stats_typed' => $this->passedArgs['stats_typed']);
		if(isset($this->passedArgs['user_id']) && $this->passedArgs['user_id'] !== '') $conditions['and'][] = array('NdStat.user_id' => $this->passedArgs['user_id']);
		if(isset($this->passedArgs['username']) && $this->passedArgs['username'] !== '') $conditions['and'][] = array('NdUser.username' => $this->passedArgs['username']);

		$this->NdStat->recursive = 0;
		$this->set('ndStats', $this->paginate('NdStat', $conditions));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid NdStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ndStat', $this->NdStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->NdStat->create();
			if ($this->NdStat->save($this->data)) {
				$this->Session->setFlash(__('The NdStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The NdStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid NdStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->NdStat->save($this->data)) {
				$this->Session->setFlash(__('The NdStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The NdStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->NdStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for NdStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->NdStat->del($id)) {
			$this->Session->setFlash(__('NdStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>