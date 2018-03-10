<?php 
session_start();
$id=$_SESSION['id'];

define("BASE_URL", "http://localhost/TongSampah");

function cek_login(){
	if($_SESSION['id'] == ""){
		header("Location: ".BASE_URL. "/");
	}
}
