<?php

$group=$_POST['group2'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$address=$_POST['address'];
$dob=$_POST['dob'];
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
        echo "File is an image - " . $check["mime"] . ".";
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
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded. ";
		$flag1=1;
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>
