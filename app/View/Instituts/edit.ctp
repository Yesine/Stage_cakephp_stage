<div class="instituts form">
<?php echo $this->Form->create('Institut'); ?>
	<fieldset>
		<legend><?php echo __('Edit Institut'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_deposeur');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Institut.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Institut.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Instituts'), array('action' => 'index')); ?></li>
	</ul>
</div>
