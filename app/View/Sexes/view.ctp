<div class="sexes view">
<h2><?php echo __('Sex'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sex['Sex']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($sex['Sex']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sex'), array('action' => 'edit', $sex['Sex']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sex'), array('action' => 'delete', $sex['Sex']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sex['Sex']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Sexes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sex'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Produits'); ?></h3>
	<?php if (!empty($sex['Produit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Prix'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Categorie Id'); ?></th>
		<th><?php echo __('Sex Id'); ?></th>
		<th><?php echo __('Info'); ?></th>
		<th><?php echo __('Marque'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sex['Produit'] as $produit): ?>
		<tr>
			<td><?php echo $produit['id']; ?></td>
			<td><?php echo $produit['name']; ?></td>
			<td><?php echo $produit['prix']; ?></td>
			<td><?php echo $produit['created']; ?></td>
			<td><?php echo $produit['categorie_id']; ?></td>
			<td><?php echo $produit['sex_id']; ?></td>
			<td><?php echo $produit['info']; ?></td>
			<td><?php echo $produit['marque']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produits', 'action' => 'view', $produit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produits', 'action' => 'edit', $produit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'produits', 'action' => 'delete', $produit['id']), array('confirm' => __('Are you sure you want to delete # %s?', $produit['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
