<h2>Ajouter Nouveau Employer</h2>

<?php

echo $this->Form->create('Post', array('action'=>'add'));
echo $this->Form->input('nom');
echo $this->Form->input('prenom');
echo $this->Form->input('Adresse');
echo $this->Form->input('telephone');
echo $this->Form->input('poste');
echo $this->Form->end('Creer un Employer');

?>
