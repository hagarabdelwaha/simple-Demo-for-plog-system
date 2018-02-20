<?php

session_start();
require_once('userclass.php');
require_once('postclass.php');
require_once('commentclass.php');

$co=new Comment();
$co->uid=$_SESSION['id'];
$co->post_id=$_SESSION['pid'];
$co->content=$_POST['comment'];
$co->Add_comment();

header("location:user_data.php");



?>
