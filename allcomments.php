<?php

session_start();
require_once('userclass.php');
require_once('postclass.php');
require_once('commentclass.php');



$c=new Comment();
$c->post_id=$_GET['pid'];
$coments=$c->getpostcomments();
$_SESSION['coms']=$coments;
   header("location:user_data.php");

while ($row=$coments->fetch(PDO::FETCH_ASSOC))
{

          foreach ($row as $key=>$value)
          {
            if($key=="content")
            {
                echo "<p>$value</p>";
            }else if($key=="user_id")
            {

              $usr=new User();
              $usr->id=$value;
              $uname=$usr->get_username();
              while ($ow=$uname->fetch(PDO::FETCH_ASSOC))
              {

                        foreach ($ow as $key=>$value)
                        {
                          if($key=="name")
                          {
                              echo "<p>username: $value</p>";
                          }
                        }
                }

              echo "</p>";
            }

          }
  }


?>
