<?php
App::uses('AppModel', 'Model');
/**
 * UsersHasCheckUp Model
 *
 * @property Users $Users
 * @property CheckUps $CheckUps
 */
class UsersHasCheckUp extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
    public $useTable = 'users_has_check_ups';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'users_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CheckUps' => array(
			'className' => 'CheckUps',
			'foreignKey' => 'check_ups_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
