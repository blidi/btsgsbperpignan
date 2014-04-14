<h2><?php echo $post['Post']['nom']; ?></h2>

<p><?php echo $post['Post']['prenom']; ?></p>
<p><?php echo $post['Post']['Adresse']; ?></p>
<p><?php echo $post['Post']['telephone']; ?></p>
<p><?php echo $post['Post']['poste']; ?></p>




<p> <?php echo $this->Html->link('Retour', array('action'=>'index')); ?></p>