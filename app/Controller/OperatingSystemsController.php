<?php
App::uses('AppController', 'Controller');
/**
 * OperatingSystems Controller
 *
 * @property OperatingSystem $OperatingSystem
 * @property PaginatorComponent $Paginator
 */
class OperatingSystemsController extends AppController {

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
		$this->OperatingSystem->recursive = 0;
		$this->set('operatingSystems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OperatingSystem->exists($id)) {
			throw new NotFoundException(__('Invalid operating system'));
		}
		$options = array('conditions' => array('OperatingSystem.' . $this->OperatingSystem->primaryKey => $id));
		$this->set('operatingSystem', $this->OperatingSystem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OperatingSystem->create();
			if ($this->OperatingSystem->save($this->request->data)) {
				$this->Session->setFlash(__('The operating system has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operating system could not be saved. Please, try again.'));
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
		if (!$this->OperatingSystem->exists($id)) {
			throw new NotFoundException(__('Invalid operating system'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OperatingSystem->save($this->request->data)) {
				$this->Session->setFlash(__('The operating system has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operating system could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OperatingSystem.' . $this->OperatingSystem->primaryKey => $id));
			$this->request->data = $this->OperatingSystem->find('first', $options);
		}
		$tests = $this->OperatingSystem->Test->find('list');
		$this->set(compact('tests'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OperatingSystem->id = $id;
		if (!$this->OperatingSystem->exists()) {
			throw new NotFoundException(__('Invalid operating system'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OperatingSystem->delete()) {
			$this->Session->setFlash(__('The operating system has been deleted.'));
		} else {
			$this->Session->setFlash(__('The operating system could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
