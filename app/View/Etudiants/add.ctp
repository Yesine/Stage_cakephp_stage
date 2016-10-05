<div class="etudiants form">
<?php echo $this->Form->create('Etudiant'); ?>

	<?php
		echo $this->Form->input('nom', array('label' => false));
		echo $this->Form->input('prenom');
		echo $this->Form->input('datenaissance');
		echo $this->Form->input('sexe');
		echo $this->Form->input('photo');
		echo $this->Form->input('adresse');
		echo $this->Form->input('email');
		echo $this->Form->input('telephone');
		echo $this->Form->input('password');
		echo $this->Form->input('faculte');
		echo $this->Form->input('specialite');
		echo $this->Form->input('cycle');
		echo $this->Form->input('niveaux');
		echo $this->Form->input('cv');
		echo $this->Form->input('poste');
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Etudiants'), array('action' => 'index')); ?></li>
	</ul>
</div>
