<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/bootstrap-theme.min.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body id="test">
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
          <div class="navbar-form navbar-right" role="form">
            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Sing In</button>
          </div>
        </div>
      </div>
    </div>
	<div class="jumbotron">
	  <h1>Lorem ipsum dolor.</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iste perspiciatis earum voluptatem ad possimus itaque, eum aspernatur, nostrum dignissimos beatae id in illum accusantium suscipit sunt, aut doloremque odit.</p>
	  <p><a class="btn btn-primary btn-lg" role="button" href="/main/user_area">Login to my account</a></p>
	</div>
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	    	<span class="modal-text">Введите ваш логин и пароль</span>
	      <form name="autorization" id="form-auto" action="" method="POST">
	      	<div class="error-text"></div>
			<input type="text" name="login" id="login" class="form-control" value="<?php if(isset($_REQUEST['login'])) echo $_REQUEST['login'];?>" placeholder="Login">
			<input type="password" name="password" id="password" class="form-control" placeholder="Password">
			<button class="btn btn-success" id="submit" onclick="clickSum()">Submit</button>
		</form>
	    </div>
	  </div>
	</div>
	<script src="js/main.js"></script>
	<script>
		$(document).ready(function(){
	        $('#submit').click(function(event){
	        	event.preventDefault();
	            var login = $('#login');
	            var password = $('#password');
	            var fail = 'Данные некорректны!';

	            if(validInput(login) || validInput(password)){
	            	outputError();
	            }

	            $.ajax({
	            	url: '../../ajax.php',
	            	data: {'login': login.val(), 'password': password.val()},
	            	success: function(data){
	            		if(data){
	            			$('#test').html(data);	
	            		}else{
	            			outputError();
	            		}
	            	}
	            });

	            function outputError(){
		        	login.css("outline","red solid 1px");
		        	password.css("outline","red solid 1px");
		        	$('.error-text').html(fail);
		        }

		        function validInput(value){
		        	if(value.val() == ''){
		        		outputError();
		        		return true;
		        	}
		        	return false;
		        }
	        });
	    });
	</script>
</body>
</html>