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
    <div style="clear: both; height: 10px;"></div>
        <?php
        foreach($validationErrors as $field => $errors) {
            echo $errors[0] . '<br />';
        }
        ?>
    </div>
<?php
}
?>
