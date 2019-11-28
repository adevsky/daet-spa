<?php
	session_start();
	require_once '../config/db.php';

	function login()
	{
		global $mysqli,$uname,$pword;
		$uname = $_POST['uname'];
		$pword = $_POST['pword'];
		$result = $mysqli->query("SELECT * FROM admin_tbl WHERE username = '" . $uname . "' and password = '". $pword ."'");

		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc(); // pang kuha ng data sa database
			$_SESSION['uname'] = $row['username'];
			$_SESSION['pword'] = $row['password'];
			echo "Successfully login" ?>  <a href="../admin.php"> HOME </a> <?php
		}else{
			echo "Invalid username and password " ?>  <a href="../index.php"> BACK </a> <?php
		}

	}

	function logout()
	{
		session_start();
		unset($_SESSION['uname']);
		session_destroy();
		header("Location:../index.php");
	}


	function upload(){

	$target_dir = "../uploads/services/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["upload"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo " Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
            echo " Sorry, there was an error uploading your file.";
        }
    }
	}

?>