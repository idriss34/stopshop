

<div class="row m-t-150 m-b-150 m-r-0 m-l-0">
	<div class="col-md-6 m-auto">
		<div class="card">
			<div class="card-header text-center">
			<h2>Category</h2>
			</div>
			<div class="card-body">
				<dl>
					<dt><?php echo __('Id'); ?></dt>
					<dd>
						<?php echo h($category['Category']['id']); ?>
						&nbsp;
					</dd>

					<dt><?php echo __('Type'); ?></dt>
					<dd>
						<?php echo h($category['Category']['type']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('User id'); ?></dt>
					<dd>
						<?php echo h($category['User']['id']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Created At'); ?></dt>
					<dd>
						<?php echo h($category['Category']['created']); ?>
						&nbsp;
					</dd>
				</dl>
			</div>
		</div>
	</div>
</div>

