<?php
// START CSS
$this->start('css');
?>

<?php
// END CSS
$this->end();
?>
<div id="container">
    <div id="container_text">
        <h1>Välkommen till forum-utvecklarkollektivet</h1>
        <h6>Detta är ett stängt community, det innebär att enbart medlemmar har tillgång till innehållet på websidan.</h6>
	</div>
	<center>
    <?php
        echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
        echo $this->Form->input('User.username', array('class' => 'inputtext'));
        echo $this->Form->input('User.password', array('class' => 'inputpassword'));
        echo $this->Form->end('Logga in');
    ?>
    </center>
</div>

