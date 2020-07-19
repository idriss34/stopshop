<div class="row m-t-150 m-b-150 m-r-0 m-l-0">
	<div class="col-md-8 m-auto">
		<div class="card">
			<div class="card-header text-center">
				<h2>Produits</h2>
			</div>
			<table class="table">
				<thead>
						<tr>
							<th>Id</th>
							<th>name</th>
							<th>prix</th>
							<th>categorie</th>
							<th>gender</th>
							<th>info</th>
							<th>marque</th>
							<th class="actions">Actions</th>
						</tr>
				</thead>
				<tbody>
					<?php foreach ($produits as $produit): ?>
						<tr>
							<td><?php echo h($produit['Produit']['id']); ?>&nbsp;</td>
							<td><?php echo h($produit['Produit']['name']); ?>&nbsp;</td>
							<td><?php echo h($produit['Produit']['prix']); ?> </td>
							<td>
								<?php echo $this->Html->link($produit['Categorie']['name'], array('controller' => 'categories', 'action' => 'view', $produit['Categorie']['id'])); ?>
							</td>
							<td>
								<?php echo $this->Html->link($produit['Sex']['name'], array('controller' => 'sexes', 'action' => 'view', $produit['Sex']['id'])); ?>
							</td>
							<td><?php echo h($produit['Produit']['info']); ?>&nbsp;</td>
							<td><?php echo h($produit['Produit']['marque']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__(''), array('action' => 'edit', $produit['Produit']['id']),array('class'=>'fa fa-edit','style'=>'position:relative; top:1px;')); ?>
								<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $produit['Produit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $produit['Produit']['id']),'class'=>'fa fa-trash')); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

				<div class="pagination justify-content-center">
					<li class="page-item ">
						<?= $this->Paginator->prev(__('Previous'), array('class'=>"page-link"), null, array('class' => 'prev disabled page-link')); ?>
					</li>
					<?=	 $this->Paginator->numbers(array('separator' => '','class'=>"page-link ",'style'=>'color:blue')); ?>
					<li class="page-item">
						<?=	 $this->Paginator->next(__('Next'), array('class'=>"page-link"), null, array('class' => 'next disabled page-link')); ?>
					</li>
				</div>



		</div>
	</div>
</div>


