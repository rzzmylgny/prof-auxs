<?php
	include 'connection.php';
		 $studentNumber = $_POST['studentNumber']
		 $firstname = $_POST['firstname'];
    	 $lastname = $_POST['lastname'];
    	 $username = $_POST['username'];
    	 $password = $_POST['password'];
    	 $confirmpassword = $_POST['confirmpassword'];
    $result = $con->query("INSERT INTO studentNumber, firstname, lastname, username, password, confirmpassword, FROM tbl_registration WHERE studentNumber='studentNumber', firstname ='$firstname', lastname ='$lastname', username = '$username',  password = '$passwords' && confirmpassword='$confirmpassword' ");
    $datadata = mysqli_fetch_assoc($result);
?>