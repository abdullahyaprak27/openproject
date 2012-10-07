<?php
App::uses('AppModel', 'Model');
/**
 * Milestone Model
 *
 * @property Projects $Projects
 */
class Milestone extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'projects_id' => array(
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
		'Project' => array( // Burasý Project Olacak
			'className' => 'Projects',
			'foreignKey' => 'projects_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
