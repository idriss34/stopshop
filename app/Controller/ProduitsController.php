<?php
App::uses('AppController', 'Controller');
/**
 * Produits Controller
 *
 * @property Produit $Produit
 * @property PaginatorComponent $Paginator
 */
class ProduitsController extends AppController {
	function beforeFilter() {
        parent::beforeFilter();
    $this->Auth->allow('shop');
    }

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
	public function home()
	{
		$this->layout='blank';
		$user=$this->Auth->user();
		$this->set('user', $this->Auth->user());
	}


	public function shop()
	{
		$this->layout="default";
		$produits = $this->Produit->find('all');
		$this->set('produits',$produits);
	}

	public function get_info_prod()
	{
		if($this->request->is('post'))
		{
			$id_pr= $this->request->data['id'];
			$prod = $this->Produit->find('first',array('conditions'=>array('Produit.id'=>$id_pr)));
			$json = json_encode($prod);
			echo $json;
		}
		die;
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null)
	{
		$this->layout='admin';
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
		$this->set('produit', $this->Produit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add()
	{
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->Produit->create();
			if ($this->Produit->save($this->request->data))
			{
				$produit=$this->Produit->getInsertID();
				$this->loadModel('Image');
				foreach ($this->request->data['Produit']['image'] as $value)
				{
					$d=array();
					$d['Image']['produit_id']=$produit;
					$date = date('H-i-s');
		            $file = $value['path']['tmp_name'];
		            $ext = explode(".", $value['path']['name']);
		            $ext = $ext[count($ext) - 1];
		            if (!empty($file)) {
             		    $value['path'] = $date . '' . rand() . ".$ext";
              			move_uploaded_file($file, 'img/images/Uploaded_Photo/' . $value['path']);
          			  }
					$d['Image']['name']=$value['path'];
					$this->Image->create();
					$this->Image->save($d);
					# code...
				}
				return $this->redirect(array('action' => 'index'));
				exit();
			}
			else
			{
				$this->Session->setFlash(__('The produit could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Produit->Categorie->find('list');
		$sexes = $this->Produit->Sex->find('list');
		$this->set(compact('categories', 'sexes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout='admin';
		$this->loadModel('Image');
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$this->loadModel('Image');
		$id_img= $this->Image->find('list',array('fields'=>'id'));

		if ($this->request->is(array('post', 'put')))
		{
//			debug($this->request->data); die;
			if ($this->Produit->save($this->request->data))
			{

				foreach ($this->request->data['Produit']['image'] as $key => $value)
				{
					$date = date('H-i-s');
					$file = $value['path']['tmp_name'];
					if(!empty($file))
					{
						$ext = explode(".", $value['path']['name']);
						$ext = $ext[count($ext) -1];
						$value['path'] = $date . '' . rand() . ".$ext";
						move_uploaded_file($file, 'img/images/Uploaded_Photo/' . $value['path']);
						if(in_array($key,$id_img))
						{
							$this->Image->id = $key ;
							$this->Image->saveField('name',$value['path']);
							break;
						}
						else{
							$d=array();
							$d['Image']['produit_id']=$id;
							$d['Image']['name']=$value['path'];
							$this->Image->create();
							$this->Image->save($d);
						}
						//debug($d);

					}


				}
				//die;
					return $this->redirect(array('action' => 'index'));

		 } else
		 	{
				$this->Session->setFlash('The produit could not be saved. Please, try again.');
			}
		}else{
			$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
			$this->request->data = $this->Produit->find('first', $options);
		}

		$categories = $this->Produit->Categorie->find('list');
		$sexes = $this->Produit->Sex->find('list');
	 	$produit = $this->Produit->find('first',array('conditions'=>array('Produit.id'=>$id)));

		$this->set(compact('categories', 'sexes'));
		$this->set('produit',$produit);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->layout='admin';
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produit->delete($id)) {
			$this->Session->setFlash('The produit has been deleted.');
		} else {
			$this->Session->setFlash('The produit could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function likes()
	{
		if($this->request->is('post'))
		{
			$Name_Product=$this->request->data['Name_Product'];
			$Prix_Product=$this->request->data['Prix_Product'];
			$Img_Product=$this->request->data['Img_Product'];
			$Id_Product=$this->request->data['Id_Product'];
			if(strlen($this->Session->read('Likes'))<1)
			{
				$this->Session->write('Likes',$Id_Product.",".$Name_Product.",".$Prix_Product.",".$Img_Product);
			}
			else
			{
				$pan=explode('|',$this->Session->read('Likes'));
				foreach($pan as $t)
				{
					$pandet=explode(',',$t);
					$produitsC[]=$pandet[0];
				}
				$produitsC=array_unique($produitsC);
				foreach($produitsC as $p)
				{
					$prodC[$p]['Id_Product']=0;
					$prodC[$p]['Name_Product']=0;
					$prodC[$p]['Prix_Product']=' ';
					$prodC[$p]['Img_Product']='';
				}
				foreach($pan as $t)
				{
					$pandet=explode(',',$t);
					$v=$pandet[0];
					$prodC[$v]['Id_Product']=$pandet[0];
					$prodC[$v]['Name_Product']=$pandet[1];
					$prodC[$v]['Prix_Product']=$pandet[2];
					$prodC[$v]['Img_Product']=$pandet[3];

				}
				foreach($prodC as $key=>$v)
				{
					if($key==$Id_Product){
						$prodC[$key]['Id_Product']=$Id_Product;
						$prodC[$key]['Name_Product']=$Name_Product;
						$prodC[$key]['Prix_Product']=$Prix_Product;
						$prodC[$key]['Img_Product']=$Img_Product;
					}
					else
					{
						$prodC[$Id_Product]['Id_Product']=$Id_Product;
						$prodC[$Id_Product]['Name_Product']=$Name_Product;
						$prodC[$Id_Product]['Prix_Product']=$Prix_Product;
						$prodC[$Id_Product]['Img_Product']=$Img_Product;
					}
				}
				$data='';
				foreach($prodC as $key=>$t)
				{
					$data=$data."|".$t['Id_Product'].','.$t['Name_Product'].','.$t['Prix_Product'].','.$t['Img_Product'];
				}
				$data=ltrim($data, '|');
				$this->Session->write('Likes',$data);
			}
		}
		$likes=explode('|',$this->Session->read('Likes'));
		if($this->Session->read('Likes')!==null)
		{
				foreach($likes as $product)
				{
					$prod[]=explode(',',$product);
				}

				$count_products=count($prod);
		}
		else
		{
			$count_products=0;
		}
		$json=json_encode($count_products);
		echo $json;
		die;

	}
	public function delete_like()
	{
		if ($this->request->is('post'))
		{
			$prod_id=$this->request->data["produit_id"];
			if(!empty($prod_id) )
			{
				$pan=explode('|',$this->Session->read('Likes'));
				foreach($pan as $t)
				{
					$pandet=explode(',',$t);
					$produitsC[]=$pandet[0];
				}
				$produitsC=array_unique($produitsC);
				foreach($produitsC as $p)
				{
					$prodC[$p]['Id_Product']='';
					$prodC[$p]['Name_Product']='';
					$prodC[$p]['Prix_Product']='';
					$prodC[$p]['Img_Product']='';
				}
				foreach($pan as $t)
				{
					$pandet=explode(',',$t);
					$v=$pandet[0];
					$prodC[$v]['Id_Product']=$pandet[0];
					$prodC[$v]['Name_Product']=$pandet[1];
					$prodC[$v]['Prix_Product']=$pandet[2];
					$prodC[$v]['Img_Product']=$pandet[3];
				}
				$data='';
				foreach($prodC as $key=>$t)
				{
					if ($key==$prod_id)
					{
					}
					else{
						$data=$data."|".$t['Id_Product'].','.$t['Name_Product'].','.$t['Prix_Product'].','.$t['Img_Product'];
					}

				}

				$data=ltrim($data, '|');
				$this->Session->write('Likes',$data);


			}
		}
	}
	public function recherche(){
		$this->layout="default";
		$produits = $this->Produit->find('all');
		$this->set('produits',$produits);
	}
}

