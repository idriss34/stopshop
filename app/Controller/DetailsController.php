<?php
App::uses('AppController', 'Controller');
/**
 * Details Controller
 *
 * @property Detail $Detail
 * @property PaginatorComponent $Paginator
 */
class DetailsController extends AppController {

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
		$this->Detail->recursive = 0;
		$this->set('details', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Detail->exists($id)) {
			throw new NotFoundException(__('Invalid detail'));
		}
		$options = array('conditions' => array('Detail.' . $this->Detail->primaryKey => $id));
		$this->set('detail', $this->Detail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Detail->create();
			if ($this->Detail->save($this->request->data)) {
				$this->Flash->success(__('The detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The detail could not be saved. Please, try again.'));
			}
		}
		$commandes = $this->Detail->Commande->find('list');
		$produits = $this->Detail->Produit->find('list');
		$this->set(compact('commandes', 'produits'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Detail->exists($id)) {
			throw new NotFoundException(__('Invalid detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Detail->save($this->request->data)) {
				$this->Flash->success(__('The detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Detail.' . $this->Detail->primaryKey => $id));
			$this->request->data = $this->Detail->find('first', $options);
		}
		$commandes = $this->Detail->Commande->find('list');
		$produits = $this->Detail->Produit->find('list');
		$this->set(compact('commandes', 'produits'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Detail->exists($id)) {
			throw new NotFoundException(__('Invalid detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Detail->delete($id)) {
			$this->Flash->success(__('The detail has been deleted.'));
		} else {
			$this->Flash->error(__('The detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	/**
	 * Deletes multiple model records based on a set of conditions.
	 *
	 * @param mixed $conditions Conditions to match
	 * @param bool $cascade Set to true to delete records that depend on this record
	 * @param bool $callbacks Run callbacks
	 * @return bool True on success, false on failure
	 * @link http://book.cakephp.org/2.0/en/models/deleting-data.html#deleteall
	 */
	public function deleteAll($conditions, $cascade = true, $callbacks = false) 
	{
	}
}
