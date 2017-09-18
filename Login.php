<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$email = $_POST['email'];

			$query = "SELECT imageName FROM registration WHERE email = '$email'";

			include("DB.php");
			$db = new DB();

			$run = $db->link->query($query);
			$row = $run->num_rows;

			if($row == 1){
				while($data=$run->fetch_assoc()){
					$Response = array('pic' => $data['imageName'], 'status' => '1');
				}
			}else{
				$Response = array('status' => '0');
			}
			echo json_encode($Response);

		unset($_POST);
		exit;
	}
?>
