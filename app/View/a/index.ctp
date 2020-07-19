

<div class="row m-t-150 m-b-150 m-r-0 m-l-0">
	<div class="col-md-8 m-auto">
		<div class="card">
			<div class="card-header text-center">
				<h2>Categories</h2>
			</div>
			<table class="table">
				<thead>
						<tr>
							<th>Id</th>
							<th>Type</th>
							<th>User Id</th>
							<th>created</th>
							<th class="actions">Actions</th>
						</tr>
				</thead>
				<tbody>
					<?php foreach ($categories as $category): ?>
						<tr>
							<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
							<td><?php echo h($category['Category']['type']); ?>&nbsp;</td>
							<td><?php echo h($category['Category']['user_id']); ?>&nbsp;</td>
							<td><?php echo h($category['Category']['created']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__(''), array('action' => 'view', $category['Category']['id']),array('class'=>'fa fa-eye')); ?>
								<?php echo $this->Html->link(__(''), array('action' => 'edit', $category['Category']['id']),array('class'=>'fa fa-edit')); ?>
								<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']),'class'=>'fa fa-trash')); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

