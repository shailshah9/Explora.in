<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>OTP::Explora Academy of Design</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<style>
		input[type=text]:focus:not([readonly]) + label, input[type=password]:focus:not([readonly]) + label, input[type=email]:focus:not([readonly]) + label, input[type=url]:focus:not([readonly]) + label, input[type=time]:focus:not([readonly]) + label, input[type=date]:focus:not([readonly]) + label, input[type=datetime-local]:focus:not([readonly]) + label, input[type=tel]:focus:not([readonly]) + label, input[type=number]:focus:not([readonly]) + label, input[type=search]:focus:not([readonly]) + label, textarea.materialize-textarea:focus:not([readonly]) + label {
    color: #fff;
   }

  label{
    color:#fff !important;
  }
  .input-field .prefix.active {
      color: #fff; }

  input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    border-bottom-color:#fff !important  }   
	</style>
	<link rel="icon" href="../media/logo.png">
	<style type="text/css">
	
	.main-thing{
		width: 500px;
		height: 620px;
		margin: 50px auto 0px auto;
		padding: 40px;
		color: white;
		background-color: teal;
		-moz-border-radius: 25px;
	    -webkit-border-radius: 25px;
		-moz-box-shadow: 25px 25px 25px #888888;
		-webkit-box-shadow: 25px 25px 25px #888888;
		box-shadow: 25px 25px 25px #888888;
		border-top-left-radius: 0px;
		margin-top: 3%;
	}
	.image-logo{
		width:400px;
		height: 80px;
		padding-bottom: 20px;
		margin-right: auto;
		margin-left: auto;

	}
	.submeet{
		vertical-align: top;
		width: 170px;
	}
	.submeet i{
		padding-left: 20px;
	}
	.active{
		color: white !important;
	}
	.wrong{
		color: red;
		padding:10px;
		text-align: center;
	}
	@media only screen and (max-width : 600px) {
		.main-thing{ 
			width: 90%;
			height: 78%;
			padding: 15px 15px 25px 10px;
		}
		.image-logo{
			width:95%
		}
	}
	a{
		color: white;
		background-color:black;	 	
	}
	</style>
</head>
<body>
	<div class="row main-thing">
		<h4 class="center">One Time Login Form</h4>
	    <form name="login_form" id="login_form" method="POST" class="col s12" action="checkotp.php">
	    	<div class="row">
	    		<?php 
					if(isset($_SESSION['otp']))
					{
				?>
					<div class="col s12 wrong"> <?php echo $_SESSION['otp'];?></div>
				<?php
					
					}
					unset($_SESSION['otp']);
						
				?>
	    	</div>
	      	<div class="row">
		        <div class="input-field col s12">
		          <i class="material-icons prefix">vpn_key</i>
		          <input id="icon_prefix" type="text" maxlength="7" class="validate" autocomplete="off" name="otp" required>
		          <label for="icon_prefix">OTP</label>
		        </div>
		    </div>
		    <button class="btn waves-effect waves-light submeet right white teal-text" type="submit" name="action">Proceed
				<i class="material-icons">send</i>
			</button>
	    </form>
	    <p><i class="material-icons prefix" stlye="float:left">done_all</i>Please enter the OTP that you got in email while registering through the Explora website</p><br/>
	    <p><i class="material-icons prefix" stlye="float:left">done_all</i>Note that this OTP is valid only for single user registration, once you submit your data on next page, it can't be modified; to do so contact at <a href="mailto:info@explora.in">&nbsp;info@explora.in&nbsp;</a></p><br/>
	    <center>&copy; 2015. All rights reserved. Explora Academy of Design.<p></p></center>
	</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
</body>
</html>