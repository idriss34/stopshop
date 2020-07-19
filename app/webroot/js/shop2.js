$(document).ready(function(){
	//-------------------------Shop----------------
	$('.add_to_cart').click(function(){
		var id = $('#grdiv').attr('prod-id');
		var repetition ;
		$('.list-cart > .product-li').each(function (prod) {
			var items_id = $('.product-li > label')[prod].id;
			if (items_id == id)
			{
				repetition = true;
			}
		});
		if (repetition)
		{
			swal('Ooops !',"Item already exist ", "error");
		}
		else {
			$('.select2-selection__rendered').each(function(item){
				if(item ==0){
					size = $(this).attr('title');

					if(size =='Choose an option'){
						$(this).parent().attr('style','border:red 2px solid;');
						error = true;
					}
					else {
						$(this).parent().removeAttr('style');
						error = false;
					}
				}
				if(item ==1){
					color = $(this).attr('title');
				}
			});
			var size_dr = $('.select2-selection__rendered')[0];
			var color_dr = $('.select2-selection__rendered')[1];
			if($(size_dr).attr('title') =='Choose an option' ){
				$(size_dr).parent().attr('style','border:red 2px solid;');
				error = true;
			}
			else {
				$(size_dr).parent().removeAttr('style');
				error = false;
				$(size_dr).attr('title','Choose an option');
				$(size_dr).text('Choose an option');
			}
			if( $(color_dr).attr('title') =='Choose an option' ){
				$(color_dr).parent().attr('style','border:red 2px solid;');
				error = true;
			}
			else {
				$(color_dr).parent().removeAttr('style');
				error = false;
				$(color_dr).attr('title','Choose an option');
				$(color_dr).text('Choose an option');
			}
			if( error == false   )
			{
				var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
				swal(nameProduct, "is added to cart !", "success");
				$('.error-cart').hide();
				var qte = $('.num-product').attr('value');
				var p = $('.prix').text();
				var imgProduct = $(this).parent().parent().parent().parent().parent().parent().find('.slick-active').find('img').attr('src');
				var nameProduct = $(this).parent().parent().parent().parent().find('.title').html();
				var prix = p.split(" ");
				var Prixtot = qte * prix[0];
				var size ;
				var color;
				var error = false;
				$('.btn-num-product-down').next().val(1);
				$('.btn-num-product-down').next().attr("value",1);


				var x=$('.num-products').attr('data-notify');
				x++;
				$('.num-products').attr('data-notify',x);
				$.ajax({
					type:"post",
					url:"/wedding1/paniers/panier",
					data:{"produit_id":id,"qte_prod":qte,"size_prod":size,"color_prod":color,'Prix_tot':Prixtot,'img_prod':imgProduct,'name_prod':nameProduct},
					success:function(json){

						var array = $.parseJSON(json);
						var i=(array.length)-1;
						var pri=$('.tot').text();
						var prixt = pri.split("MAD");
						var dx = Number(prixt[0])+Prixtot;
						$('.tot').text(dx+' MAD');
						$('.list-cart').append('<li class="header-cart-item flex-w flex-t m-b-12 product-li"><label class="d-none" id="'+array[i][0]+'"></label><div class="header-cart-item-img prod-img"><img src="'+array[i][5]+'"></div><div class="header-cart-item-txt p-t-8"><a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">'+array[i][6]+'</a><span class="header-cart-item-info rix">'+array[i][1]+' x '+prix[0]+' MAD</span></div></li>');

					}
				});
			}
			else {
				swal('Ooops !',"you need to complete the form ", "error");
			}


		}


	});
	$("#search").keyup(function(){
		// Retrieve the input field text and reset the count to zero
		var filter = $(this).val(), count = 0;
		// Loop through the comment list
		$(".prod .product").find('a>span').each(function(){

			// If the list item does not contain the text phrase fade it out
			if ($(this).text().search(new RegExp(filter, "i")) < 0) {
				$(this).parent().parent().parent().parent().parent().fadeOut().wrap();
				// $(this).parent().parent().parent().parent().parent().parent().find('.product').attr('style','float:left;')
				// $(this).parent().parent().parent().parent().parent().remove();
				//  console.log($(this).parent().parent().parent().parent().parent().find('product').at+('style','float:left;'));
				// Show the list item if the phrase matches and increase the count by 1
			} else {

				$(this).parent().parent().parent().parent().parent().show();
				count++;
			}
		});
	});
	$('.filtre-btn').on('click',function () {
		$('.isotope-grid').removeClass('d-none');
		$('.prod').addClass('d-none');
	});
	$('.search-btn').on('click',function () {
		$('.isotope-grid').addClass('d-none');
		$('.prod').removeClass('d-none');
	});
	//-------------------------- Panier ----------------
});
