<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Project'); ?></legend>
	<?php
		echo $this->Form->input('titre');
		echo $this->Form->input('categories');
		echo $this->Form->input('datepub');
		echo $this->Form->input('dateexp');
		echo $this->Form->input('deposeur');
		echo $this->Form->input('vu');
		echo $this->Form->input('information');
		echo $this->Form->input('description');
		echo $this->Form->input('maps');
		echo $this->Form->input('region');
		echo $this->Form->input('fichier');
		echo $this->Form->input('hour');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
	</ul>
</div>
