
<div class="row m-t-150 m-b-150 m-r-0 m-l-0">
	<div class="col-md-8 m-auto">
		<div class="card">
			<div class="card-header text-center">
				<h2>Commandes</h2>
			</div>
			<table class="table" id='table_das'>
				<thead>
					<tr>
						<th  class="table-active">Id</th>
						<th class="table-active">user_id</th>
						<th class="table-active">Full name</th>
						<th class="table-active">tel</th>
						<th class="table-active">email</th>
						<th class="table-active">adress</th>
						<th class="table-active">state</th>
						<th class="actions table-active">Actions</th>
					</tr>
				</thead>


	<tbody>
	<?php foreach ($commandes as $commande): ?>
	<tr class="barre">
			<td data-toggle="modal" data-target=".bd-example-modal-lg" class="idcom " id="<?= $commande['Commande']['id']; ?>" ><?php echo h($commande['Commande']['id']); ?> &nbsp;</td>
			<td data-toggle="modal" data-target=".bd-example-modal-lg" >
				<?php echo $this->Html->link($commande['User']['id'], array('controller' => 'users', 'action' => 'view', $commande['User']['id'])); ?>
			</td>
			<td data-toggle="modal" data-target=".bd-example-modal-lg" ><?php echo h($commande['Commande']['name']); ?>&nbsp;</td>
			<td data-toggle="modal" data-target=".bd-example-modal-lg" ><?php echo h($commande['Commande']['tel']); ?>&nbsp;</td>
			<td data-toggle="modal" data-target=".bd-example-modal-lg" ><?php echo h($commande['Commande']['email']); ?>&nbsp;</td>
			<td data-toggle="modal" data-target=".bd-example-modal-lg" ><?php echo h($commande['Commande']['adress']); ?>&nbsp;</td>
			<td data-toggle="modal" data-target=".bd-example-modal-lg"  id="state"><?php if($commande['Commande']['state']==0){ ?>
											<span class="" style="position: relative; top: 2px; left: 15px;">
											<svg aria-hidden="true" style=" width=15px; height:15px; " focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="red" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
											</span>
										<?php }  if($commande['Commande']['state']==1){ ?>
										<span class="" style="position: relative; top: 2px; left: 15px;">
										<svg style=" width=15px; height:15px; " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-double" class="svg-inline--fa fa-check-double fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="blue" d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z"></path></svg>
											</span>
										<?php }if($commande['Commande']['state']==2) { ?>
										<span  style="position: relative; top: 2px; left: 15px;">
										<svg style=" width=15px; height:15px; " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="svg-inline--fa fa-check-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="green" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
										</span>
										<?php } ?>
										<?php if($commande['Commande']['state']==3) { ?>
											<span  style="position: relative; top: 2px; left: 15px;">
											<svg style=" width=15px; height:15px; " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-triangle" class="svg-inline--fa fa-exclamation-triangle fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="red" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path></svg>
											</span>
										<?php } ?>
			&nbsp;</td>
		<td class="actions text-center">
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $commande['Commande']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $commande['Commande']['id']),'class'=>'fa fa-trash')); ?>
		</td>

	</tr>
<?php endforeach; ?>

	</tbody>



	</table>
</div>
</div>
</div>

<div class="modal fade bd-example-modal-lg m-t-120" style="z-index:10000" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Details Commande :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body" style="margin-left: 30px;">
			<table class="table table-sm" >
				<thead>
					<tr>
					<th scope="col" class="text-center">Num</th>
					<th scope="col" class="text-center">Produit_id</th>
					<th scope="col" class="text-center" >Qte</th>
					<th scope="col" class="text-center" >Color</th>
					<th scope="col" class="text-center">Amount</th>
					</tr>
				</thead>
				<tbody class="table_d" >

				</tbody>
			</table>
			<div class="modal-footer">
			</div>
		</div >
    </div>
  </div>
</div>
<script>
	$(document).ready(function () {
		$('.barre').click(function () {
			var id =$(this).find('.idcom').attr('id');
			console.log(id);
			if(id){
				recupereId(id);
			}
		});
	});
	function recupereId(id_cmnd)
	{
		 $.ajax({
			type:'POST',
			url:'/wedding1/commandes/getDetails',
			data:{'id_comnd':id_cmnd},
			success:function name(data) {
				var data = $.parseJSON(data);
				var detail=[];
				var j=0;
				data.forEach(element => {
					 detail[j] = element.Detail;
					 j++;
				});
				var i = 1;
				$('.table_d').empty();
				detail.forEach(ele => {
					$('.modal-footer').empty();
					$('.table_d').append('<tr><th scope="row" class="text-center">'+i+'</th><td class="text-center">'+ele.produit_id+'</td><td class="text-center">'+ele.qte+'</td><td class="text-center">'+ele.color+'</td><td class="text-center">'+ele.prixtot+' MAD</td></tr>');
					$('.modal-footer').append('<button type="button"  onClick="unvalid('+ele.commande_id+')" class="btn btn-secondary " style="position: relative;top: 10px;" data-dismiss="modal">UnValid</button><button type="button" class="btn btn-primary valider"  onClick="valider('+ele.commande_id+')" data-dismiss="modal" >Valid</button>');
					i++;
				});
			}
		});
		$.ajax({
			type:'POST',
			url:'/wedding1/commandes/updateState',
			data:{'id_comnd':id_cmnd},
			success:function name(data) {
			}
		});
	}
	function valider(id_cmnd) {
		$.ajax({
			type:'POST',
			url:'/wedding1/commandes/updateStateApprouved',
			data:{'id_comnd':id_cmnd},
			success:function name(data) {
			}
		});
		$('.barre > #state').each(function (element) {
			if($(this).parent().find('.idcom').text() == id_cmnd)
			{
				$(this).empty().append('<span style="position: relative; top: 2px; left: 15px;"><svg style=" width=15px; height:15px; " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="svg-inline--fa fa-check-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="green" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>\n</span>');
			}
		});
	}
	function unvalid(id_cmnd) {
		$.ajax({
			type:'POST',
			url:'/wedding1/commandes/updateStateRejected',
			data:{'id_comnd':id_cmnd},
			success:function name(data) {
			}
		});
		$('.barre > #state').each(function (element) {
			if($(this).parent().find('.idcom').text() == id_cmnd)
			{
				$(this).empty().append('<span  style="position: relative; top: 2px; left: 15px;"><svg style=" width=15px; height:15px; " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-triangle" class="svg-inline--fa fa-exclamation-triangle fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="red" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path></svg></span>');
			}
		});
	}

</script>





