<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../../styles/main.css">
	<link rel="stylesheet" href="../../styles/bootstrap.min.css">
	<link rel="stylesheet" href="../../styles/bootstrap-theme.min.css">
	<script src="../../js/jquery-3.2.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right">
            <a href="/main/main_page" class="open_window"><button type="submit" class="btn btn-success">Main window</button></a>
            <a href="/main/logout" class="open_window"><button type="submit" class="btn btn-success">Exit</button></a>
          </div>
        </div>
      </div>
    </div>
	<h1 class="user__welcome">Welcome!</h1>
	<div class="user__content">
		<div class="user__content_img">qewd</div>	
		<div class="user__content_data">
			<p class="user__data"><b>Name: </b><?php echo $_SESSION['name']; ?></p>
			<p class="user__data"><b>Surname: </b><?php echo $_SESSION['surname']; ?></p>
			<p class="user__data"><b>Middlename: </b><?php echo $_SESSION['middlename']; ?></p>
			<p class="user__data"><b>Email: </b><?php echo $_SESSION['email']; ?></p>
			<p class="user__data_title"><b>Title: </b><?php echo $_SESSION['description']; ?></p>
		</div>
	</div>
</body>
</html>