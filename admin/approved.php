<?php
session_start();
if(!isset($_SESSION['unm'])) header('location:index.php');
include 'connection.php';
$rowcounter=0;
$sql = "select * from registration where flag=1 order by first_name desc";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

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
	<link href="css/card.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<style type="text/css">
	.thiscard{
		padding: 30px;
		background-color: inherit;
		text-align: center;
	}
	.thiscard a{
		margin: 15px;
	}
	.card a {
		color: black;
	}
	</style>
	<script src="../js/modernizr.js"></script>
	<link rel="icon" href="../media/logo.png">
</head>
<body>
	

	<nav role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="index.php" class="brand-logo">
				<img src="../media/logo.png" class="responsive-img logo1"></img>
				<span class="headername">Explora Academy of  Design</span>
			</a>
			
			<ul class="right hide-on-med-and-down">
				<li><a href="welcome.php">Home</a></li>
			    <li><a href="logout.php">Logout</a></li>
			</ul>
			<ul id="nav-mobile" class="side-nav">
				<li><a href="welcome.php">Home</a></li>
			    <li><a href="logout.php">Logout</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	
	<div class="container">
		<section>
			<h3 class="center">Approved Students</h3>
		</section>
	</div>
	<div class="container">
		<div class="row">
		<?php
			while($row=mysqli_fetch_array($result))
			{
		?>
        <div class="col s6 m3 l2">
          <div class="card result-card">
            <div class="card-image">
              <img src="<?php echo "../".$row['img_path'];?>">
              <span class="card-title"><?php echo $row['first_name']." ".$row['surname'];?></span>
            </div>
            <div class="card-content">
              <p><b>Fees:</b><?php echo $row['f_reg'];?></p>
              <p><b>Mob:</b><?php echo $row['mobile_no'];?></p><br/>
              <p><center><a onclick="return confirm('Are you sure , you want to delete?')" 
		       href="delete.php?idv=<?php echo $row['s_id'];?>"><i class="material-icons">delete</i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    	<a href="sendmail.php?idv=<?php echo $row['s_id'];?>"><i class="material-icons">mail</i></a></center></p>
            </div>
            
          </div>
        </div>
        <?php }?>
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
            	<li><a href="#" class="white-text">1</a></li>
				<li><a href="#" class="white-text">2</a></li>
			    <li><a href="#" class="white-text">3</a></li>
			    <li><a href="#" class="white-text">4</a></li>
			    <li><a href="#" class="white-text">5</a></li>
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
  <script type="text/javascript">
  var x;
  $(document).on("click", ".mod-ajax", function () {
  var myBookId = $(this).data('id');
  $(".modal-body #idv").val( myBookId);  
  });
  </script>
  </body>
</html>