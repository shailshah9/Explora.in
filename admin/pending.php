<?php
session_start();
if(!isset($_SESSION['unm'])) header('location:index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Explora Academy of Design</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/common.css">
	<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
	<script src="../js/modernizr.js"></script>
	<link rel="icon" href="../media/logo.png">
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
				<img src="../media/logo.png" class="responsive-img logo1"></img>
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

	
	<div class="container">
		<section>
			<h3 class="center">Pending</h3>
		</section>
	</div>
	<div class="container">
		<div class="row">
        <div class="col s6 m3 l2">
          <div class="card">
            <div class="card-image">
              <img src="../media/KeyPeople/3.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
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
  <script src="../js/jquery.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
  </body>
</html>