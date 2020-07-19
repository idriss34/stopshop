/*==================================================================
[ Block Edit ]*/
var  count =0;
var error = 0;
var countImg = 0;
var xr = 1;

function delet(id,elem) {
	elem.parent().parent().parent().parent().remove();
	$.ajax({
		type:'delete',
		url:'/wedding1/images/delete/'+id,
	});
	countImg = $('.row-cols-1  .block2').length;

	++countImg;
	xr = 0;

}
function readURL(input,id) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			$("#"+id).attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
function afficher(id) {
	id = $('.row-cols-1  .block2').length +1;
	var id_img ;
	$('.del > label').each(function (element) {
		id_img = Number($('.del > label')[element].id) + 1;
	});
	var path =URL.createObjectURL(event.target.files[0]);

	$('.row-cols-1').append('<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item 10 1"><div class="block2"><div class="block2-pic hov-img0" ><div style="height: 200px; width: 200px"><img src="'+path+'" class="card-img-top" id="img'+id+'" style="max-width:100%; max-height:100%; display: block;"  ></div><a class="del block2-btn flex-c-m stext-102 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 m-r-37 " style="cursor: pointer; "><label onclick="deleteplus($(this));" id="'+id_img +'" class="trashadd trosh fa fa-trash"  style="cursor: pointer; min-width:10px; width:20px; "></label></a></div></div></div>');
	count++;
	$('.add').hide();
	xr=0;
}
function deleteplus(elem) {
	var array1  = $('.add');
	var id = elem.attr('id');
	delet(id,elem);
	countImg = $('.row-cols-1  .block2').length;
	var img = elem.parent().parent().find('img').attr('id').match(/(\d+)/);
	for (var i = 0 ; i<array1.length ; i++  )
	{
		var phot = $(array1[i]).find('.uploadimg').attr('id').match(/(\d+)/);

		if(img[0] == phot[0])
		{
			$(array1[i]).empty();
		}
	}

}
function addPhoto() {
	xr = 1 ;
	countImg = $('.row-cols-1  .block2').length;
	if (countImg <= 5)
	{
		countImg++;
		while(countImg <= 5 )
		{
			var div = '<div class="form-group add"><label style="cursor: pointer; left:10px;"  class="btn btn-success" for="photo'+countImg+'">Insert Image '+countImg+'</label><input onchange="afficher(countImg);" hidden="hidden" type="file" class="form-control uploadimg" id="photo'+countImg+'" name="data[Produit][image]['+countImg+'][path]"></div>';
			$('.photo-group').append(div);
			countImg++;
			break;
		}
	}
}
$( document ).ready(function() {
	$(".inp").change(function() {
		var src = $(this).attr("data-id");
		readURL(this,src);
	});
	$(".add_photo").click(function() {
		if( xr == 0)
		{
			addPhoto();
		}
	});

});
