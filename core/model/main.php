<?php 
	function connectToDb(){
		$config = require 'core/config/db.php';

		$link = mysqli_connect($config['host'], $config['user'], $config['password'], $config['db_name']);
		if(!$link){
			echo 'Database connect error';
			die();
		}
		return $link;
	}

	function selectData($sql){
		$link = connectToDb();
		$res = mysqli_query($link, $sql);

		if(!$res){
			die(mysqli_error($link));
		}
		for($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

		return $data;
	}

	function insertUpdateDelete($sql){
		$link = connectToDb();
		$res = mysqli_query($link, $sql);

		if(!$res){
			die(mysqli_error($link));
		}

		return $res;
	}
?>