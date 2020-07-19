<div class="row m-t-150 m-b-240 m-r-0 m-l-0">
	<div class="col-md-6 m-auto">	
		<div class="card">	
			<div class="card-header  text-center">
				<h3>Ajouter un utilisateur</h3>
			</div>
			<div class="card-body">
				<div class="row">    
					<div class="col-md-12">
					<?php echo $this->Form->create('User'); ?>
					<?php
						echo $this->Form->input('name',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"name","div"=>array('class'=>'form-group')));
						echo $this->Form->input('role',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Role","div"=>array('class'=>'form-group')));
						echo $this->Form->input('email',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"E-mail","div"=>array('class'=>'form-group')));

						echo $this->Form->input('username',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"username","div"=>array('class'=>'form-group')));
						echo $this->Form->input('password',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"password","div"=>array('class'=>'form-group')));
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
