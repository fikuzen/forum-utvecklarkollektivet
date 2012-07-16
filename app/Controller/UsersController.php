<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

    /**
     * This function is called before any thing else
     *
     * TIP: Uncomment $this->Auth->allow('add'); and go to /users/add to create a first user
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    /**
     * index method
     */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

    /**
     * login method
     */
    public function login() {
        $this->layout = 'login';

        if (!$this->request->is('post')) {
            return;
        }

        if ($this->Session->read('Auth.User') || $this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        }
        else {
            $this->Session->setFlash('Fel lösenord eller användarnamn.');
        }
    }

    /**
     * Logout method
     */
    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

    /**
     * add method
     *
     * @return void
     */
	public function add() {
        $this->layout = 'login';

		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
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
     */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
