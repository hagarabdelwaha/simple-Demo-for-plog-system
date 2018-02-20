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


$_SESSION['pid']=$_GET['pid'];
$pst=new Post();
$pst->uid=$_SESSION['id'];

$pst->post_id=$_GET['pid'];
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
              echo'  <div class="card-body">';

                echo "<h6  class='card-text'>$value</h6>";
                echo'

              </div>';
            }else if($key=="date")
            {
              echo'  <div class="card-body">';

                echo "<p  class='card-text'>$value</p>";
                echo'</div>';
            }

          }
    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>


</head>
<body id="main_body" >
  <form action="ckccomment.php" method="post">
    <div>
<input type="text" name="comment" />
</div>
<input class='btn btn-primary' type="submit" name="addcom"/>

</form>
</body>
</html>
<?php

echo'
  </div>
  </div>
	<div class="col-2"></div>
	</div>
';
  ?>
