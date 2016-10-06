<div class="instituts view">
<h2><?php echo __('Institut'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($institut['Institut']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($institut['Institut']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($institut['Institut']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($institut['Institut']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($institut['Institut']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Siteweb'); ?></dt>
		<dd>
			<?php echo h($institut['Institut']['siteweb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($institut['Institut']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Project'); ?></dt>
		<dd>
			<?php echo h($institut['Institut']['id_project']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Institut'), array('action' => 'edit', $institut['Institut']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Institut'), array('action' => 'delete', $institut['Institut']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $institut['Institut']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Instituts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institut'), array('action' => 'add')); ?> </li>
	</ul>
</div>
