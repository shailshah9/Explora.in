<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Explora Academy of Design</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/common.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<style type="text/css">
	.thiscard{
		padding: 30px;
		background-color: inherit;
		text-align: center;
	}
	.thiscard a{
		margin: 15px;
	}
	</style>
	<script src="js/modernizr.js"></script>
	<link rel="icon" href="media/logo.png">
</head>
<body>
	<ul id='dropdown1' class='dropdown-content'>
		<li><a href="history.html">History</a></li>
		<li><a href="key_people.html">Key People</a></li>
		<li><a href="#our_course" class="modal-trigger">Course</a></li>
		<li><a href="methodology.html">Teaching Methodology</a></li>
	</ul>
	<ul id='dropdown2' class='dropdown-content'>
		<li><a href="history.html">History</a></li>
		<li><a href="key_people.html">Key People</a></li>
		<li><a href="#our_course" class="modal-trigger">Course</a></li>
		<li><a href="methodology.html">Teaching Methodology</a></li>
	</ul>

	<nav role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="index.php" class="brand-logo">
				<img src="media/logo.png" class="responsive-img logo1"></img>
				<span class="headername">Explora Academy of  Design</span>
			</a>
			
			<ul class="right hide-on-med-and-down">
				<li><a class="dropdown-button" href="#!" data-activates="dropdown1">About Us<i class="material-icons suffix" style="float: right;">keyboard_arrow_down</i></a></li>
			    <li><a href="results.php">Results</a></li>
			    <li><a href="gallery.html">Gallery</a></li>
			    <li><a href="#contact" class="modal-trigger">Contact Us</a></li>
			    <li><a href="tel:9924376644"><i class="material-icons prefix" style="float: left;">phone</i><span style="float: left">9924376644</span></a></li>
			</ul>
			<ul id="nav-mobile" class="side-nav">
				<li><a class="dropdown-button" href="#!" data-activates="dropdown2">About Us<i class="material-icons suffix" style="float: right;vertical-align:bottom; padding-top: 17px;">keyboard_arrow_right</i></a></li>
				<li><a href="results.php">Results</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="#contact" class="modal-trigger">Contact Us</a></li>
				<li><a href="tel:9924376644"><i class="material-icons prefix" style="float: left;margin-top:17px;">phone</i><span style="float: left;vertical-align:top">9924376644</span></a></li>
				<li><a href="tel:9924376644"><i class="material-icons prefix" style="float: left;margin-top:17px;">phone</i><span style="float: left;vertical-align:top">9924376644</span></a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	<div id="contact" class="modal">
		<div class="modal-header"><h5>Contact Us</h5></div>
    	<div class="modal-content">
            <div class="row">
		        <div class="col s12 m6">
		          <div class="card card3 grey ">
		            <div class="card-content white-text">
		              <span class="card-title">Address</span><br><br>
		              Studio 2, First Floor <br>Cross Road Complex <br>Next to Mr.Puff, <br>Near to Domino's Pizza, <br>Subhanpura, Vadodara - 390023
		            </div>
		          </div>
		        </div>
		        <div class="col s12 m6">
		          <div class="card card3 grey ">
		            <div class="card-content white-text">
		              <span class="card-title">Contact</span>
		              <div><span>Ar. Manoj Patel: </span><a href="tel:9924376644"><u class="white-text"><span>+91 9924376644</span></u></a></div>
		              <div><span>Ar. Parth Chitte: </span><a href="tel:9998130018"><u class="white-text"><span>+91 9998130018</span></u></a></div>
		            </div>
		          </div>
		          <div>
	                <div>
	                	<a href="http://www.facebook.com/exploraacademy"><span class="fbicon large btn-floating btn-large waves-effect waves-light"></span></a>
	                	<a href="mailto:hello@explora.in" class="btn-floating btn-large waves-effect waves-light grey yo"><i class="material-icons large">email</i></a></div>
	              </div>
		        </div>
		    </div>
		</div>
		<div class="modal-footer">
			<button class="btn coursemodal waves-effect waves-light submeet" type="submit" name="submit">Okay &nbsp;<i class="material-icons">done_all</i></button>
		</div>
	</div>

	<div class="container">
		<section>
			<h3 class="center">ADMIN PANEL</h3>
			<p>
				<div class="row">
			        <div class="col s12 m12 l12">
			          <div class="card blue-grey darken-1">
			            <div class="card-content white-text">
			              <span class="card-title">Applications' Approval Status</span>
			              <p class="thiscard">
			              	<a class="waves-effect waves-light red lighten-2 btn-large"><i class="material-icons right">announcement</i>Pending</a>
			              	<a class="waves-effect waves-light green lighten-2 btn-large"><i class="material-icons right">done_all</i>Approved</a>
			              	<a class="waves-effect waves-light  brown lighten-2 btn-large"><i class="material-icons right">keyboard_tab</i>Logout</a>
			              </p>
			            </div>
			          </div>
			        </div>
			    </div>
			</p>
		</section>
	</div>

	<div id="our_course" class="modal">
	    <div class="modal-content modal-course">
			<div class="card card3 blue-grey darken-1">
	        <div class="card-titl"><h4>Our Course</h4></div>
	        <div class="card-content thiscard white-text">
	            <h5><strong>NATA </strong></h5>
				<p>The National Aptitude Test in Architecture (<strong>NATA</strong>), is an examination conducted for admission to undergraduate Architecture  courses  at any recognized institute in India. It judges the basic designing aptitude of  the applicants. It is mandatory for admission to a recognized undergraduate architecture course anywhere in India.</p>
				<br/>

				<p><b>How to apply for NATA 2015:</b><br>
				Candidates need to apply NATA 2015 online application form through <a href="http://nata.in">www.nata.in</a>. Candidate must fill form in appropriate manner with all mandatory details.</p>
				<br/>

				<p><b>NATA Exam 2015 Eligibility:</b><br>
				Candidates should have qualified 10+2 or equivalent from a recognized Board/University with Mathematics as a subject of examination with at least 50% aggregate marks <b><u>OR</u></b> Candidates should have qualified 10+3 Diploma (any stream) recognized by Central/ State Governments with 50% aggregate marks</p>
				<br/>

				<p><b>NATA 2015 Question paper consists of two parts:</b><br>
				Drawing Test – 100 marks <br>
				Duration of test – 2 hours <br><br>
				Aesthetic Sensitivity Test – 100 marks<br>
				Duration of test – 1 hour</p>
				<br/>

				<p><b>NATA 2015 Syllabus, Test Structure:</b><br>
				The exam will be of 3 hrs. One has to clear the NATA eligibility criteria before applying. The test is divided into 2 sections. As per the Council of Architecture, a candidate applying to any school/ college of Architecture in India should have achieved 40% score in NATA, i.e. at least 80/200, for consideration of admission into first year B.Arch course.</p>
				<br/>

				<h5>Test 1</h5>
				<h6>The drawing aptitude of the candidate shall be judged on the following aspects</h6>
				<ol>
					<li>Ability to sketch</li>
					<li>Visualizing and Drawing</li>
					<li>Sense of Perspective Drawing</li>
					<li>Creating 2D and 3D Composition</li> 
					<li>Understanding of scale and sense of proportion</li>
					<li>Memory drawing from experience</li>
				</ol>
				<br/>

				<h5>Test 2</h5>
				<h6>Aesthetic sensitivity is to evaluate candidates perception, imagination, observation, creativity and communication and architectural awareness.</h6><br>
				<h6>The test shall be of objective type and comprise of topics related to:</h6>
				<ol>
					<li>Visualizing 3D objects from 2D drawings</li>
					<li>Visualizing different sides of 3D objects</li>
					<li>Analytical Reasoning</li>
					<li>Mental Ability</li> 
					<li>Imaginative Comprehension and Expression</li>
					<li>Architectural Awareness</li>
				</ol>
	        </div>
	    </div>	
	</div>

	<div class="modal-footer">
    	<button class="btn waves-effect waves-light submeet coursemodal blue-grey " >Okay &nbsp;<i class="material-icons">done_all</i></button>
    </div>
  </div>

  <footer class="page-footer grey">
    <div class="container footer">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Explora Academy of Design</h5>
          <p class="grey-text text-lighten-4">Studio 2, First Floor, <br>Cross Road Complex, <br>Next to Mr.Puff, <br>Near to Domino's Pizza, <br>Subhanpura, Vadodara - 390023</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Quick Links</h5>
          <ul>
            <li><a href="key_people.html" class="white-text">Key People</a></li>
				<li><a href="#our_course" class="white-text modal-trigger">Course</a></li>
			    <li><a href="results.php" class="white-text">Results</a></li>
			    <li><a href="gallery.html" class="white-text">Gallery</a></li>
			    <li><a href="#contact" class="white-text modal-trigger">Contact Us</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center">
      Developed by <a class="white-text text-lighten-3" href="#">Shail Shah and Tanmay Rajani</a>
      </div>
    </div>
  </footer>
  <script src="js/demo.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
  	$(document).ready(function() {
  		$('input:radio[name="group1"]').change(function(){
	        if ($(this).is(':checked') && $(this).val() == 'enquiry') {
	            $('#enqq').show();
	            $('#yob').show();
	        }
	        else {
	        	$('#enqq').hide();
	        	$('#yob').hide();
	        }
	    });
 	});
  </script>
  </body>
</html>