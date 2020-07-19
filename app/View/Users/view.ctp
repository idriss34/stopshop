<div class="row m-t-150 m-b-150 m-r-0 m-l-0">
	<div class="col-md-6 m-auto">
		<div class="card">
			<div class="card-header text-center">
			<h2>Utilisateurs</h2>
			</div>
			<div class="card-body">
				<dl>
					<dt><?php echo __('Id'); ?></dt>
					<dd>
						<?php echo h($user['User']['id']); ?>
						&nbsp;
					</dd>

					<dt><?php echo __('Role'); ?></dt>
					<dd>
						<?php echo h($user['User']['role']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Name'); ?></dt>
					<dd>
						<?php echo h($user['User']['username']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Username'); ?></dt>
					<dd>
						<?php echo h($user['User']['email']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Password'); ?></dt>
					<dd>
						<?php echo h($user['User']['password']); ?>
						&nbsp;
					</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
