<?php
App::uses('AppModel', 'Model');
/**
 * Application Model
 *
 * @property OperatingSystems $OperatingSystems
 */
class Application extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'OperatingSystem' => array(
			'className' => 'OperatingSystem',
			'foreignKey' => 'operating_systems_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


/**
 * hasMany associations
 *
 * @var array
 */
    public $hasMany = array(
        'Version' => array(
            'className' => 'Version',
            'foreignKey' => 'applications_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
}
