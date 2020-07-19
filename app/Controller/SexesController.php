<?php
App::uses('AppController', 'Controller');
/**
 * Sexes Controller
 *
 * @property Sex $Sex
 * @property PaginatorComponent $Paginator
 */
class SexesController extends AppController {

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
		$this->Sex->recursive = 0;
		$this->set('sexes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sex->exists($id)) {
			throw new NotFoundException(__('Invalid sex'));
		}
		$options = array('conditions' => array('Sex.' . $this->Sex->primaryKey => $id));
		$this->set('sex', $this->Sex->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sex->create();
			if ($this->Sex->save($this->request->data)) {
				$this->Flash->success(__('The sex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sex could not be saved. Please, try again.'));
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
		if (!$this->Sex->exists($id)) {
			throw new NotFoundException(__('Invalid sex'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sex->save($this->request->data)) {
				$this->Flash->success(__('The sex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sex could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sex.' . $this->Sex->primaryKey => $id));
			$this->request->data = $this->Sex->find('first', $options);
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
		if (!$this->Sex->exists($id)) {
			throw new NotFoundException(__('Invalid sex'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sex->delete($id)) {
			$this->Flash->success(__('The sex has been deleted.'));
		} else {
			$this->Flash->error(__('The sex could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function get_sexe()
	{
		$sexes=$this->Sex->find('list');
		return $sexes;
	}
}
