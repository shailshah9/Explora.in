<!DOCTYPE html>
<html>
<head>
	<title>New Registrations::Explora Academy of Design</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/newreg.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="icon" href="media/logo.png">
</head>
<body>
<div class="container">
	<div class="row main-thing">
		<h2 class="center">New Registrations</h2>
	    <form name="login_form" id="reg_form" method="POST" enctype="multipart/form-data" class="col s12 white-text" action="register.php">
	      	<div class="row">
                <p class="center">
					  <input name="group1" type="radio" id="nata"/>
					  <label for="nata">Nata</label>

					  <input name="group1" type="radio" id="ID" />
				      <label for="ID">Interior Design</label>
					  
					  <input name="group1" type="radio" id="jee" />
				      <label for="jee">JEE (B.Arch)</label>
				</p>
            </div>
			<div class="row">
		        <div class="input-field col s12 l4 m4">
		          <input id="surname" type="text" class="validate" autocomplete="off" name="surname" required>
		          <label for="surname">Surname</label>
		        </div>
				<div class="input-field col s12 l4 m4">
		          <i class="material-icons prefix"></i>
		          <input id="fname" type="text" class="validate" autocomplete="off" name="fname" required>
		          <label for="fname">First Name</label>
		        </div>
				<div class="input-field col s12 l4 m4">
		          <i class="material-icons prefix"></i>
		          <input id="lname" type="text" class="validate" autocomplete="off" name="lname" required>
		          <label for="lname">Last Name</label>
		        </div>
		    </div>
		    <div class="row">
		        	<div class="input-field col s12 l12 m12">
						<textarea id="address" class="materialize-textarea" length="120"></textarea>
						<label for="address">Address</label>
		        	</div>
	      	</div>
			<div class="row">
				<div class="input-field col s12 l12 m12">
		          <input id="dob" type="date" class="validate datepicker" autocomplete="off" name="dob" required>
		          <label for="dob">Date of Birth</label>
		        </div>
		    </div>
		    <div class="row">
				<div class="input-field col s12 l6 m6">
		          <input id="mob" type="text" class="validate" autocomplete="off" length="13" name="mob" required>
		          <label for="mob">Contact</label>
		        </div>
		        <div class="input-field col s12 l6 m6">
		          <input id="mail" type="email" class="validate" autocomplete="off" name="mail" required>
		          <label for="mail">Email</label>
		        </div>
			</div>
			<div class="row">
				<div class="file-field input-field col s12 l12 m12">
					<div class="btn">
				    	<span>Upload Photo</span>
				       	<input type="file" name="file" id="photo" accept="image/*" required="">
				    </div>
					<div class="file-path-wrapper">
		              <input class="file-path validate" type="text">
		            </div>
			    </div>
			</div>
	      	<button class="btn waves-effect waves-light btn-large right" type="submit" name="action">Submit&nbsp;
				<i class="material-icons">save</i>
			</button>
	    </form>
	</div>
</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>
</html>