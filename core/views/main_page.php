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
            <a href="/main/user_area" class="open_window"><button type="submit" class="btn btn-success">User area</button></a>
            <a href="/main/logout" class="open_window"><button type="submit" class="btn btn-success">Exit</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="jumbotron">
	  <h1>Lorem ipsum dolor.</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iste perspiciatis earum voluptatem ad possimus itaque, eum aspernatur, nostrum dignissimos beatae id in illum accusantium suscipit sunt, aut doloremque odit.</p>
	  <p><a class="btn btn-primary btn-lg" role="button" href="/main/user_area">Login to my account</a></p>
	</div>

</body>
</html>