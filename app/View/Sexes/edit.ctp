<div class="sexes form">
<?php echo $this->Form->create('Sex'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sex'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sex.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Sex.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Sexes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
	</ul>
</div>
