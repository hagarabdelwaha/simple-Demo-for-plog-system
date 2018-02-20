<?php
 session_start();
require_once('userclass.php');

 ?>


 <html>
 <head>
 	<title> chklogin</title>
 </head>
 <body>

 <?php

 if(!empty($_POST['username']) && !empty($_POST['password']))
 {
     $uname=$_POST['username'];
     $upass=$_POST['password'];


 }elseif (!empty($_POST['username']))
 {
 	$usname=$_POST['username'];
 	$pmsg="please enter your password ";
     header("location:login.php?username=$usname&msg=$pmsg");
 }else
 {

 	$enup="Please Enter poth Your name and your password";
 	header("location:login.php?enter=$enup");
 }


 //////////////////////////////

   if(!empty($uname) && !empty($upass))
   {

 			 //$enc_pas=sha1($upass);
 			 $flagname=false;
 			 $flagpass=false;


        $usr=new User();
        $usr->name=$_POST['username'];
        $usr->password=sha1($_POST['password']);
        $log=$usr->login();

 			     while ($row= $log->fetch(PDO::FETCH_ASSOC))
 			      {

                         foreach ($row as $key=>$value)
                         {
                         	  if($key=="user_id")
 	                        	{
 	                        		$uid=$value;
 	                        	}else if($key=="imgpath")
                            {
                                $img=$value;
                            }
                         }

 			       }


 			     if(!empty($uid))
 			     {

 				     	 $flagname=true;
 				         $flagpass=true;

 				        if($uname=="Admin")
 		                  {
 		                 	 $_SESSION['username']=$uname;
 		                 	 $_SESSION['id']=$uid;
                       $_SESSION['img']=$img;

 		                     header("location:users_data.php");
 		                  }
 		                 else
 		                 {


 		                      $_SESSION['username']=$uname;
 		     			            $_SESSION['id']=$uid;
                          $_SESSION['img']=$img;

 		     			      header("location:user_data.php");

 		                 }


 			    }else
 			    {
                     $errormsg="You are not user,you must register";
                     header("location:login.php?msg=$errormsg");


 			    }

 }

 ?>
 </body>
 </html>
