<div class="deposeurs index">
	<h2><?php echo __('Deposeurs'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('id_project'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($deposeurs as $deposeur): ?>
	<tr>
		<td><?php echo h($deposeur['Deposeur']['id']); ?>&nbsp;</td>
		<td><?php echo h($deposeur['Deposeur']['nom']); ?>&nbsp;</td>
		<td><?php echo h($deposeur['Deposeur']['logo']); ?>&nbsp;</td>
		<td><?php echo h($deposeur['Deposeur']['adress']); ?>&nbsp;</td>
		<td><?php echo h($deposeur['Deposeur']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($deposeur['Deposeur']['siteweb']); ?>&nbsp;</td>
		<td><?php echo h($deposeur['Deposeur']['email']); ?>&nbsp;</td>
		<td><?php echo h($deposeur['Deposeur']['id_project']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deposeur['Deposeur']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deposeur['Deposeur']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deposeur['Deposeur']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $deposeur['Deposeur']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Deposeur'), array('action' => 'add')); ?></li>
	</ul>
</div>
