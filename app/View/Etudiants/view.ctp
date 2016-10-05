<div class="etudiants view">
<h2><?php echo __('Etudiant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datenaissance'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['datenaissance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexe'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['sexe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculte'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['faculte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialite'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['specialite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cycle'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['cycle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Niveaux'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['niveaux']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cv'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['cv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poste'); ?></dt>
		<dd>
			<?php echo h($etudiant['Etudiant']['poste']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Etudiant'), array('action' => 'edit', $etudiant['Etudiant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Etudiant'), array('action' => 'delete', $etudiant['Etudiant']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $etudiant['Etudiant']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Etudiants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etudiant'), array('action' => 'add')); ?> </li>
	</ul>
</div>
