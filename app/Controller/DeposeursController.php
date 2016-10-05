<?php
App::uses('AppController', 'Controller');
/**
 * Deposeurs Controller
 *
 * @property Deposeur $Deposeur
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DeposeursController extends AppController {

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
		$this->Deposeur->recursive = 0;
		$this->set('deposeurs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Deposeur->exists($id)) {
			throw new NotFoundException(__('Invalid deposeur'));
		}
		$options = array('conditions' => array('Deposeur.' . $this->Deposeur->primaryKey => $id));
		$this->set('deposeur', $this->Deposeur->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Deposeur->create();
			if ($this->Deposeur->save($this->request->data)) {
				$this->Flash->success(__('The deposeur has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The deposeur could not be saved. Please, try again.'));
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
		if (!$this->Deposeur->exists($id)) {
			throw new NotFoundException(__('Invalid deposeur'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Deposeur->save($this->request->data)) {
				$this->Flash->success(__('The deposeur has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The deposeur could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Deposeur.' . $this->Deposeur->primaryKey => $id));
			$this->request->data = $this->Deposeur->find('first', $options);
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
		$this->Deposeur->id = $id;
		if (!$this->Deposeur->exists()) {
			throw new NotFoundException(__('Invalid deposeur'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Deposeur->delete()) {
			$this->Flash->success(__('The deposeur has been deleted.'));
		} else {
			$this->Flash->error(__('The deposeur could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Deposeur->recursive = 0;
		$this->set('deposeurs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Deposeur->exists($id)) {
			throw new NotFoundException(__('Invalid deposeur'));
		}
		$options = array('conditions' => array('Deposeur.' . $this->Deposeur->primaryKey => $id));
		$this->set('deposeur', $this->Deposeur->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Deposeur->create();
			if ($this->Deposeur->save($this->request->data)) {
				$this->Flash->success(__('The deposeur has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The deposeur could not be saved. Please, try again.'));
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
		if (!$this->Deposeur->exists($id)) {
			throw new NotFoundException(__('Invalid deposeur'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Deposeur->save($this->request->data)) {
				$this->Flash->success(__('The deposeur has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The deposeur could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Deposeur.' . $this->Deposeur->primaryKey => $id));
			$this->request->data = $this->Deposeur->find('first', $options);
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
		$this->Deposeur->id = $id;
		if (!$this->Deposeur->exists()) {
			throw new NotFoundException(__('Invalid deposeur'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Deposeur->delete()) {
			$this->Flash->success(__('The deposeur has been deleted.'));
		} else {
			$this->Flash->error(__('The deposeur could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
