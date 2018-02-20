<?php

session_start();
require_once('userclass.php');
require_once('postclass.php');


if(!empty($_POST['postcontent']))
{
  $pst=new Post();
  $pst->uid=$_SESSION['id'];
  $pst->content=$_POST['postcontent'];
  $pst->Add_post();

}

 header("location:user_data.php");

?>
