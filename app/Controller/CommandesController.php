<?php
App::uses('AppController', 'Controller');
use Cake\ORM\TableRegistry;

/**
 * Commandes Controller
 *
 * @property Commande $Commande
 * @property PaginatorComponent $Paginator
 */
class CommandesController extends AppController {

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
		$this->loadModel('Detail');
		$this->layout='admin';
		$this->Commande->recursive = 0;
		$this->set('commandes', $this->Paginator->paginate());
	}
	public function commvalid() {
		$this->loadModel('Detail');
		$this->layout='admin';
		$this->Commande->recursive = 0;
		$commandes = $this->Commande->find('all',array('conditions'=>array('state'=>2)));
		$this->set('commandes',$commandes, $this->Paginator->paginate());
	}
	public function getDetails(int $id = null)
	{
		$this->loadModel('Detail');
		$id = $this->request->data['id_comnd'];
		$detail = $this->Detail->find('all',array('conditions'=>array('commande_id'=>$id)));
		$json = json_encode($detail);
		echo $json ;
		die;
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
		if (!$this->Commande->exists($id)) {
			throw new NotFoundException(__('Invalid commande'));
		}
		$options = array('conditions' => array('Commande.' . $this->Commande->primaryKey => $id));
		$this->set('commande', $this->Commande->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->Commande->create();
			if ($this->Commande->save($this->request->data)) {
				$this->Flash->success(__('The commande has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The commande could not be saved. Please, try again.'));
			}
		}
		$users = $this->Commande->User->find('list');
		$this->set(compact('users'));
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
		if (!$this->Commande->exists($id)) {
			throw new NotFoundException(__('Invalid commande'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Commande->save($this->request->data)) {
				$this->Flash->success(__('The commande has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The commande could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Commande.' . $this->Commande->primaryKey => $id));
			$this->request->data = $this->Commande->find('first', $options);
		}
		$users = $this->Commande->User->find('list');
		$this->set(compact('users'));
	}

	public function updateState(int $id= null )
	{
		$id = $this->request->data['id_comnd'];
		if (!$this->Commande->exists($id)) {
			throw new NotFoundException(__('Invalid commande'));
		}
		$Commande =$this->Commande->find('first',array('conditions'=>array('Commande.id'=>$id)));
		if($Commande['Commande']['state']==0)
		{
			$Commande['Commande']['state']=1;
		}
		$this->Commande->save($Commande);
	}
	public function updateStateApprouved(int $id= null )
	{
		$id = $this->request->data['id_comnd'];
		if (!$this->Commande->exists($id)) {
			throw new NotFoundException(__('Invalid commande'));
		}
		$Commande =$this->Commande->find('first',array('conditions'=>array('Commande.id'=>$id)));

			$Commande['Commande']['state']=2;
		$this->Commande->save($Commande);
	}
	public function updateStateRejected(int $id= null )
	{
		$id = $this->request->data['id_comnd'];
		if (!$this->Commande->exists($id)) {
			throw new NotFoundException(__('Invalid commande'));
		}
		$Commande =$this->Commande->find('first',array('conditions'=>array('Commande.id'=>$id)));

			$Commande['Commande']['state']=3;
		$this->Commande->save($Commande);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id =null )
	{
		$this->layout='admin';
		$this->loadModel('Detail');
		if (!$this->Commande->exists($id))
		{
			throw new NotFoundException(__('Invalid commande'));
		}
		else{
			$this->request->allowMethod('post', 'delete');
			if ($this->Commande->delete($id))
			{
				$this->Detail->query("DELETE FROM details where commande_id = ? ",array($id));
			} else {
				$this->Flash->error(__('The commande could not be deleted. Please, try again.'));
			}
		}
		return $this->redirect(array('action' => 'index'));
	}
//	public function chartsPrivate()
//	{
//		$this->layout='admin';
//		$data = $this->Commande->query("SELECT DATE(created) , COUNT(*) FROM `commandes` GROUP BY DATE(created) ORDER BY `commandes`.`created` ASC");
//		$dateNow = new DateTime('2020-06-13');
//
//		for ($i = 0; $i < count($data)-1 ; $i++)
//		{
//			$day1 = new DateTime( $data[$i][0]['DATE(created)'] );
//			$day2 = new DateTime( $data[$i + 1][0]['DATE(created)'] );
//			$diff = $day1->diff($day2);
//			$diff2 = $day2->diff($dateNow);
//			if(( $diff->format('%r%a') ) > 1 )
//			{
//				$day1->modify('+1 day');
//				$array[0][0]['DATE(created)'] = $day1->format('Y-m-d') ;
//				$array[0][0]['COUNT(*)'] = 0 ;
//				array_splice( $data, $i+1, 0, $array );
//
//			}
//			if($i == count($data)-2 )
//			{
//				$coun = $diff2->format('%r%a');
//				for($j = 0; $j < $coun ; $j++)
//				{
//					$day2->modify('+1 day');
//					$arr[0][0]['DATE(created)'] = $day2->format('Y-m-d') ;
//					$arr[0][0]['COUNT(*)'] = 0 ;
//					array_splice( $data, count($data), 0, $arr );
////					debug($data); die;
//				}
//			}
//		}
////		debug($data); die;
////		die;
//		$this->set('data',$data);
//	}
	public function charts()
	{
		$this->layout='admin';
		if ($this->request->is('post'))
		{
			$first = $this->request->data['first'];
			$last = $this->request->data['last'];
			$data = $this->Commande->query("SELECT DATE(created) , COUNT(*) FROM `commandes` WHERE created BETWEEN ? AND ? GROUP BY DATE(created) ORDER BY `commandes`.`created` ASC ",array($first,$last));
			$dates = $this->dateRange($first,$last);
			for($i=0; $i <count($data) ; $i++)
			{
				for ($j=0; $j <count($dates) ; $j++)
				{
					if( $dates[$j]['DATE'] == $data[$i][0]['DATE(created)'])
					{
						$dates[$j]['DATE'] = $data[$i][0]['DATE(created)'];
						$dates[$j]['COUNT'] = $data[$i][0]['COUNT(*)'];
					}

				}
			}
			$json =json_encode($dates);
			echo $json;
			die;
		}
	}
	function dateRange( $first, $last, $step = '+1 day', $format = 'Y-m-d' )
	{
		$dates = array();
		$current = strtotime( $first );
		$last = strtotime( $last );
		$i = 0;
		while( $current <= $last ) {
			$dates[$i]['DATE'] = date( $format, $current );
			$dates[$i]['COUNT'] = 0;
			$current = strtotime( $step, $current );
			$i++;
		}
		return $dates;
	}
}
