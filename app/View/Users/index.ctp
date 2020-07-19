
<div class="row m-t-150 m-b-150 m-r-0 m-l-0">
	<div class="col-md-8 m-auto">
		<div class="card">
			<div class="card-header text-center">
				<h2>Users</h2>
			</div>
			<div class="card-border">
				<table class="table">
				<thead>
					<tr>
							<th>Id</th>
							<th>Username</th>
							<th>Role</th>
							<th>E-mail</th>
							<th>Password</th>
							<th class="actions">Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['password']); ?>&nbsp;</td>

						<td class="actions">
							<?php 
							//if(AuthComponent::array('role' => 'admin')){?>
							<?php echo $this->Html->link(__(''), array('action' => 'view', $user['User']['id']),array('class'=>"fa fa-eye")); ?>
							<?php echo $this->Html->link(__(''), array('action' => 'edit', $user['User']['id']),array('class'=>"fa fa-edit")); ?>
							<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']),'class'=>"fa fa-trash")); ?>
						<?php //}?></td>
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
</div>
