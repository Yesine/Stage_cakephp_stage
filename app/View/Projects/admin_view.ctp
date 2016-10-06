<div class="projects view">
<h2><?php echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($project['Project']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categories'); ?></dt>
		<dd>
			<?php echo h($project['Project']['categories']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datepub'); ?></dt>
		<dd>
			<?php echo h($project['Project']['datepub']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dateexp'); ?></dt>
		<dd>
			<?php echo h($project['Project']['dateexp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deposeur'); ?></dt>
		<dd>
			<?php echo h($project['Project']['deposeur']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vu'); ?></dt>
		<dd>
			<?php echo h($project['Project']['vu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Information'); ?></dt>
		<dd>
			<?php echo h($project['Project']['information']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maps'); ?></dt>
		<dd>
			<?php echo h($project['Project']['maps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo h($project['Project']['region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fichier'); ?></dt>
		<dd>
			<?php echo h($project['Project']['fichier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hour'); ?></dt>
		<dd>
			<?php echo h($project['Project']['hour']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $project['Project']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
	</ul>
</div>
