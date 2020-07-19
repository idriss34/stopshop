<div class="row m-t-150 m-b-240 m-r-0 m-l-0">
	<div class="col-md-6 m-auto">
		<div class="card">
		<div class="card-header  text-center">
			<h3>Ajouter un Produit</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
				<?php echo $this->Form->create('Produit',array('type' => 'file')); ?>
				<fieldset>
				<?php
					echo $this->Form->input('name',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Name","div"=>array('class'=>'form-group')));
					echo $this->Form->input('prix',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Prix","div"=>array('class'=>'form-group')));
					echo $this->Form->input('categorie_id',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"category","div"=>array('class'=>'form-group')));
					echo $this->Form->input('sex_id',array("class"=>"form-control","aria-describedby"=>"passwordHelp",'label'=>'Gender',"div"=>array('class'=>'form-group')));
				?>
					<div class="form-group">
						<label for="info">Description</label>
						<textarea id="info"  name="data[Produit][info]" rows="4" class="form-control" cols="50" aria-describedby="passwordHelp" placeholder="Infos"></textarea>
					</div>
					<?php
					echo $this->Form->input('marque',array('id'=>'add_marque',"class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"marque","div"=>array('class'=>'form-group')));
				?>
					<div class="form-group change">
						<label for="photo1" style="cursor: pointer; left:10px;" class="btn btn-success">Photo 1</label>
						<input type="file" class="form-control addinp" hidden="hidden" id="photo1" name="data[Produit][image][1][path]">
					</div>
					<div class="photo-group">

					</div>

						<div class="text-center">
						<button type="button" class="add_photo btn btn-success m-b-5" ><i class="fa fa-image" ></i></button>
						<button type="submit" class="btn btn-primary ">Add</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	var i = 2;
	$('.add_photo').click(function(){
		while(i <= 5 )
		{
			var div = '<div class="form-group change"><label for="photo'+i+'" style="cursor: pointer; left:10px;" class="btn btn-success ">Photo '+i+'</label><input hidden="hidden" type="file" class="form-control addinp" id="photo'+i+'" name="data[Produit][image]['+i+'][path]"></div>';

			$('.photo-group').append(div);
			i++;

			break;
		}
		$('.addinp').change(function () {
			$('.change').hide();
		});
	});

	$('.addinp').change(function () {
		$('.change').hide();
	});

</script>
