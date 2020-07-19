<style >
	.trash {
		position: relative !important;
		/*left: 1.5px !important;*/
		top: 3px !important;
	}
	.block2-btn{
		min-width:10px;
		width:18px;
		height: 35px;
	}
	.del{
		float:right; position: relative; left: 0px; right: 10px;
	}
	.del:after{
		position: relative;
		top: -25px;
	}

	.edit{
		float:left; position: relative; left: 30px; right: 0px;
	}
	#ProduitMarque{
		left:0px;
	}
	.hov-btn1:hover{
		border-color:white;
		background-color:white;
	}
	.btn-success{
		top:10px;
	}
	.m-b-240, .m-tb-240, .m-all-240 {
		margin-bottom:120px;
	}
	.prod-img{
		position: absolute;
		top: 0;
		left: 0;
	}
	.outils{
		position: relative;
		bottom: 10px;
	}
	.fa-edit:before{
		position: relative;
		margin-bottom: 20px;
	}
	.fa-trash:after{
		position: relative;
	}
	.block2-pic:hover .block2-btn{
		bottom: 0px;
	}
	.fa-edit{
		position: relative;
		left: 1.5px;
		top: 4.5px;
	}


</style>

<div class="row m-t-150 m-b-240 m-r-0 m-l-0">
	<div class="col-md-6 m-auto">
		<div class="card">
			<div class="card-header  text-center">
				<h3>Modifier un Produit</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<?php echo $this->Form->create('Produit',array('type' => 'file')); ?>
						<fieldset>
							<?php
							echo $this->Form->input('id',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Name","div"=>array('class'=>'form-group')));
							echo $this->Form->input('name',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Name","div"=>array('class'=>'form-group')));
							echo $this->Form->input('prix',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Name","div"=>array('class'=>'form-group')));
							echo $this->Form->input('categorie_id',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Name","div"=>array('class'=>'form-group')));
							echo $this->Form->input('sex_id',array('label' => 'Sexe',"class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Name","div"=>array('class'=>'form-group')));
							?>
							<div class="form-group">
								<label for="info">Description</label>
								<textarea id="info"  name="data[Produit][info]" rows="4" class="form-control" cols="50" aria-describedby="passwordHelp" placeholder="Infos"><?php echo $produit['Produit']['info']; ?></textarea>
							</div>
						<?php	echo $this->Form->input('marque',array("class"=>"form-control","aria-describedby"=>"passwordHelp","placeholder"=>"Marque","div"=>array('class'=>'form-group')));
							echo 'Change Images';
							?>
							<div class="row row-cols-1 row-cols-md-3 ml-3 ">
								<?php
									$i=1;
									foreach($produit['Image'] as $image):
								?>
									<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item 10 1">
										<div class="block2">
											<div class="block2-pic hov-img0 container-fluid" >
												<div style="height: 200px; width: 200px" >
													<?php echo $this->Html->image('images/Uploaded_Photo/'.$image['name'],array('class'=>'card-img-top prod-img','id'=>'img'.$i,'style'=>array('max-width:100%;','max-height:100%;','width: 160px;','display: block;'),'alt'=>'img1')) ; ?>
												</div>
												<div class="outils">
													<a class="del block2-btn flex-c-m stext-102 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" style="cursor: pointer;">
														<label  id="<?php echo $image['id']; ?>" onclick="deleteplus($(this));" class="trash fa fa-trash"  style="cursor: pointer; min-width:10px; width:20px; "></label>
														<input  type="file" style="width:0.1px; height:0.1px; opacity:0; overflow:hidden; position:absolute; z-index:-1;  " class="inp form-control " data-id="img<?php echo $i;?>"  id="real<?php echo $i; ?>" name="data[Produit][image][<?php echo $image['id'];?>][path]">
													</a>
													<a class="edit block2-btn flex-c-m stext-102 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15  trans-04" style="cursor: pointer; min-width:10px; width:20px; ">
														<label class="fa fa-edit ed" for="real<?php echo $i;?>" style="cursor: pointer;"></label>
													</a>
												</div>
											</div>
										</div>
									</div>
									<?php
									$i++;
								endforeach; ?>
							</div>
							<?php $count = count($produit['Image']);
								if($count <5){
								?>
							<div class="form-group add">
								<input type="file" hidden="hidden" onchange="afficher(<?php echo $i; ?>);" class="form-control uploadimg" id="photo<?php echo $count +1; ?>" name="data[Produit][image][<?php echo $count +1; ?>][path]">
								<label for="photo<?php echo $count +1; ?>" style="cursor: pointer; left:10px;"  class="btn btn-success label-insert">Insert Image <?php echo $count +1; ?></label>
							</div>
							<?php } ?>
							<div class="photo-group">
							</div>
							<div class="text-center">
								<button type="button"  class="add_photo btn btn-success"><i class="fa fa-image"></i></button>
								<button type="submit"  class="btn btn-primary submit ">Update</button>
							</div>
							<?php $this->Form->end(); ?>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
