<?php

session_start();
require_once('postclass.php');


if(isset($_GET['pid'])&& !empty($_GET['pid']))
{
  $pst=new Post();
  $pst->id=$_GET['pid'];
  $pst->post_id=$_SESSION['id'];
   $afeted_row=$pst->Delete_post();
   
   if($afeted_row>0)
   {
     $msg="post Deleted successfully";
    header("location:user_data.php?msg=$msg");
   }

}else
{
  header("location:user_data.php");
}



?>
