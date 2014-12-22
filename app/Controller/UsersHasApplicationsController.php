<?php
App::uses('AppController', 'Controller');
/**
 * UsersHasApplications Controller
 *
 * @property UsersHasApplication $UsersHasApplication
 * @property PaginatorComponent $Paginator
 */
class UsersHasApplicationsController extends AppController {

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
		$this->UsersHasApplication->recursive = 0;
		$this->set('usersHasApplications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsersHasApplication->exists($id)) {
			throw new NotFoundException(__('Invalid users has application'));
		}
		$options = array('conditions' => array('UsersHasApplication.' . $this->UsersHasApplication->primaryKey => $id));
		$this->set('usersHasApplication', $this->UsersHasApplication->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersHasApplication->create();
			if ($this->UsersHasApplication->save($this->request->data)) {
				$this->Session->setFlash(__('The users has application has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users has application could not be saved. Please, try again.'));
			}
		}
		$users = $this->UsersHasApplication->User->find('list');
		$applications = $this->UsersHasApplication->Application->find('list');
		$this->set(compact('users', 'applications'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UsersHasApplication->exists($id)) {
			throw new NotFoundException(__('Invalid users has application'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsersHasApplication->save($this->request->data)) {
				$this->Session->setFlash(__('The users has application has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users has application could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersHasApplication.' . $this->UsersHasApplication->primaryKey => $id));
			$this->request->data = $this->UsersHasApplication->find('first', $options);
		}
		$users = $this->UsersHasApplication->User->find('list');
		$applications = $this->UsersHasApplication->Application->find('list');
		$this->set(compact('users', 'applications'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UsersHasApplication->id = $id;
		if (!$this->UsersHasApplication->exists()) {
			throw new NotFoundException(__('Invalid users has application'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsersHasApplication->delete()) {
			$this->Session->setFlash(__('The users has application has been deleted.'));
		} else {
			$this->Session->setFlash(__('The users has application could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
