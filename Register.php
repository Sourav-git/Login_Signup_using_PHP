<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$firstName = $_POST['first_name'];
		$midName = $_POST['middle_name'];
		$lastName = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];

		$imgName = $_FILES['p_pic']['name'];
		$imgTmp = $_FILES['p_pic']['tmp_name'];
		// $imgSize = $_FILES['p_pic']['size'];
		$imgExt = pathinfo($_FILES['p_pic']['type'], PATHINFO_FILENAME);

		if($firstName && $lastName && $email && $password && $phone){
			
			$password = md5($password);
			if($imgName){
				$imgName = $email.".".$imgExt;
			}
			
			include("DB.php");
			$db = new DB();
			$query = "INSERT INTO registration(firstName,middleName,lastName,email,password,phone,imageName) VALUES('$firstName','$midName','$lastName','$email','$password','$phone','$imgName')";
			if($db->link->query($query)){
				move_uploaded_file($imgTmp, "pictures/".$imgName);
			}

			unset($_POST);
			header('Location:Success.php');
		}
		exit;
	}
?>