<div class="instituts form">
<?php echo $this->Form->create('Institut'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Institut'); ?></legend>
	<?php
		echo $this->Form->input('id_deposeur');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Instituts'), array('action' => 'index')); ?></li>
	</ul>
</div>
