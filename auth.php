<?php
	session_start();
    if(!isset($_SESSION["id"]) || $_SESSION["id"]=="" || !isset($_SESSION["userName"]) || $_SESSION["userName"]==""){
        header('location:login.php');
    }

    $id = $_SESSION['id']; 
?>