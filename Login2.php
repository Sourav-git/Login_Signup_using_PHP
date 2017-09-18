<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$email = $_POST['email'];
			$pswrd = md5($_POST['pswrd']);

			$query = "SELECT * FROM registration WHERE email = '$email' AND password = '$pswrd'";

			include("DB.php");
			$db = new DB();

			$run = $db->link->query($query);
			$row = $run->num_rows;

			if($row == 1)
				$Response = array('status' => '1');
			else
				$Response = array('status' => '0');

			echo json_encode($Response);

		unset($_POST);
		exit;
	}
?>