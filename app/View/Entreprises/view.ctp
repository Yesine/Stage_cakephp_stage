<div class="entreprises view">
<h2><?php echo __('Entreprise'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Siteweb'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['siteweb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rs'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['rs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mf'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['mf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Project'); ?></dt>
		<dd>
			<?php echo h($entreprise['Entreprise']['id_project']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entreprise'), array('action' => 'edit', $entreprise['Entreprise']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entreprise'), array('action' => 'delete', $entreprise['Entreprise']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $entreprise['Entreprise']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Entreprises'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entreprise'), array('action' => 'add')); ?> </li>
	</ul>
</div>
