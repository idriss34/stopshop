
    var e = 1;
    $(".quickV").click(function(){
            var id = $(this).attr("id");
            if(e>0){
                $('.slick3').slick('unslick');
                $('#grdiv').empty();
                $('.wrap-slick3-dots').empty();
                $('.wrap-slick3-arrows').empty();
            }
            $.ajax({
            type:'post',
            url:"/wedding1/produits/get_info_prod",
            data:{"id":id},
            success: function(data){
                var array = $.parseJSON(data);
                $('.title').text(array.Produit.name);
                $('.prix').text(array.Produit.prix+' $');
                $('.desc').text(array.Produit.info);
                $('#grdiv').attr("prod-id",array.Produit.id);
                for(var i=0 ; i<array.Image.length; i++)
                {
                   $('#grdiv').append('<div id="img" class="item-slick3" data-thumb="/wedding1/img/images/Uploaded_Photo/'+array.Image[i].name+'"><div id="imgsrc" class="wrap-pic-w pos-relative"><img src="/wedding1/img/images/Uploaded_Photo/'+array.Image[i].name+'" alt="IMG-PRODUCT"><a id="imghref" class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/wedding1/img/images/Uploaded_Photo/'+array.Image[i].name+'"><i class="fa fa-expand"></i></a></div></div>');
                }

                setTimeout(function(){
                    $('.js-modal1').addClass('show-modal1');
                },100);
                $('.wrap-slick3').each(function(){
                    $(this).find('.slick3').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        fade: true,
                        infinite: true,
                        autoplay: false,
                        autoplaySpeed: 6000,

                        arrows: true,
                        appendArrows: $(this).find('.wrap-slick3-arrows'),
                        prevArrow:'<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
                        nextArrow:'<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

                        dots: true,
                        appendDots: $(this).find('.wrap-slick3-dots'),
                        dotsClass:'slick3-dots',
                        customPaging: function(slick, index) {
                            var portrait = $(slick.$slides[index]).data('thumb');
                            return '<img src=" ' + portrait + ' "/><div class="slick3-dot-overlay"></div>';
                        },
                    });
                });
            }
        });
        e++;
    });







