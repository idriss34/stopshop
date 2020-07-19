<div class="row m-t-150 m-b-240 m-r-0 m-l-0">
	<div class="col-md-6 m-auto">
		<div class="card">
			<div class="card-header text-center">
				<h3>Modifier une categorie</h3>
			</div>		
			<?php echo $this->Form->create('Category'); ?>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12 ">
							<?php
								echo $this->Form->input('id',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Id","div"=>array('class'=>'form-group')));
								echo $this->Form->input('name',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"type","div"=>array('class'=>'form-group')));
								echo $this->Form->input('user_id',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"User id","div"=>array('class'=>'form-group')));
								
								?>
						</div>
					</div>
				</div>
			</div>
		<div class=" text-center">
			<button type="submit" class="btn btn-primary ">Modifier</button>
		</div>
</div>
</div>

</div>

