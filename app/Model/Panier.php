<?php
App::uses('AppModel', 'Model');
/**
 * Panier Model
 *
 * @property Commande $Commande
 */
class Panier extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Commande' => array(
			'className' => 'Commande',
			'foreignKey' => 'commande_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
