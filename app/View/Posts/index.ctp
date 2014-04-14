<h2> Les medecins inscris</h2>

<table>
    <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    </tr>
    
    <?php foreach($posts as $post): ?>
    <tr>
        <td><?php echo $this->Html->link($post['Post']['nom'],
        array('action'=>'view', $post['Post']['id'])) ; ?></td>
        <td> <?php echo $post ['Post']['prenom']; ?></td>
        <td> <?php echo $post ['Post']['Adresse']; ?></td>
    </tr>
    
    <?php endforeach; ?>
    
    
</table>
