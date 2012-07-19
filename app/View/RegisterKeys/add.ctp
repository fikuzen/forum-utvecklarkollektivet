<h1>Skapa registreringsnyckel</h1>
<?php echo $this->Form->create('RegisterKey'); ?>
	<?php
		echo $this->Form->input(
            'comment',
            array(
                'label' => false,
                'error' => false,
                'placeholder' => '(Frivillig) Kommentar...'
            )
        );
		echo $this->Form->input(
            'group_id', 
            array(
                'label' => false,
                'error' => false,
                'options' => $groups, 
                'empty' => 'Välj en grupp...'
            )
        );
	?>
<?php echo $this->Form->end('Skapa'); ?>
<?php
if (!empty($validationErrors)) {
?>
    <div class="clear_both"></div>
    <div class="error_message">
        Du måste välja en giltig grupp för användaren...
    </div>
<?php
}
?>
