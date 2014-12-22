<?php
App::uses('AppModel', 'Model');
/**
 * UsersTestOperatingSystem Model
 *
 * @property OperatingSystems $OperatingSystems
 */
class UsersTestOperatingSystem extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'users_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'operating_systems_id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'OperatingSystems' => array(
			'className' => 'OperatingSystems',
			'foreignKey' => 'operating_systems_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
