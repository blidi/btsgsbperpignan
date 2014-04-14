<?= $this->Form->create('User');  ?>
    <?= $this->Form->input('username', array('label' =>'identifiant'));  ?>
    <?= $this->Form->input('password', array('label' =>'mot de passe'));  ?>

<?= $this->Form->end('Se connecter');  ?>