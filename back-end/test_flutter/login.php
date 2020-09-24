<?php

require "connect.php";

	$username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
	$time = isset($_POST['time']) ? $_POST['time'] : '';
    
    $cek = "SELECT * FROM `user` WHERE `username`='$username' and `password`='$password'";
    $result = mysqli_fetch_array(mysqli_query($con, $cek));

    if(isset($result)){
        $status = 1;
        echo json_encode($status);
		$update = "UPDATE user SET login_time='$time', login_state='login' WHERE username='$username'";
		$con->query($update);
    } else{
            $status = 0;
            echo json_encode($status);
        }
  //  }

?>