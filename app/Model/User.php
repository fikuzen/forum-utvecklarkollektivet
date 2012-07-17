<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Group $Group
 */
class User extends AppModel {

    /**
     * The name of the model
     *
     * @var string
     */
    public $name = 'User';

    /**
     * User belongs to a Group
     *
     * @var array
     */
    public $belongsTo = array('Group');

    /**
     * Acts as requester in Acl
     *
     * @var array
     */
    public $actsAs = array('Acl' => array('type' => 'requester'));

    /**
     * Validation rules
     *
     * @var array
     */
	public $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty')
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty')
			),
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric')
			),
		),
	);


    /**
     * This function is called before the model is saved to database.
     *
     * @return boolean
     */
    public function beforeSave($options = array()) {
        $this->data['User']['password'] =
            AuthComponent::password($this->data['User']['password']);
            return true;
    }


    /**
     * Return the parent Acl-node.
     */
    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }

        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }

        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }
}
