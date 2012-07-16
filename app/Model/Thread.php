<?php
class Thread extends AppModel {

	public $hasMany = 'inlay';
	public $belongsTo = 'user';
	// has many inlay
	// has one user


}