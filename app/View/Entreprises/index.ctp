<div class="entreprises index">
	<h2><?php echo __('Entreprises'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('logo'); ?></th>
			<th><?php echo $this->Paginator->sort('adress'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('siteweb'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('rs'); ?></th>
			<th><?php echo $this->Paginator->sort('mf'); ?></th>
			<th><?php echo $this->Paginator->sort('id_project'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($entreprises as $entreprise): ?>
	<tr>
		<td><?php echo h($entreprise['Entreprise']['id']); ?>&nbsp;</td>
		<td><?php echo h($entreprise['Entreprise']['nom']); ?>&nbsp;</td>
		<td><?php echo h($entreprise['Entreprise']['logo']); ?>&nbsp;</td>
		<td><?php echo h($entreprise['Entreprise']['adress']); ?>&nbsp;</td>
		<td><?php echo h($entreprise['Entreprise']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($entreprise['Entreprise']['siteweb']); ?>&nbsp;</td>
		<td><?php echo h($entreprise['Entreprise']['email']); ?>&nbsp;</td>
		<td><?php echo h($entreprise['Entreprise']['rs']); ?>&nbsp;</td>
		<td><?php echo h($entreprise['Entreprise']['mf']); ?>&nbsp;</td>
		<td><?php echo h($entreprise['Entreprise']['id_project']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entreprise['Entreprise']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entreprise['Entreprise']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entreprise['Entreprise']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $entreprise['Entreprise']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Entreprise'), array('action' => 'add')); ?></li>
	</ul>
</div>
