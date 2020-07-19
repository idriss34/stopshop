<?php
App::uses('AppController', 'Controller');
/**
 * Produits Controller
 *
 * @property Produit $Produit
 * @property PaginatorComponent $Paginator
 */
class ProduitsController extends AppController {

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
		$this->layout='admin';
		$this->Produit->recursive = 0;
		$this->set('produits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout='admin';
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
		$this->set('produit', $this->Produit->find('first', $options));
		$produit = $this->Produit->find('first',array('conditions'=>array('Produit.id'=>$id())));
		$this->set(compact('produit',$this->Paginator->paginate()));	

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->Produit->create();
 			if ($this->Produit->save($this->request->data))
			{
					$produit=$this->Produit->getInsertID();
				$this->loadModel('Image');
				foreach ($this->request->data['Images']['image'] as $value) {
					$d=array();
					$d['Image']['produit_id']=$produit;
					$date = date('H-i-s');
					$file = $value['path']['tmp_name'];
		            $ext = explode(".", $value['path']['name']);
		            $ext = $ext[count($ext) -1];
					if (!empty($file))
					{
						$value['path'] = $date . '' . rand() . ".$ext";
						move_uploaded_file($file, 'img/images/Uploaded_Photo/' . $value['path']);
         		    }
					$d['Image']['name']=$value['path'];
					$this->Image->create();
					$this->Image->save($d);
					# code...
				}
				$this->Session->setFlash(__(''));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produit could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Produit->Categorie->find('list');
		$this->set(compact('categories'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null,$idimage =null) {
		/* if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produit->save($this->request->data)) {
				$this->Flash->success(__('The produit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The produit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
			$this->request->data = $this->Produit->find('first', $options);
		}
		$categories = $this->Produit->Categorie->find('list');
		$this->set(compact('categories')); */
		$this->layout='admin';
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		//
		$this->loadModel('Image');
		//$modelImg = $this->Image->find('list',array('fields'=>'id','conditions'=>array('produit_id'=>$id)));
	//
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produit->save($this->request->data)) {
						if ($this->request->is(array('post', 'put'))) {
							if ($this->Produit->save($this->request->data)) {
								//
								$idd= $this->Image->find('first',array('fields'=>'id','conditions'=>array('produit_id'=>$id)));
								$i=$idd['Image']['id'];
								foreach ($this->request->data['Images']['image'] as $value) 
								{		
							//	foreach($modelImg as $imgid)
							//	{
										$d=array();
										$d['Image']['produit_id']=$id;
										$date = date('H-i-s');
										$file = $value['path']['tmp_name'];
										$ext = explode(".", $value['path']['name']);
										$ext = $ext[count($ext) -1];
										if (!empty($file)) 
										{
											$value['path'] = $date . '' . rand() . ".$ext";
											move_uploaded_file($file, 'img/images/Uploaded_Photo/' . $value['path']);
										}
										$d['Image']['name']=$value['path'];		
										
										$this->Image->id = $i;
										$this->Image->saveField('name',$d['Image']['name']);
										$i++;
										//
							//	} 
 
							}
						 
						
						
						
						
						}
						 /*								}
								$this->Flash->success(__('The produit has been saved.'));
								return $this->redirect(array('action' => 'index'));
							*/
							else {
								$this->Flash->error(__('The produit could not be saved. Please, try again.'));
							}
						} else {
							$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
							$this->request->data = $this->Produit->find('first', $options);
						}# code...
						
							
				$this->Session->setFlash('The produit has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The produit could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
			$this->request->data = $this->Produit->find('first', $options);
		}
	
		//
		$categories = $this->Produit->Categorie->find('list');
		$this->set(compact('categories'));
		///////
		$this->loadModel('Image');
		$images = $this->Image->find('all');
		$this->set(compact('images'));		
		///////
		$this->loadModel('Produit');
		$images = $this->Image->find('all');
		$this->set(compact('produits'));	
		///////
		$produit = $this->Produit->find('first',array('conditions'=>array('Produit.id'=>$id)));
		$this->set(compact('produit',$this->Paginator->paginate()));	
	}	

	
	

	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produit->delete($id)) {
			$this->Session->setFlash(__('The produit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The produit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function shop()
	{
		$this->layout='default';
		$this->loadModel('Image');
		$images = $this->Image->find('all');
		$this->set(compact('images',$this->Paginator->paginate()));
		
	}
}
