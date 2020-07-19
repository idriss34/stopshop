<?php
App::uses('AppController', 'Controller');
/**
 * Paniers Controller
 *
 * @property Panier $Panier
 * @property PaginatorComponent $Paginator
 */
class PaniersController extends AppController {

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
		 $this->layout='default';
		 $this->loadModel('User');
		$this->loadModel('Produit');
		if($this->Auth->user())
		{
			$user = $this->Auth->user('id');
			$userinfo = $this->User->find('first',array('conditions'=>array('User.id'=>$user)));
			$this->set('userinfo',$userinfo);
		}


		if(!empty($this->Session->read('panier')))
		{
			$cart=explode('|',$this->Session->read('panier'));
			foreach($cart as $product)
			{
				$products[]=explode(',',$product);
			}
			$this->set(compact('products'));
//			debug($products); die;
		}
	}
	public function panier() {
		if ($this->request->is('post'))
		{
			$prod_color = $this->request->data['color_prod'];
			$prod_id = $this->request->data['produit_id'];
			$prod_size = $this->request->data['size_prod'];
			$prod_qte = $this->request->data['qte_prod'];
			$Prix_tot = $this->request->data['Prix_tot'];
			$img_Prod = $this->request->data['img_prod'];
			$name_Prod = $this->request->data['name_prod'];
		}
		if(strlen($this->Session->read('panier')<1))
		{
			$this->Session->write('panier',$prod_id.",".$prod_qte.",".$prod_color.",".$prod_size.",".$Prix_tot.",".$img_Prod.",".$name_Prod);
		}
		else
		{
			$pan=explode('|',$this->Session->read('panier'));
			foreach($pan as $t)
			{
				$pandet=explode(',',$t);
				$produitsC[]=$pandet[0];
			}
			$produitsC=array_unique($produitsC);
			foreach($produitsC as $p)
			{
				$prodC[$p]['qte_prod']=0;
				$prodC[$p]['prod_size']=' ';
				$prodC[$p]['prod_color']='';
				$prodC[$p]['Prix_tot']=0;
				$prodC[$p]['img_prod']='';
				$prodC[$p]['name_prod']='';
			}
			foreach($pan as $t)
			{
				$pandet=explode(',',$t);
				$v=$pandet[0];
				$prodC[$v]['qte_prod']=$pandet[1];
				$prodC[$v]['prod_size']=$pandet[3];
				$prodC[$v]['prod_color']=$pandet[2];
				$prodC[$v]['Prix_tot']=$pandet[4];
				$prodC[$v]['img_prod']=$pandet[5];
				$prodC[$v]['name_prod']=$pandet[6];
			}
			foreach($prodC as $key=>$v)
			{
				if($key==$prod_id){

					$prodC[$key]['produit_id']=$prod_id;
					$prodC[$key]['qte_prod']=$prod_qte;
					$prodC[$key]['prod_size']=$prod_size;
					$prodC[$key]['prod_color']=$prod_color;
					$prodC[$key]['Prix_tot']=$Prix_tot;
					$prodC[$key]['img_prod']=$img_Prod;
					$prodC[$key]['name_prod']=$name_Prod;
				}
				else
				{
					$prodC[$prod_id]['qte_prod']=$prod_qte;
					$prodC[$prod_id]['prod_size']=$prod_size;
					$prodC[$prod_id]['prod_color']=$prod_color;
					$prodC[$prod_id]['Prix_tot']=$Prix_tot;
					$prodC[$prod_id]['img_prod']=$img_Prod;
					$prodC[$prod_id]['name_prod']=$name_Prod;
				}
			}
			$data='';
			foreach($prodC as $key=>$t)
			{
				$data=$data."|".$key.','.$t['qte_prod'].','.$t['prod_color'].','.$t['prod_size'].','.$t['Prix_tot'].','.$t['img_prod'].','.$t['name_prod'];
			}
			$data=ltrim($data, '|');
			$this->Session->write('panier',$data);
		}
		$products=explode('|',$this->Session->read('panier'));
		foreach($products as $product)
		{
			$prod[]=explode(',',$product);
		}

		$json = json_encode($prod);
		echo $json;
		die;
	}

	public function editpanier()
	{
		$products=explode('|',$this->Session->read('panier'));
			foreach($products as $product)
			{
				$List[]=explode(',',$product);
			}
		if ($this->request->is('post'))
		{
			$produits=$this->request->data["produits"];

			if(!empty($produits) )
			{
				foreach($produits as $produit)
				{
						$pan=explode('|',$this->Session->read('panier'));

						foreach($pan as $t)
						{
							$pandet=explode(',',$t);
							$produitsC[]=$pandet[0];
						}
						$produitsC=array_unique($produitsC);

					foreach($produitsC as $p)
						{
							$prodC[$p]['qte_prod']=0;
							$prodC[$p]['prod_size']=' ';
							$prodC[$p]['prod_color']='';
							$prodC[$p]['Prix_tot']=0;
							$prodC[$p]['img_prod']='';
							$prodC[$p]['name_prod']='';
						}
					foreach($pan as $t)
						{
							$pandet=explode(',',$t);
							$v=$pandet[0];
							$prodC[$v]['qte_prod']=$pandet[1];
							$prodC[$v]['prod_size']=$pandet[3];
							$prodC[$v]['prod_color']=$pandet[2];
							$prodC[$v]['Prix_tot']=$pandet[4];
							$prodC[$v]['img_prod']=$pandet[5];
							$prodC[$v]['name_prod']=$pandet[6];
						}
						foreach($prodC as $key=>$v)
						{
							if (isset($produit))
							{
								$produit_id = $produit[0];
								$qtep=$produit[1];
								if($key==$produit_id)
								{
									$prodC[$key]['qte_prod']=$qtep;
									$prodC[$key]['prod_size']=$produit[2];
									$prodC[$key]['prod_color']=$produit[3];
								}
							}
						}
					$data='';
						foreach($prodC as $key=>$t){
						$data=$data."|".$key.','.$t['qte_prod'].','.$t['prod_color'].','.$t['prod_size'].','.$t['Prix_tot'].','.$t['img_prod'].','.$t['name_prod'];
						}
						$data=ltrim($data, '|');
						$this->Session->write('panier',$data);
				}
			}
		}
	}
	public function payment()
	{
		$user=$this->Auth->user('id');
		$this->loadModel('Commande');
		$this->Commande->create();
		$this->Commande->set('user_id',$user);
		$this->Commande->set('cin',$this->request->data['cin']);
		$this->Commande->set('email',$this->request->data['email']);
		$this->Commande->set('adress',$this->request->data['adress']);
		$this->Commande->set('tel',$this->request->data['tel']);
		$this->Commande->set('name',$this->request->data['name']);
		$this->Commande->save();

		$pan=explode('|',$this->Session->read('panier'));
		foreach($pan as $prod)
		{
			$products[]= explode(',',$prod);
		}
		foreach($products as $row)
		{
			$this->loadModel('Detail');
			$this->Detail->create();
			$this->Detail->set(
				array('produit_id'=>$row[0],
							'size'=>$row[3],
							'qte'=>$row[1],
							'color'=>$row[2],
							'prixtot'=>$row[4],
							'commande_id'=>$this->Commande->id
		));
			$this->Detail->save();

			$this->Session->delete('panier');
			/*
			$detail->commande_id=1; */
		}


	}
	public function deletepanier()
	{
		if ($this->request->is('post'))
		{
			$prod_id=$this->request->data["produit_id"];
			if(!empty($prod_id) )
			{
				$pan=explode('|',$this->Session->read('panier'));
				foreach($pan as $t)
				{
					$pandet=explode(',',$t);
					$produitsC[]=$pandet[0];
				}
				$produitsC=array_unique($produitsC);
				foreach($produitsC as $p)
				{
					$prodC[$p]['qte_prod']=0;
					$prodC[$p]['prod_size']=' ';
					$prodC[$p]['prod_color']='';
					$prodC[$p]['Prix_tot']=0;
					$prodC[$p]['img_prod']='';
					$prodC[$p]['name_prod']='';
				}
				foreach($pan as $t)
				{
					$pandet=explode(',',$t);
					$v=$pandet[0];
					$prodC[$v]['qte_prod']=$pandet[1];
					$prodC[$v]['prod_size']=$pandet[3];
					$prodC[$v]['prod_color']=$pandet[2];
					$prodC[$v]['Prix_tot']=$pandet[4];
					$prodC[$v]['img_prod']=$pandet[5];
					$prodC[$v]['name_prod']=$pandet[6];
				}
				$data='';
				foreach($prodC as $key=>$t)
				{
						if ($key==$prod_id)
						{
						}
						else{
							$data=$data."|".$key.','.$t['qte_prod'].','.$t['prod_color'].','.$t['prod_size'].','.$t['Prix_tot'].','.$t['img_prod'].','.$t['name_prod'];
						}

				}

				$data=ltrim($data, '|');
				$this->Session->write('panier',$data);


			}
		}
	}

	public function get_produits(){
		$this->loadModel('Produit');
		if(!empty($this->Session->read('panier')))
		{
			$pans=explode('|',$this->Session->read('panier'));
			if(!empty($this->Session->read('panier')))
			{
				foreach($pans as $pan)
				{
					$d=explode(',',$pan);
					$qte[]=$d[1];
					$produit= $this->Produit->find('all',array('conditions'=>array('Produit.id'=>$d[0])));
					$produits[]=$produit;
				}
				return $produits;
			}
		}
	}
	public function get_qte()
	{
		if(!empty($this->Session->read('panier')))
		{
			$this->loadModel('Produit');
			$pans=explode('|',$this->Session->read('panier'));
			if(!empty($this->Session->read('panier')))
			{
				foreach($pans as $pan)
				{
					$d=explode(',',$pan);
					$qte[]=$d[1];
				}
				return $qte;
			}
		}
	}
	public function add_to_cart()
	{

	}
}
