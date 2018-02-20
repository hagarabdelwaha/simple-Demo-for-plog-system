<?php
 session_start();


 require_once('userclass.php');
 require_once('postclass.php');
 require_once('commentclass.php');
 require_once('navbar.php');


 $i=$_SESSION['img'];

$pst=new Post();
$pst->uid=$_SESSION['id'];
$uposts=$pst->get_postid();

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

              echo" <div class='card-body'> <a class='btn btn-primary' href= addcomment.php?pid=$value> Add Comment </a> </div>";

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
