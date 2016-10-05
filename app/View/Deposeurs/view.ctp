<div class="deposeurs view">
<h2><?php echo __('Deposeur'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deposeur['Deposeur']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($deposeur['Deposeur']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($deposeur['Deposeur']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($deposeur['Deposeur']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($deposeur['Deposeur']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Siteweb'); ?></dt>
		<dd>
			<?php echo h($deposeur['Deposeur']['siteweb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($deposeur['Deposeur']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Project'); ?></dt>
		<dd>
			<?php echo h($deposeur['Deposeur']['id_project']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deposeur'), array('action' => 'edit', $deposeur['Deposeur']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deposeur'), array('action' => 'delete', $deposeur['Deposeur']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $deposeur['Deposeur']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Deposeurs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deposeur'), array('action' => 'add')); ?> </li>
	</ul>
</div>
