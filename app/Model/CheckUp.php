<?php
App::uses('AppModel', 'Model');
/**
 * CheckUp Model
 *
 * @property Version $Version
 * @property VersionApplications $VersionApplications
 */
class CheckUp extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'version_id' => array(
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
		'Version' => array(
			'className' => 'Version',
			'foreignKey' => 'version_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
