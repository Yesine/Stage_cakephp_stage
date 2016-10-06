<div class="instituts form">
<?php echo $this->Form->create('Institut'); ?>
	<fieldset>
		<legend><?php echo __('Add Institut'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('logo');
		echo $this->Form->input('adress');
		echo $this->Form->input('telephone');
		echo $this->Form->input('siteweb');
		echo $this->Form->input('email');
		echo $this->Form->input('id_project');
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
