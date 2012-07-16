<?php
class ThreadController extends AppController {

	public function index() {
		$this->set('threads', $this->Thread->find('all'));
		
	}
	
	public function view($id = null) {
		$this->Thread->id = $id;
		$this->set('thread', $this->Thread->read());
	}

}