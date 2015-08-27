<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Results::Explora Academy of Design</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="icon" href="../media/logo.png">
	<style type="text/css">
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
	.main-thing{
		width: 900px;
		height: 520px;
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
		<h4 class="center">Add result</h4>
	    <form name="result_form" id="result_form" method="POST" enctype="multipart/form-data" class="col s12" action="addresult.php">
	    	<div class="row">
	    		<?php 
					if(isset($_SESSION['result']))
					{
				?>
					<div class="col s12 wrong"> <?php echo $_SESSION['result']?></div>
				<?php
					}
					unset($_SESSION['result']);
				?>
	    	</div>
	      	<div class="row">
		        <div class="input-field col s12">
		          <i class="material-icons prefix">account_box</i>
		          <input id="icon_prefix" type="text" class="validate" autocomplete="off" name="name" required>
		          <label for="icon_prefix">Full Name</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="input-field col s12 m6 l6">
		          <i class="material-icons prefix">create</i>
		          <input id="score" type="number" class="validate" name="score" required>
		          <label for="score">Score</label>
		        </div>
	      	    <div class="input-field col s12 m6 l6">
		          <i class="material-icons prefix">location_on</i>
		          <input id="clg" type="text" class="validate" name="college" required>
		          <label for="clg">College</label>
		        </div>
	      	</div>
	      	<div class="row">
				<div class="file-field input-field col s12 l12 m12">
					<div class="btn white teal-text">
				    	<span>Upload Photo</span>
				       	<input type="file" name="file" id="photo" accept="image/*" required="">
				    </div>
					<div class="file-path-wrapper">
		              <input class="file-path validate" type="text">
		            </div>
			    </div>
			</div>
	      	<button class="btn waves-effect waves-light submeet right white teal-text" type="submit" name="action">Submit
				<i class="material-icons">send</i>
			</button>
	    </form>
	</div>
</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/materialize.js"></script>
</body>
</html>