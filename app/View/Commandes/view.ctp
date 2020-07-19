<div class="commandes view">
<h2><?php echo __('Commande'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commande['User']['id'], array('controller' => 'users', 'action' => 'view', $commande['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref'); ?></dt>
		<dd>
			<?php echo h($commande['Commande']['ref']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Commande'), array('action' => 'edit', $commande['Commande']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Commande'), array('action' => 'delete', $commande['Commande']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $commande['Commande']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Commandes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commande'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paniers'), array('controller' => 'paniers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Panier'), array('controller' => 'paniers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Details'); ?></h3>
	<?php if (!empty($commande['Detail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Commande Id'); ?></th>
		<th><?php echo __('Produit Id'); ?></th>
		<th><?php echo __('Qte'); ?></th>
		<th><?php echo __('Prixtot'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($commande['Detail'] as $detail): ?>
		<tr>
			<td><?php echo $detail['id']; ?></td>
			<td><?php echo $detail['commande_id']; ?></td>
			<td><?php echo $detail['produit_id']; ?></td>
			<td><?php echo $detail['qte']; ?></td>
			<td><?php echo $detail['prixtot']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'details', 'action' => 'view', $detail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'details', 'action' => 'edit', $detail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'details', 'action' => 'delete', $detail['id']), array('confirm' => __('Are you sure you want to delete # %s?', $detail['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Paniers'); ?></h3>
	<?php if (!empty($commande['Panier'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Produit Name'); ?></th>
		<th><?php echo __('Produit Prix'); ?></th>
		<th><?php echo __('Quantite'); ?></th>
		<th><?php echo __('Commande Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($commande['Panier'] as $panier): ?>
		<tr>
			<td><?php echo $panier['id']; ?></td>
			<td><?php echo $panier['produit_name']; ?></td>
			<td><?php echo $panier['produit_prix']; ?></td>
			<td><?php echo $panier['quantite']; ?></td>
			<td><?php echo $panier['commande_id']; ?></td>
			<td><?php echo $panier['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'paniers', 'action' => 'view', $panier['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'paniers', 'action' => 'edit', $panier['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'paniers', 'action' => 'delete', $panier['id']), array('confirm' => __('Are you sure you want to delete # %s?', $panier['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Panier'), array('controller' => 'paniers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
