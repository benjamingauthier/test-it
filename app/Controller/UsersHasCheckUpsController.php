<?php
App::uses('AppController', 'Controller');
/**
 * UsersHasCheckUps Controller
 *
 * @property UsersHasCheckUp $UsersHasCheckUp
 * @property PaginatorComponent $Paginator
 */
class UsersHasCheckUpsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UsersHasCheckUp->recursive = 0;
		$this->set('usersHasCheckUps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsersHasCheckUp->exists($id)) {
			throw new NotFoundException(__('Invalid users has check up'));
		}
		$options = array('conditions' => array('UsersHasCheckUp.' . $this->UsersHasCheckUp->primaryKey => $id));
		$this->set('usersHasCheckUp', $this->UsersHasCheckUp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersHasCheckUp->create();
			if ($this->UsersHasCheckUp->save($this->request->data)) {
				$this->Session->setFlash(__('The users has check up has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users has check up could not be saved. Please, try again.'));
			}
		}
		$users = $this->UsersHasCheckUp->User->find('list');
		$checkUps = $this->UsersHasCheckUp->CheckUp->find('list');
		$this->set(compact('users', 'checkUps'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UsersHasCheckUp->exists($id)) {
			throw new NotFoundException(__('Invalid users has check up'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsersHasCheckUp->save($this->request->data)) {
				$this->Session->setFlash(__('The users has check up has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users has check up could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersHasCheckUp.' . $this->UsersHasCheckUp->primaryKey => $id));
			$this->request->data = $this->UsersHasCheckUp->find('first', $options);
		}
		$users = $this->UsersHasCheckUp->User->find('list');
		$checkUps = $this->UsersHasCheckUp->CheckUp->find('list');
		$this->set(compact('users', 'checkUps'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UsersHasCheckUp->id = $id;
		if (!$this->UsersHasCheckUp->exists()) {
			throw new NotFoundException(__('Invalid users has check up'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsersHasCheckUp->delete()) {
			$this->Session->setFlash(__('The users has check up has been deleted.'));
		} else {
			$this->Session->setFlash(__('The users has check up could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
