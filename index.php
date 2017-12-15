<?php
    include 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
  $result = $con->query("SELECT username, password, level FROM tbl_accounts WHERE username = '$username' && password = '$passwords'");
  $datadata = mysqli_fetch_assoc($result);

  while($datadata === 1) {
    if ($datadata ['level'] === "Professor") {
      header('Location: dashboard.html');
    } else {
      if ($datadata ['level'] === "Student") {
      header('Location: dashboard2.html');
    } else {
      echo "<a href='../index.php'>Try again...</a>";
    }
    }
    
}

  // $username = $_POST['uname'];
 //   $passwords = $_POST['password'];

 //   $query = "SELECT username, password FROM tbl_accounts WHERE username = '$username' && password = '$passwords'";
 //   $read = mysql_query($query,$conn);

 //   $count = mysql_fetch_array($read);

 //   if ($count === 1) {
 //     header('Location: dashboard.html');
 //   }
?>
<!DOCTYPE html>
<html>
<style>
  .row{
    background-color: #ffb347;
    text-align: center;
    height: 80em;
  }
  form {
  width: 60em; 
  font-family: sans-serif;
  position: fixed;
  top: 0px;
}
.rowdown{
  height: 25em;
  float: left;
  text-align: left;
  margin-top: 10%;
  width: 100%;
}
input[type=text],
input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>
<body>
  <form method="POST" action="loginAction.php">
<div class="row">
  <img src="img/profaux.png" style="margin-top: 20%;width: 50em; margin-bottom: 10%;"><br>
      <label style="font-size: 30px;">
      <input type="text" placeholder="Enter Username" name="username" required style="font-size: 30px; width: 20em; height:3em; border-radius: 8px; margin-bottom: 5%; margin-top: 15%; ">
      <br>

      <label style="font-size: 30px;">
      <input type="password" placeholder="Enter Password" name="password" required style="font-size: 30px; width: 20em; height:3em; border-radius: 8px;">

      <br><br><br>
      <a href="captcha.php" style=" color: grey; height: 20em; margin-top: 0em;margin-bottom: 10%; ">Forgot Password?</a>
</div>
      <div class="rowdown">
         <a href="regis.html" style=" color: #ffb347;font-size: 80px; margin-left: 8%; width: 50%;
         height: 40%; margin-top: 50%;">  REGISTER</a>
       <!--   <button class="submit-btn" style=" width:25em; height: 15em; margin-left: 10%;" ></button>  -->
         <input type="submit" name="submit" value="LOGIN" style=" background-color:#ffb347;
  color: white;
  border-radius: 20%; font-size: 60px;
  background-position: center; width: 35%; height: 3em; margin-left: 10%;">
      </div>
  </form>
</body>
</html>