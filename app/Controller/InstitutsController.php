<?php
App::uses('AppController', 'Controller');
/**
 * Instituts Controller
 *
 * @property Institut $Institut
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class InstitutsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Institut->recursive = 0;
		$this->set('instituts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Institut->exists($id)) {
			throw new NotFoundException(__('Invalid institut'));
		}
		$options = array('conditions' => array('Institut.' . $this->Institut->primaryKey => $id));
		$this->set('institut', $this->Institut->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Institut->create();
			if ($this->Institut->save($this->request->data)) {
				$this->Flash->success(__('The institut has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The institut could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Institut->exists($id)) {
			throw new NotFoundException(__('Invalid institut'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Institut->save($this->request->data)) {
				$this->Flash->success(__('The institut has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The institut could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Institut.' . $this->Institut->primaryKey => $id));
			$this->request->data = $this->Institut->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Institut->id = $id;
		if (!$this->Institut->exists()) {
			throw new NotFoundException(__('Invalid institut'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Institut->delete()) {
			$this->Flash->success(__('The institut has been deleted.'));
		} else {
			$this->Flash->error(__('The institut could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Institut->recursive = 0;
		$this->set('instituts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Institut->exists($id)) {
			throw new NotFoundException(__('Invalid institut'));
		}
		$options = array('conditions' => array('Institut.' . $this->Institut->primaryKey => $id));
		$this->set('institut', $this->Institut->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Institut->create();
			if ($this->Institut->save($this->request->data)) {
				$this->Flash->success(__('The institut has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The institut could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Institut->exists($id)) {
			throw new NotFoundException(__('Invalid institut'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Institut->save($this->request->data)) {
				$this->Flash->success(__('The institut has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The institut could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Institut.' . $this->Institut->primaryKey => $id));
			$this->request->data = $this->Institut->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Institut->id = $id;
		if (!$this->Institut->exists()) {
			throw new NotFoundException(__('Invalid institut'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Institut->delete()) {
			$this->Flash->success(__('The institut has been deleted.'));
		} else {
			$this->Flash->error(__('The institut could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
