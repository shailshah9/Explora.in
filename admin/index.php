<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel::Explora Academy of Design</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="icon" href="../media/logo.png">
	<style type="text/css">
	body{

	}
	.main-thing{
		width: 500px;
		height: 420px;
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
	</style>
</head>
<body>
	<div class="row main-thing">
		<h4 class="center">Admin</h4>
	    <form name="login_form" id="login_form" method="POST" class="col s12" action="validateadmin.php">
	    	<div class="row">
	    		<?php 
					if(isset($_SESSION['warning']))
					{
				?>
					<div class="col s12 wrong"> <?php echo $_SESSION['warning']?></div>
				<?php
					}
					unset($_SESSION['warning']);
				?>
	    	</div>
	      	<div class="row">
		        <div class="input-field col s12">
		          <i class="material-icons prefix">account_box</i>
		          <input id="icon_prefix" type="text" class="validate" autocomplete="off" name="username" required>
		          <label for="icon_prefix">Username</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="input-field col s12">
		          <i class="material-icons prefix">lock</i>
		          <input id="icon_password" type="password" class="validate" name="password" required>
		          <label for="icon_password">Password</label>
		        </div>
	      	</div>
	      	<button class="btn waves-effect waves-light submeet right" type="submit" name="action">Submit
				<i class="material-icons">send</i>
			</button>
	    </form>
	</div>
</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/materialize.js"></script>
</body>
</html>