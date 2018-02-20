<?php
 session_start();


 require_once('userclass.php');
 require_once('postclass.php');
 require_once('commentclass.php');
 require_once('navbar.php');

 if(!isset($_SESSION['id']))
 {
 	    header("location:nopage.php");
 }
 // $i=$_SESSION['img'];

//echo "<a href='logout.php'>Logout</a>";
//echo "<a href='addpost.php'>Add post</a>";
//echo "<img src='$i' width='50' height='50'/> ";
//
//
// $usr=new User();
// $usr->id=$_SESSION['id'];
// $log=$usr->get_user();
// echo"<h2>Welcome :".$_SESSION['username']."</h2>";
//
//
// echo "<table border=1>";
//   echo "<tr>
//
//     <td>User Name</td>
//     <td>Email</td>
//     <td>User Photo</td>
//
//
//
//     </tr>";
//
//   while ($row= $log->fetch(PDO::FETCH_ASSOC))
// {
//               echo"<tr>";
//             foreach ($row as $key=>$value)
//             {
//               if($key=="user_id")
//               {
//
//               }else if($key=="psw")
//               {
//
//               }else if($key=="imgpath")
//               {
//                   echo "<td> <img src='$value' width='50' height='50'/>  </td>";
//               }
//               else
//               {
//                 echo "<td>$value</td>";
//               }
//
//
//             }
//
//     echo"</tr>";
//  }
//
//  echo "</table>";



//************************************************************
$pst=new Post();
$pst->uid=$_SESSION['id'];
$uposts=$pst->getAllposts();

// print_r($uposts);

echo"
<div class='row m-3'>
<div class='col-2'></div>
<div class='col-8'>
<div class='card'>";

while ($row=$uposts->fetch(PDO::FETCH_ASSOC))
{

          foreach ($row as $key=>$value)
          {
            if($key=="content")
            {
          		echo ' <div class="card-header">';
              echo "<h3  class='card-text'>$value</h3>";
              echo' </div>';


            }else if($key=="date")
            {

                  echo'  <div class="card-body">';

                    echo "<p  class='card-text'>$value</p>";
                    echo'</div>';



            }else if($key=="post_id"){

               $postid=$value;

                echo" <div class='card-body'> <a class='btn btn-primary' href= addcomment.php?pid=$value> Add Comment </a> </div>";

                //  if($UN==$_SESSION['username'])
                //  {
                // echo" <div class='card-body'> <a class='btn btn-primary' href= editcomment.php?pid=$postid> Edit Comment </a> </div>";
                //  }

                $c=new Comment();
                $c->post_id=$value;
                $coments=$c->getpostcomments();

                while ($row=$coments->fetch(PDO::FETCH_ASSOC))
                {

                          foreach ($row as $key=>$value)
                          {
                            if($key=="content")
                            {

                              echo'  <div class="card-body">';

                                echo "<h6  class='card-text'>$value</h6>";
                                echo'

                              </div>';

                             //  if($UN==$_SESSION['username'])
                             //  {
                             // echo" <div class='card-body'> <a class='btn btn-primary' href= editcomment.php?pid=$postid> Edit Comment </a> </div>";
                             //  }

                            }
                            else if($key=="user_id")
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
                                            //$UN=$value;
                                            echo'  <div class="card-body">';

                                              echo "<h5 class='card-text'>username: $value</h5>";
                                              echo'

                                            </div>';



                                          }
                                        }
                                }

                              echo "</p>";
                            }

                          }
                  }



            }

          }


}

echo'
  </div>
  </div>
	<div class="col-2"></div>
	</div>
';
 ?>
