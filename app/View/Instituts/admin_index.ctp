<div class="instituts index">
	<h2><?php echo __('Instituts'); ?></h2>
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
	<?php foreach ($instituts as $institut): ?>
	<tr>
		<td><?php echo h($institut['Institut']['id']); ?>&nbsp;</td>
		<td><?php echo h($institut['Institut']['nom']); ?>&nbsp;</td>
		<td><?php echo h($institut['Institut']['logo']); ?>&nbsp;</td>
		<td><?php echo h($institut['Institut']['adress']); ?>&nbsp;</td>
		<td><?php echo h($institut['Institut']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($institut['Institut']['siteweb']); ?>&nbsp;</td>
		<td><?php echo h($institut['Institut']['email']); ?>&nbsp;</td>
		<td><?php echo h($institut['Institut']['id_project']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $institut['Institut']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $institut['Institut']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $institut['Institut']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $institut['Institut']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Institut'), array('action' => 'add')); ?></li>
	</ul>
</div>
