<?php
App::uses('AppModel', 'Model');
/**
 * Institut Model
 *
 */
class Institut extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id_deposeur';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id_deposeur' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
