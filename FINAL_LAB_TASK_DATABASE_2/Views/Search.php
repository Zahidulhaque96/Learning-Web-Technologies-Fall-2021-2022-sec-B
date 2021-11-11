<?php 
	include('header.php');
	require_once('../model/dbModel.php');
	$id = $_REQUEST['id'];
	$product = searchProduct($id);
?>

<html>
<head>
	<title> Search Product</title>
