<?php
App::uses('AppController', 'Controller');
/**
 * Versions Controller
 *
 * @property Version $Version
 * @property PaginatorComponent $Paginator
 */
class VersionsController extends AppController {

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
		$this->Version->recursive = 0;
		$this->set('versions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Version->exists($id)) {
			throw new NotFoundException(__('Invalid version'));
		}
		$options = array('conditions' => array('Version.' . $this->Version->primaryKey => $id));
		$this->set('version', $this->Version->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Version->create();
			if ($this->Version->save($this->request->data)) {
				$this->Session->setFlash(__('The version has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The version could not be saved. Please, try again.'));
			}
		}
		$applications = $this->Version->Application->find('list');
		$this->set(compact('applications'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Version->exists($id)) {
			throw new NotFoundException(__('Invalid version'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Version->save($this->request->data)) {
				$this->Session->setFlash(__('The version has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The version could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Version.' . $this->Version->primaryKey => $id));
			$this->request->data = $this->Version->find('first', $options);
		}
		//$applications = $this->Version->Application->find('list');
		//$this->set(compact('applications'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Version->id = $id;
		if (!$this->Version->exists()) {
			throw new NotFoundException(__('Invalid version'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Version->delete()) {
			$this->Session->setFlash(__('The version has been deleted.'));
		} else {
			$this->Session->setFlash(__('The version could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function addVersionApplication($id_application = null) {
        if ($this->request->is('post')) {
            $this->Version->create();
            $version = $this->request->data;
            $version['Version']['applications_id'] = $id_application;
            debug($version);
            if ($this->Version->save($version)) {
                $this->Session->setFlash('La nouvelle version a été créée', 'flash_success');
                return $this->redirect(array('controller' => 'Applications','action' => 'view',$id_application));
            } else {

                $this->Session->setFlash(__('The version could not be saved. Please, try again.'));
            }
        }
    }
}
