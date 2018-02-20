<?php

session_start();
require_once('userclass.php');



if(isset($_GET['id'])&& !empty($_GET['id']))
{
  $usr=new User();
  $usr->id=$_GET['id'];
   $afeted_row=$usr->delete_user();
   if($afeted_row>0)
   {
     $msg="User Deleted successfully";
    header("location:users_data.php?msg=$msg");
   }

}else
{
  header("location:users_data.php");
}



?>
