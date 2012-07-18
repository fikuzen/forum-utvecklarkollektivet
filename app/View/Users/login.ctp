<?php
echo $this->Form->create(
    'User', 
    array('url' => 
        array(
            'controller' => 'users', 
            'action' => 'login')
    )
);
echo $this->Form->input(
    'User.username', 
    array(
        'label' => false, 
        'class' => 'login_usr_icon login_field', 
        'placeholder' => 'Användarnamn...'
    )
);
echo $this->Form->input(
    'User.password', 
    array(
        'label' => false, 
        'class' => 'login_pwd_icon login_field', 
        'placeholder' => 'Lösenord...'
    )
);
echo $this->Form->button(
    'Glömt lösenord?', 
    array('class' => 'login_button login_forgot_pass')
);
echo $this->Form->submit(
    'Logga in', 
    array('class' => 'login_button login_submit')
);
echo $this->Form->end();
?>
<div style="clear: both; height: 10px;"></div>
<?php
if (!empty($validationErrors)) {
?>
    <div class="clear_both"></div>
    <?php
    foreach($validationErrors as $field => $errors) {
    ?>
        <div class="error_message">
            <?php echo $errors[0]; ?>
        </div>
    <?php
    }
    ?>
<?php
}
?>
<span style="font-size: 10px; color: #666666;">
    Har du en aktivationskod? <a href="/users/add/">Registrera dig här</a>.
</span>
