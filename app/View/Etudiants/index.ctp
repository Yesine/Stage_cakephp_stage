<div class="etudiants index">
	<h2><?php echo __('Etudiants'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('prenom'); ?></th>
			<th><?php echo $this->Paginator->sort('datenaissance'); ?></th>
			<th><?php echo $this->Paginator->sort('sexe'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('adresse'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('faculte'); ?></th>
			<th><?php echo $this->Paginator->sort('specialite'); ?></th>
			<th><?php echo $this->Paginator->sort('cycle'); ?></th>
			<th><?php echo $this->Paginator->sort('niveaux'); ?></th>
			<th><?php echo $this->Paginator->sort('cv'); ?></th>
			<th><?php echo $this->Paginator->sort('poste'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($etudiants as $etudiant): ?>
	<tr>
		<td><?php echo h($etudiant['Etudiant']['id']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['nom']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['datenaissance']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['sexe']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['photo']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['email']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['password']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['faculte']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['specialite']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['cycle']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['niveaux']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['cv']); ?>&nbsp;</td>
		<td><?php echo h($etudiant['Etudiant']['poste']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $etudiant['Etudiant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $etudiant['Etudiant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $etudiant['Etudiant']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $etudiant['Etudiant']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Etudiant'), array('action' => 'add')); ?></li>
	</ul>
</div>
