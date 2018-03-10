<?php 
session_start();
define("BASE_URL", "http://localhost/Tong-Sampah");

function cek_login(){
	if($_SESSION['id'] == ""){
		header("Location: ".BASE_URL. "/login.php");
	}
}