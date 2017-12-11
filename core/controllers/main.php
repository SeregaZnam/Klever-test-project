<?php 
	function action_index(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if(!empty($_REQUEST['login']) and !empty($_REQUEST['password'])){
				$login = strip_tags($_REQUEST['login']);
				$password = strip_tags($_REQUEST['password']);
				$query = "SELECT * FROM users WHERE login = '".$login."' AND password = '".md5($password)."'";
				$data = selectData($query);

				if(
					$data[0]['login'] == $_REQUEST['login'] and
					$data[0]['password'] == md5($_REQUEST['password'])
				){
					session_start();
					$user_data = explode(' ', $data[0]['FIO']);
					$_SESSION['surname'] = $user_data[0];
					$_SESSION['name'] = $user_data[1];
					$_SESSION['middlename'] = $user_data[2];
					$_SESSION['description'] = $data[0]['description'];
					$_SESSION['email'] = $data[0]['email'];
					$_SESSION['id_session'] = $data[0]['id_session'];

					include 'core/views/user_area.php';
				}else{
					include 'core/views/autorization.php';
				}
			}
		}else{
			include 'core/views/autorization.php';
		}
	}

	function action_autorization(){
		header('Location: /');
	}

	function action_user_area(){
		session_start();
		if(!empty($_SESSION['id_session'])){
			include 'core/views/user_area.php';	
		}else{
			header('Location: /');
		}
	}

	function action_main_page() {
		include 'core/views/main_page.php';
	}

	function action_logout(){
		session_start();
    	session_destroy();
    	header("Location: /");
	}
?>