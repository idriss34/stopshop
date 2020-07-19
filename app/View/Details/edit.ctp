<div class="details form">
<?php echo $this->Form->create('Detail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('commande_id');
		echo $this->Form->input('produit_id');
		echo $this->Form->input('qte');
		echo $this->Form->input('prixtot');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Detail.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Detail.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Commandes'), array('controller' => 'commandes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commande'), array('controller' => 'commandes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
	</ul>
</div>
