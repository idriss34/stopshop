
<div class="row m-t-150 m-b-240 m-r-0 m-l-0">
	<div class="col-md-6 m-auto">	
		<div class="card">	
			<div class="card-header  text-center">
				<h3>Ajouter une Categorie</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
					<?php echo $this->Form->create('Category'); ?>
					<?php
						echo $this->Form->input('type',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Type","div"=>array('class'=>'form-group')));
						echo $this->Form->input('user_id',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"User Id","div"=>array('class'=>'form-group')));
					?>
					<div class="text-center">
					<button type="submit" class="btn btn-primary">Ajouter</button>
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


