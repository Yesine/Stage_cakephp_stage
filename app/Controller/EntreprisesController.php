<?php
App::uses('AppController', 'Controller');
/**
 * Entreprises Controller
 *
 * @property Entreprise $Entreprise
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EntreprisesController extends AppController {

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
		$this->Entreprise->recursive = 0;
		$this->set('entreprises', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entreprise->exists($id)) {
			throw new NotFoundException(__('Invalid entreprise'));
		}
		$options = array('conditions' => array('Entreprise.' . $this->Entreprise->primaryKey => $id));
		$this->set('entreprise', $this->Entreprise->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entreprise->create();
			if ($this->Entreprise->save($this->request->data)) {
				$this->Flash->success(__('The entreprise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entreprise could not be saved. Please, try again.'));
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
		if (!$this->Entreprise->exists($id)) {
			throw new NotFoundException(__('Invalid entreprise'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entreprise->save($this->request->data)) {
				$this->Flash->success(__('The entreprise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entreprise could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entreprise.' . $this->Entreprise->primaryKey => $id));
			$this->request->data = $this->Entreprise->find('first', $options);
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
		$this->Entreprise->id = $id;
		if (!$this->Entreprise->exists()) {
			throw new NotFoundException(__('Invalid entreprise'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entreprise->delete()) {
			$this->Flash->success(__('The entreprise has been deleted.'));
		} else {
			$this->Flash->error(__('The entreprise could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Entreprise->recursive = 0;
		$this->set('entreprises', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Entreprise->exists($id)) {
			throw new NotFoundException(__('Invalid entreprise'));
		}
		$options = array('conditions' => array('Entreprise.' . $this->Entreprise->primaryKey => $id));
		$this->set('entreprise', $this->Entreprise->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Entreprise->create();
			if ($this->Entreprise->save($this->request->data)) {
				$this->Flash->success(__('The entreprise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entreprise could not be saved. Please, try again.'));
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
		if (!$this->Entreprise->exists($id)) {
			throw new NotFoundException(__('Invalid entreprise'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entreprise->save($this->request->data)) {
				$this->Flash->success(__('The entreprise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entreprise could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entreprise.' . $this->Entreprise->primaryKey => $id));
			$this->request->data = $this->Entreprise->find('first', $options);
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
		$this->Entreprise->id = $id;
		if (!$this->Entreprise->exists()) {
			throw new NotFoundException(__('Invalid entreprise'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entreprise->delete()) {
			$this->Flash->success(__('The entreprise has been deleted.'));
		} else {
			$this->Flash->error(__('The entreprise could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
