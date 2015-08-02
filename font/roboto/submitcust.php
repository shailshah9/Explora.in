<?php 

//DEFINE ('DBUSER', 'skrapoqe_db'); 
//DEFINE ('DBPW', '*lalla1011'); 
//DEFINE ('DBHOST', 'localhost'); 
//DEFINE ('DBNAME', 'skrapoqe_db'); 

$servername = "localhost";
$username = "skrapoqe_db";
$password = "*lalla1011";
$dbname = "skrapoqe_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*
$Name = mysqli_real_escape_string($dbc, $_POST['Name']);
$Address = mysqli_real_escape_string($dbc,$_POST['Address']);
$Phone = mysqli_real_escape_string($dbc,$_POST['Phone']);
$Email = mysqli_real_escape_string($dbc,$_POST['Email']);
$Zip_Code = mysqli_real_escape_string($dbc,$_POST['Zip_Code']);
$Preferred_Time_Slot = mysqli_real_escape_string($dbc,$_POST['Preferred_Time_Slot']);
$Pick_Up_Date= mysqli_real_escape_string($dbc,$_POST['Pick_Up_Date']);
*/
$name = addslashes ($_POST['fname']);
$address = addslashes ($_POST['address']);
$phone = addslashes ($_POST['phone']);
$email = addslashes ($_POST['email']);
$zip = addslashes ($_POST['pin']);
$pickuptime = addslashes ($_POST['time']);
$pickupdate = addslashes ($_POST['date']);

$sql = "INSERT INTO Booking_Table(Name,Address,Phone,Email,Zip_Code,Preferred_Time_Slot,Pick_Up_Date) VALUES ('$name','$address','$phone','$email','$zip','$pickuptime','$pickupdate')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully :)";
    
    $usermessage = "New record created successfully";
    
    
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $usermessage = "New record unsuccessfully";
}

$conn->close();


/*
$dbc = mysqli_connect(DBHOST,DBUSER,DBPW);
if (!$dbc) {
    die("Database connection failed: " . mysqli_error($dbc));
    exit();
}

$dbs = mysqli_select_db($dbc, DBNAME);
if (!$dbs) {
    die("Database selection failed: " . mysqli_error($dbc));
    exit(); 
}


$Name = mysqli_real_escape_string($dbc, $_POST['Name']);
$Address = mysqli_real_escape_string($dbc,$_POST['Address']);
$Phone = mysqli_real_escape_string($dbc,$_POST['Phone']);
$Email = mysqli_real_escape_string($dbc,$_POST['Email']);
$Zip_Code = mysqli_real_escape_string($dbc,$_POST['Zip_Code']);
$Preferred_Time_Slot = mysqli_real_escape_string($dbc,$_POST['Preferred_Time_Slot']);
$Pick_Up_Date= mysqli_real_escape_string($dbc,$_POST['Pick_Up_Date']);
*/

/*

$query = "INSERT INTO Booking_Table (Name, Address, Phone, Email, Zip_Code, Preferred_Time_Slot, Pick_Up_Date) VALUES ('$Name', '$Address', '$Phone', '$Email', '$Zip_Code', '$Preferred_Time_Slot', '$Pick_Up_Date')";
*/


/*
$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc)); 

if($result){
    echo "Entered data successfully\n";
   }
   else{
    echo "Entered data un-successfully\n";

mysqli_close($dbc); 
	 
*/


?>

<html>

<body> 
<?php include_once("analyticstracking.php") ?>
<script>
     var message= '<?php echo $usermessage; ?>';	
    //alert(<?=$usermessage ?>);
     window.resizeTo(300, 150);
     window.moveTo(500, 300); 
    //alert(message); 
    setInterval(function(){ close(); }, 3000);
   
</script>

<p><?=$usermessage ?></p>


</body> 
</html>