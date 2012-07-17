<?php
App::uses('AppModel', 'Model');
/**
 * RegisterKey Model
 *
 * @property User $User
 * @property Group $Group
 */
class RegisterKey extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'key' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'group_id' => array(
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
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'group_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * Check if the key is valid.
     *
     * @param string $key
     * @return boolean
     */
    public function isValid($key) {
        $count = $this->find(
            'count',
            array('conditions' => 
                array('RegisterKey.key' => $key)
            )
        );
        return ($count == 1);
    }

    /**
     * Use the key, this will delete the key from the database.
     *
     * @param string $key
     */
    public function useKey($key) {
        $this->deleteAll(array('RegisterKey.key' => $key));
    }

    /**
     * Get group_id from key
     *
     * @param string $key
     * @return integer
     */
    public function getGroup($key) {
        $result = $this->find(
            'first', 
            array(
                'fields' => 'RegisterKey.group_id',
                'conditions' => 'RegisterKey.group_id'
            )
        );
        return $result['RegisterKey']['group_id'];
    }
}
