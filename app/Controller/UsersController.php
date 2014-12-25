<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
            debug($this->request->data);
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->write('User.name', $this->User->firstname);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__(''));
                $this->Session->setFlash('Wrong username or password', 'flash_fail');
            }
        }
        if ($this->Session->read('Auth.User')) {
            $this->Session->setFlash('Vous êtes connecté!');
            return $this->redirect('/');
        }
    }

    public function logout() {
        $this->Session->setFlash('Good bye !', 'flash_success');
        return $this->redirect($this->Auth->logout());
    }

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('initDB');
    }

    public function initDB() {
        $group = $this->User->Group;
        // Autorise l'accès à tout pour les admins
        $group->id = 1;
        $this->Acl->allow($group, 'controllers');

        // Autorise l'accès aux posts et widgets pour les managers
        $group->id = 2;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Applications');


        // Permet aux utilisateurs classiques de se déconnecter
        $this->Acl->allow($group, 'controllers/users/logout');

        // Nous ajoutons un exit pour éviter d'avoir un message d'erreur affreux "missing views" (manque une vue)
        echo "tout est ok";
        exit;
    }
}
