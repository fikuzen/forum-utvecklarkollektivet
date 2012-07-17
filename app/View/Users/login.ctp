<?php
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
echo $this->Form->input('User.username', array('label' => false, 'class' => 'inputtext'));
echo $this->Form->input('User.password', array('label' => false, 'class' => 'inputpassword'));
echo $this->Form->button('Glömt lösenord?', array('class' => 'clear'));
echo $this->Form->submit('Logga in', array('class' => 'submitbutton'));
echo $this->Form->end();
?>

