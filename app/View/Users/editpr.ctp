

<?php echo $this->element('header'); ?>

<?php
$user= $this->request->data['User'];
$commande = $commandes['Commande'];
 ?>
<style>
    .btn-primary{
        top: 0px;
    width: 150px;
    }
	#tof{
		max-width: 157px;
		max-height: 169px;
	}
</style>
<div class="container m-t-50">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#" data-target="#profile" data-toggle="tab" class="nav-link active">Commands</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
<!--                    <h5 class="mb-3">User Commands --><?//= $user['username'] ;?><!--</h5>-->
                        <table >
                        <ul class="tab m-l-20">
                            <?php $i=1; foreach ($commande as  $cmnd) {  ?>
                                <a href="#" >
                                    <li data="<?php echo $cmnd['id']; ?>" class="cmnd121 alert alert-primary text-center" style="width:200px;">Command <?php echo $i; ?>
                                    <?php if($cmnd['state']==0){ ?>
                                        <span  data-toggle="tooltip" data-placement="right" title="Unread" style="position: relative; top: 2px; left: 15px;">
                                        <svg  aria-hidden="true" style=" width=15px; height:15px; " focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="red" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                                        </span>
                                    <?php }  if($cmnd['state']==1){ ?>
                                    <span data-toggle="tooltip" data-placement="right" title="Read" style="position: relative; top: 2px; left: 15px;">
                                    <svg style=" width=15px; height:15px; " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-double" class="svg-inline--fa fa-check-double fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="blue" d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z"></path></svg>
                                        </span>
                                    <?php }if($cmnd['state']==2) { ?>
                                    <span data-toggle="tooltip" data-placement="right" title="Approuved" style="position: relative; top: 2px; left: 15px;">
                                    <svg style=" width=15px; height:15px; " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="svg-inline--fa fa-check-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="green" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                                    </span>
                                    <?php } ?>
                                    <?php if($cmnd['state']==3) { ?>
                                        <span data-toggle="tooltip" data-placement="right" title="Denied" style="position: relative; top: 2px; left: 15px;">
                                        <svg style=" width=15px; height:15px; " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-triangle" class="svg-inline--fa fa-exclamation-triangle fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="red" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path></svg>
                                        </span>
                                    <?php } ?>
                                    </li>
                                </a>

                            <?php $i++;} ?>
                        </ul>
                        </table>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <table class="table table-hover table-striped">
                        <tbody>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                  <form action="/wedding1/users/editpr/<?php echo $user['id']; ?>" enctype="multipart/form-data" method="post">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input name="firstName" class="form-control" type="text" value="<?php echo $user['firstName']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input name="lastName" class="form-control" type="text" value="<?php echo $user['lastName']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input name="email" class="form-control" type="email" value="<?php echo $user['email'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Age</label>
                            <div class="col-lg-9">
                                <input name="age" class="form-control" type="integer" value="<?php echo $user['age']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input name="adress" class="form-control" type="text" value="<?php echo $user['adress'];?>" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input name="city" class="form-control" type="text" value="<?php echo $user['city'];?>" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input name="zipcode" class="form-control" type="text" value="<?php echo $user['zipcode'];?>" placeholder="Zip Code">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input name="username" class="form-control" type="text" value="<?php echo $user['username'];?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">CIN</label>
                            <div class="col-lg-9">
                                <input name="cin" class="form-control" type="text" value="<?php echo $user['cin'];?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
                            <div class="col-lg-9">
                                <input name="tel" type="number" class="form-control" type="text" value="<?php echo $user['tel'];?>">
                            </div>
                        </div>
<!--                        <div class="form-group row">-->
<!--                            <label class="col-lg-3 col-form-label form-control-label">Password</label>-->
<!--                            <div class="col-lg-9">-->
<!--                                <input name="password" class="form-control" type="password" >-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group row">-->
<!--                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>-->
<!--                            <div class="col-lg-9">-->
<!--                                <input  class="form-control" type="password" >-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <button type="submit" class="btn btn-outline-danger">Save Changes</button>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 order-lg-1 text-center">
            <img src="/wedding1/img/images/profil/<?php echo $user['img'];?>" id="tof" class="p-b-6 img-responsive img-fluid rounded-circle w-50 h-55" alt="avatar">
            <label class="custom-file">
                 <input type="file" class="form-control" id="photo1" style="width: 135px;" name="data[path]" hidden="hidden">

                   <span class="btn btn-outline-primary form-control m-b-100" style="width:155px;" for="photo1">Change</span>
            </label>
        </div>
        </form>
    </div>
</div>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#tof').attr('src', e.target.result);
      $('.profilimg').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#photo1").change(function() {
  readURL(this);
});

$('li').click(function(){
    var idcmnd = $(this).attr('data');
        $.ajax({
    type:'POST',
    url:'/wedding1/users/sendDetailCmnd',
    data:{'id':idcmnd},
    success:function(data){
        var array = $.parseJSON(data);
        $('.list-detail').empty();
        var prix =[];
        for (let i = 0;i < array.imgs.length; i++) {
            $('.list-detail').append('<li id="'+idcmnd+'" class="comndup header-cart-item flex-w flex-t m-b-12"><div class="header-cart-item-img"><img src="/wedding1/img/images/Uploaded_Photo/'+array.imgs[i].Image.name+'"></div><div class="header-cart-item-txt p-t-8"><a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">'+array.infos[i].Produit.name+'</a><span class="header-cart-item-info">'+array.infos[i].Detail.qte+' x  '+array.imgs[i].Produit.prix+' MAD</span></div></li>');
            prix[i]= array.infos[i].Detail.qte * array.imgs[i].Produit.prix;
        }
        var total=0;
        prix.forEach(element => {
             total = Number(total)+Number(element);
        });
        $('.tot-cmnd').text(total+' MAD');

    }

        });
    });
</script>



<?php echo $this->element('footer'); ?>
