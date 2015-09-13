<?php
session_start();
$group=$_POST['group2'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$dob=date('Y-m-d',strtotime($dob));
$flag1=0;
$flag2=0;
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["action"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded. ";
		$connection = mysqli_connect("localhost","explora_new","random1234rewA","explora_new") or die("Error " . mysqli_error($connection));
        //$connection = mysqli_connect("localhost","root","","explora") or die("Error " . mysqli_error($connection));
        $sql = "INSERT INTO `registration`(`course`, `first_name`, `middle_name`, `surname`, `address`, `mobile_no`,`img_path`, `dob`,`email`) VALUES ('$group','$fname','$surname','$lname','$address',$mob,'$target_file','$dob','$email')";
        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
        if($result>0)
        {
            $sql = "UPDATE new_reg SET flag=1 where otp=".$_SESSION['lotp'];
            $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
            unset($_SESSION['lotp']);
            echo '<script type="text/javascript"> alert("Registered Successfully")</script>';
            echo "<script type='text/javascript'>window.location='newregtext.php'</script>";
            $_SESSION['result']=1;
        }
        else
        {
             echo "<script>
             window.location = 'index.php';
             </script>"; 
            exit("Error, Try Again after sometime");
        } 
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>
