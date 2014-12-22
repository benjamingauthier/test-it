<?php
App::uses('AppController', 'Controller');
/**
 * UsersTestOperatingSystems Controller
 *
 * @property UsersTestOperatingSystem $UsersTestOperatingSystem
 * @property PaginatorComponent $Paginator
 */
class UsersTestOperatingSystemsController extends AppController {

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
		$this->UsersTestOperatingSystem->recursive = 0;
		$this->set('usersTestOperatingSystems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsersTestOperatingSystem->exists($id)) {
			throw new NotFoundException(__('Invalid users test operating system'));
		}
		$options = array('conditions' => array('UsersTestOperatingSystem.' . $this->UsersTestOperatingSystem->primaryKey => $id));
		$this->set('usersTestOperatingSystem', $this->UsersTestOperatingSystem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersTestOperatingSystem->create();
			if ($this->UsersTestOperatingSystem->save($this->request->data)) {
				$this->Session->setFlash(__('The users test operating system has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users test operating system could not be saved. Please, try again.'));
			}
		}
		$users = $this->UsersTestOperatingSystem->User->find('list');
		$operatingSystems = $this->UsersTestOperatingSystem->OperatingSystem->find('list');
		$this->set(compact('users', 'operatingSystems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UsersTestOperatingSystem->exists($id)) {
			throw new NotFoundException(__('Invalid users test operating system'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsersTestOperatingSystem->save($this->request->data)) {
				$this->Session->setFlash(__('The users test operating system has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users test operating system could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersTestOperatingSystem.' . $this->UsersTestOperatingSystem->primaryKey => $id));
			$this->request->data = $this->UsersTestOperatingSystem->find('first', $options);
		}
		$users = $this->UsersTestOperatingSystem->User->find('list');
		$operatingSystems = $this->UsersTestOperatingSystem->OperatingSystem->find('list');
		$this->set(compact('users', 'operatingSystems'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UsersTestOperatingSystem->id = $id;
		if (!$this->UsersTestOperatingSystem->exists()) {
			throw new NotFoundException(__('Invalid users test operating system'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsersTestOperatingSystem->delete()) {
			$this->Session->setFlash(__('The users test operating system has been deleted.'));
		} else {
			$this->Session->setFlash(__('The users test operating system could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
