<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js"></script>
<link rel="stylesheet"  href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>
<style>
  #alert_popver
  {
      display: block;
      position: absolute;
      bottom: 50px;
      left: 50px;
  }
  .wrapper
  {
    display: table-cell;
    vertical-align: bottom;
    height: auto;
    width: 200px;
  }
  .alert_default
  {
    color: black;
    background-color: white;
    border-color: gray;
  }
</style>
</head>
<body>
	<br><br>
	<div class="container">
		<br>
		<h2>hahahaha</h2>
		<br>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
      	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span> notification</a>
      	<ul class="dropdown-menu"></ul>
      	</li>
    </ul>
  </div>
</nav>
<br>
<form method="post" id="notif_form" >
  <div class="form-group">
    <label>Enter Subject</label>
    <input type="text" name="Subject" id="Subject" class="form-control" />
  </div>
  <div class="form-group">
    <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
  </div>
  <div class="form-group">
    <input type="submit" name="post" id="post" class="btn-btn-info" value="post">
  </div>
</form>
          <div id="alert_popover">
            <div class="wrapper">
             <div class="content">
        
             </div>
            </div>
          </div>
	</div>
</body>
</html>
<script>
	$(document).ready(function () {
    function load_last_notifications()
    {
		$.ajax({
        url:"fetch.php",
        method:"POST",
        success: function(data)
        {
          $('.content').html(data);
        }
    })
    }
	})
</script>
