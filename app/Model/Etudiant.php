<?php
App::uses('AppModel', 'Model');
/**
 * Etudiant Model
 *
 */
class Etudiant extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nom' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'nom',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'prenom' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'prenom',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'datenaissance' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'datenaissance',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexe' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'sexe',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'adresse' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'adresse',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'email',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telephone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'telephone',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'faculte' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'faculte',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'specialite' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'specialite',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cycle' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'cycle',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'niveaux' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'niveaux',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
