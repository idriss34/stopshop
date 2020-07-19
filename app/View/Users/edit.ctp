
<div class="row m-t-150 m-b-240 m-r-0 m-l-0">
	<div class="col-md-6 m-auto">
		<div class="card">
			<div class="card-header text-center">
				<h3>Modifier un utilisateur</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 ">
						<?php echo $this->Form->create('User'); ?>
							<?php
								echo $this->Form->input('id',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Id","div"=>array('class'=>'form-group')));
								echo $this->Form->input('username',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Username","div"=>array('class'=>'form-group')));
								echo $this->Form->input('email',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Name","div"=>array('class'=>'form-group')));
								echo $this->Form->input('role',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"role","div"=>array('class'=>'form-group')));
								echo $this->Form->input('password',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Password","div"=>array('class'=>'form-group')));
							?>
							<div class=" text-center">
							<button type="submit" class="btn btn-primary ">Modifier</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
