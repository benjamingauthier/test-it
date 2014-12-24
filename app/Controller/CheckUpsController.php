<?php
App::uses('AppController', 'Controller');
/**
 * CheckUps Controller
 *
 * @property CheckUp $CheckUp
 * @property PaginatorComponent $Paginator
 */
class CheckUpsController extends AppController {

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
		$this->CheckUp->recursive = 0;
		$this->set('checkUps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CheckUp->exists($id)) {
			throw new NotFoundException(__('Invalid check up'));
		}
		$options = array('conditions' => array('CheckUp.' . $this->CheckUp->primaryKey => $id));
		$this->set('checkUp', $this->CheckUp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CheckUp->create();
			if ($this->CheckUp->save($this->request->data)) {
				$this->Session->setFlash(__('The check up has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The check up could not be saved. Please, try again.'));
			}
		}
		$versions = $this->CheckUp->Version->find('list');
		$this->set(compact('versions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CheckUp->exists($id)) {
			throw new NotFoundException(__('Invalid check up'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CheckUp->save($this->request->data)) {
				$this->Session->setFlash(__('The check up has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The check up could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CheckUp.' . $this->CheckUp->primaryKey => $id));
			$this->request->data = $this->CheckUp->find('first', $options);
		}
		$versions = $this->CheckUp->Version->find('list');
		$this->set(compact('versions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CheckUp->id = $id;
		if (!$this->CheckUp->exists()) {
			throw new NotFoundException(__('Invalid check up'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CheckUp->delete()) {
			$this->Session->setFlash(__('The check up has been deleted.'));
		} else {
			$this->Session->setFlash(__('The check up could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
