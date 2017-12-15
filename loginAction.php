
<?php
  	include 'connection.php';

  	$username = $_POST['username'];
  	$passwords = $_POST['password'];
 	$result = $con->query("SELECT * FROM tbl_accounts WHERE username = '".$username."' && password = '".$passwords."'");
	$datadata = mysqli_fetch_assoc($result);

	//while($datadata === 1) {
		if ($datadata['level'] == "Prof") {
			header('Location: dashboard.html');
			// echo "LOL";
		} 
		else {
			if ($datadata['level'] == "student") {
			header('Location: dashboard2.html');
			} 
			else {
				echo "<a href='../index.php'>Try again...</a>";
			}
		}
		
	//}

	// $username = $_POST['uname'];
 //  	$passwords = $_POST['password'];

 //  	$query = "SELECT username, password FROM tbl_accounts WHERE username = '$username' && password = '$passwords'";
 //  	$read = mysql_query($query,$conn);

 //  	$count = mysql_fetch_array($read);

 //  	if ($count === 1) {
 //  		header('Location: dashboard.html');
 //  	}
?>