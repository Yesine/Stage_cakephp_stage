<div class="deposeurs form">
<?php echo $this->Form->create('Deposeur'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deposeur'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Deposeur.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Deposeur.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Deposeurs'), array('action' => 'index')); ?></li>
	</ul>
</div>
