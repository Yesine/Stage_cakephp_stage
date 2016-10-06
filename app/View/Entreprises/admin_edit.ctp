<div class="entreprises form">
<?php echo $this->Form->create('Entreprise'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Entreprise'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nom');
		echo $this->Form->input('logo');
		echo $this->Form->input('adress');
		echo $this->Form->input('telephone');
		echo $this->Form->input('siteweb');
		echo $this->Form->input('email');
		echo $this->Form->input('rs');
		echo $this->Form->input('mf');
		echo $this->Form->input('id_project');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Entreprise.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Entreprise.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Entreprises'), array('action' => 'index')); ?></li>
	</ul>
</div>
