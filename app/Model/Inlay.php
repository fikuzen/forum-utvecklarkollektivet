<?php
class Inlay extends AppModel {

	public $hasOne = array('user');
	public $belongsTo = array('thread');
	// has one thread, has one user
}