<?php
$fname=$_POST['name'];
$score=$_POST['score'];
$college=$_POST['college'];
$target_dir = "Result/";
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
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded. \n";
		$flag1=1;
		$connection = mysqli_connect("localhost","root","","explora") or die("Error " . mysqli_error($connection));

		$sql = "INSERT INTO result (`name`, `score`, `admission`, `url`) VALUES ('$fname',$score,'$college','$target_file')";
		echo $sql;
		$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));


		if($result>0)
		{

	    	echo '<script language="javascript">';
    		echo 'alert("Result added successfully")';
    		echo '</script>';
			echo "<script>
    		window.location = 'results.php';
			</script>";	
			$_SESSION['result']=1;
		}
		else
		{
			echo "<script>
    		window.location = 'welcome.php';
			</script>";	
			exit("Error While uploading image on the server");
		} 

		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>
