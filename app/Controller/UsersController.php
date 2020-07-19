<?php
App::uses('AppController', 'Controller');
App::uses('CakeSession', 'Model/Datasource');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
	function __construct($request = null, $response = null)
	{
		parent::__construct($request, $response);
		if($this->getCurrentUser())
		{
			$this->userRole = $this->getCurrentUser()['role'];
		}
	}

	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login','add','verification','forgetpassword','reset_password');
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
	public function index()
	{
		$this->layout='admin';
		$this->checkRole();
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
	public function view($id = null)
	{
		$this->checkRole();
		$this->layout='admin';
		if (!$this->User->exists($id))
		{
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
	public function verification($username)
	{
		$this->layout='default';
		if($this->getCurrentUser()){
			throw new NotFoundException(__('Access Denied'));
		}
		$User =$this->User->find('first',array('conditions'=>array('User.username'=>$username)));
		if($User['User']['verified']==0)
		{
			$this->User->id = $User['User']['id'] ;
			$this->User->saveField('verified',1);
		}

	}
	public function send_email($to,$subject,$body)
	{
		App::uses('CakeEmail', 'Network/Email');
		$email = new CakeEmail('smtp');
		$email->to($to)
			->emailFormat('html')
			->subject($subject)
			->send($body);
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		$this->layout='default';
		$message = null;
		$this->set('message',$message);

		if ($this->request->is('post'))
		{
			$email = $this->request->data['email'];
			$username = $this->request->data['username'];
			$users = $this->User->find('all', array('conditions'=>array('email'=>$email)));
			$numEmails = sizeof($users);

			$users = $this->User->find('all', array('conditions'=>array('username'=>$username)));
			$numUsers = sizeof($users);
			$message = 'Username Or Email Deja pris' ;
			if ($numUsers  || $numEmails != 0)
			{
				$this->set('message',$message);
			}
			else{
				$this->User->create();
				if ($this->User->save($this->request->data))
				{
					$to= $email;
					$subject= 'Complétez votre inscription';
					$body = 'Finalisez la création de votre compte. <br/> Hello '.$username.', <br/> Votre adresse e-mail a bien été enregistrée sur Sendinblue. Pour valider votre compte et commencer à consulter notre site, veuillez compléter votre profil en cliquant sur le lien ci-dessous :<br/><a href="http://localhost/wedding1/verification/'.$username.'">Confirmer mon adresse email</a>';
					$this->send_email($to,$subject,$body);
					$message ='You need to verify your E-mail';
					//return $this->redirect('/login');
					$this->redirect(
						array(
							"controller" => "users",
							"action" => "login",
							"?" => array(
								"msg" => $message,
							)
						),
						200,
						true
					);

				}
				else
				{
					$this->set('message',$message);
				}
			}

		}

	}
	public function reset_password($id)
	{
		$this->layout='default';
		$User = $this->User->find('list', array(
			'fields' => array('username'),
			'conditions' => array('id'=>$id),
		));
		$this->set('username',$User[$id]);
		if ($this->request->is('post'))
		{
			if($this->User->exists($id))
			{
				$pass = $this->request->data['User']['password'];
				$this->User->id = $id ;
				$this->User->saveField('password',$pass);
				return $this->redirect(
					array(
						"controller" => "users",
						"action" => "login",
						"?" => array(
							"msg" => 'New password set successfully.',
							"type"=>'success'
						)
					),
					200,
					true
				);
			}
			else
			{
				throw new NotFoundException(__('Invalid user'));
			}
		}
	}
	public function forgetpassword()
	{
		$this->layout='default';
		if ($this->request->is('post'))
		{
			$email = $this->request->data['User']['email'];
			$User =$this->User->find('first',array('conditions'=>array('email'=>$email)));
			if($User)
			{
				$id = $User['User']['id'];
				$to= $email;
				$subject= 'Please reset your password';
				$body = 'We heard that you lost your password. Sorry about that!. <br/> But don’t worry! You can use the following link to reset your password:
:<br/><a href="http://localhost/wedding1/reset_password/'.$id.'">Link to reset your password</a>';
				$this->send_email($to,$subject,$body);
				return $this->set(array('message'=>'Check your email for a link to reset your password. If it doesn’t appear within a few minutes, check your spam folder.','type'=>'success'));
			}
			else
			{
				return $this->set(array('message'=>'That address is not a verified primary email or is not associated with a personal user account. ','type'=>'danger'));
			}

		}
		$this->set(array('message'=>null,'type'=>null));

	}
	public function add_user()
	{
		$this->layout='admin';
		if ($this->request->is('post'))
		{
			$this->User->create();
			if ($this->User->save($this->request->data))
			{
				return $this->redirect('/admin');
			}
			else
			{
				return $this->redirect('/add_user');
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
	public function edit($id = null)
	{
		$this->checkRole();
		$this->layout='admin';
		if (!$this->User->exists($id))
		{
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put')))
		{
			if ($this->User->save($this->request->data))
			{
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		else
		{
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}

	}
	public function editpr($id = null)
	{
		$this->layout='default';
		$this->loadModel('Detail');

		if($id == null)
		{
			$id = $this->getCurrentUser()['id'];
		}
		if($id)
		{
			if (!$this->User->exists($id))
			{
				throw new NotFoundException(__('Invalid user'));
			}
			if ($this->request->is(array('post', 'put')))
			{
				$value=$this->request->data['path'];
				$date = date('H-i-s');
				$file = $value['tmp_name'];
				$ext = explode(".", $value['name']);
				$ext = $ext[count($ext) - 1];
				if (!empty($file))
				{
					$value = $date . '' . rand() . ".$ext";
					move_uploaded_file($file, 'img/images/profil/' . $value);
				}
				$data=$this->request->data;
				unset($data['path']);
				$data['id']=$id;
				$data['img']=$value;
				if($data['img']['error'] == 4)
				{
					unset($data['img']);
				}
				if ($this->User->save($data))
				{
					$this->set('userlog',$this->Auth->user());
					$this->redirect(array('action' => 'editpr'));
				}
			}
			else
			{
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->request->data = $this->User->find('first', $options);
			}
			$currentUser= $this->getInfosUser();
			$this->set('commandes',$currentUser);
		}
	}
	public function sendDetailCmnd($id = null)
	{
		$this->loadModel('Detail');
		$this->loadModel('Image');
		$id = $this->request->data['id'];
		$detailComms = $this->Detail->find('all',array('conditions'=>array('Commande.id'=>$id)));
		foreach ($detailComms as $value)
		{
			$idprod =$value['Produit']['id'];
			$prod_img[]= $this->Image->find('first',array('conditions'=>array('Produit.id'=>$idprod)));
		}
		$array = array('infos'=> $detailComms,'imgs'=>$prod_img);
		$json = json_encode($array);
		echo $json;
		die;
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		$this->checkRole();
		$this->layout='admin';
		if (!$this->User->exists($id))
		{
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete($id))
		{
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login()
	{
		$this->layout='default';
		if($this->request->is('get'))
		{
			if($this->params->query){
				$message = $this->params->query['msg'] ;
				$type = $this->params->query['type'] ;
			}else{
				$message = null;
				$type = null;
			}
		}
		else{
			$message = null;
			$type = null;
		}
		$this->set(array('message'=>$message,'type'=>$type));
		if ($this->request->is('post'))
		{
			$User =$this->User->find('first',array('conditions'=>array('User.username'=>$this->request->data['User']['username'])));
			if($User)
			{
				if($User['User']['verified']== true)
				{
					if ($this->Auth->login())
					{
						if($this->Auth->user('role')=='user')
						{
							return $this->redirect(array('controller'=>'produits','action' => 'home'));
						}
						else
						{
							return $this->redirect('/admin');
						}
					}
					else
					{
						$message = 'Username Or Password is invalid';
						$this->set(array('message'=>$message,'type'=>'danger'));
					}
				}
				else{
					$this->set(array('message'=>'Please check Your E-mail Adress ASAP to verify your account.','type'=>'danger'));
				}
			}
			else
			{
				$this->set(array('message'=>'Username Or Password is invalid ','type'=>'danger'));
			}


		}
	}
	public function logout()
	{
		$this->redirect($this->Auth->logout());
	}


	function getCurrentUser()
	{
		$Session = new CakeSession();
		$user = $Session->read('Auth.User');
		return $user;
	}
	function getInfosUser() {
		// for CakePHP 2.x:
		App::uses('CakeSession', 'Model/Datasource');
		$Session = new CakeSession();
		$user = $Session->read('Auth.User');

		$user = $this->User->find('first',array('conditions'=>array('User.id'=>$user['id'])));
		return $user;
	}
	function checkRole() {
		if($this->userRole !== 'admin')
		{
			throw new NotFoundException(__('Access Denied'));
		}
	}

}
