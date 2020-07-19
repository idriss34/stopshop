<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= $this->Html->css('util_log'); ?>
	<?= $this->Html->css('main_log1'); ?>
    <style>
        .input100{
            position: relative;
            top: 1px;
        }
				.msg{
					position: relative;
   			  bottom: 19px;
				}
    </style>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="/wedding1/register" class="needs-validation" novalidate method="post">
					<span class="login100-form-title p-b-49">
						Create account
					</span>
					<?php
					if($message){ ?>
							<div class="alert alert-danger">
								<?= $message ?>
							</div>
					<?php	}
					?>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100 ">Username</span>
						<input class="input100 username" type="text" name="username" required placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class=" msg username-msg d-none" style="color:red;" >
							Please choose a valid username.
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" id="password" required name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
						<div class=" msg Password d-none" style="color:red;">
							Password must be at least 6 characters.
						</div>
						<div class=" msg Password1 d-none" style="color:red;">
							Error Confirmation du Mot de passe.
						</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">re-password</span>
						<input class="input100" type="password" required id="re_password" name="re_password" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="email" required name="email" id="email" placeholder="Email">
						<span class="focus-input100 lb" data-symbol="&#x2709;"></span>
					</div>
						<div class="msg Email d-none" style="color:red;">
							Please include a valid email address.
						</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button   class="login100-form-btn submit">
								Sign up
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>


	<?php echo $this->Html->script('/login/main'); ?>
    <script>
(function($) {
     $('.submit').click(function (event)
        {
			var username = $('.username').val();
            if(username.length <5)
            {
								event.preventDefault();
                $('.username-msg').removeClass('d-none');
            }
            else
			{
				$('.username-msg').addClass('d-none');
			}

			var password = $("#password").val();
            var confirm_password = $("#re_password").val();
			if(password != confirm_password)
			{
				event.preventDefault();
				$('.Password1').removeClass('d-none');
			}
			else
			{
				$('.Password1').addClass('d-none');
			}
            if(password.length < 6)
            {
                event.preventDefault();
                $('.Password').removeClass('d-none');
            }
			else
			{
				$('.Password').addClass('d-none');
			}

            var email = $('#email').val();
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(!email.match(mailformat))
			{
				event.preventDefault();
				$('.Email').removeClass('d-none');
			}
			else
			{
				$('.Email').addClass('d-none');
			}
        });
    })(jQuery);


    </script>

</body>
</html>

