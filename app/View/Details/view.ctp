<div class="details view">
<h2><?php echo __('Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commande'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detail['Commande']['name'], array('controller' => 'commandes', 'action' => 'view', $detail['Commande']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detail['Produit']['name'], array('controller' => 'produits', 'action' => 'view', $detail['Produit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qte'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['qte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prixtot'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['prixtot']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detail'), array('action' => 'edit', $detail['Detail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detail'), array('action' => 'delete', $detail['Detail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $detail['Detail']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commandes'), array('controller' => 'commandes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commande'), array('controller' => 'commandes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
	</ul>
</div>
