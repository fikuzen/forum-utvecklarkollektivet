<?php
echo $this->Form->create(
    'User',
    array(
        'controller' => 'users',
        'action' => 'add'
    )
);
echo $this->Form->input(
    'username',
    array(
        'label' => false,
        'class' => 'login_field login_usr_icon',
        'placeholder' => 'Användarnamn...',
        'error' => false
    )
);
echo $this->Form->input(
    'password',
    array(
        'label' => false,
        'class' => 'login_field login_pwd_icon',
        'placeholder' => 'Lösenord...',
        'error' => false
    )
);
echo $this->Form->input(
    'activation',
    array(
        'label' => false,
        'class' => 'login_field login_act_icon',
        'placeholder' => 'Aktivationskod...'
    )
);
echo $this->Form->submit(
    'Registrera',
    array(
        'class' => 'login_button login_submit'
    )
);
echo $this->Form->end();

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
<div style="clear: both; height: 10px;"></div>
<span style="font-size: 10px; color: #666666;">
    Har du redan ett konto? <a href="/users/login/">Logga in här</a>.
</span>
