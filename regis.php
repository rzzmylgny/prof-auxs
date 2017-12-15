<?php
	include 'connection.php';
		 $firstname = $_POST['firstname'];
    	 $lastname = $_POST['lastname'];
    	 $username = $_POST['username'];
    	 $password = $_POST['password'];
    	 $confirmpassword = $_POST['confirmpassword'];
    $result = $con->query("INSERT INTO firstname, lastname, username, password, confirmpassword, FROM tbl_registration WHERE firstname ='$firstname', lastname ='$lastname', username = '$username',  password = '$passwords' && confirmpassword='$confirmpassword' ");
    $datadata = mysqli_fetch_assoc($result);
?>