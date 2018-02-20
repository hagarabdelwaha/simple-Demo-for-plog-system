<?php

session_start();
require_once('userclass.php');
require_once('postclass.php');
require_once('navbar.php');
if(!isset($_SESSION['id']))
{
	    header("location:nopage.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Add Post</title>


</head>
<body id="main_body" >
  <form action="insertpost.php" method="post">
<div>
	<div class='row m-3'>
	<div class='col-2'></div>
	<div class='col-8'>
	<div class='card'>

  <textarea class="card-header" name='postcontent' rows="6" cols="50" >
  <?php if(isset($_GET['post'])) echo $_GET['address'];?>
</textarea>
</div>

<input class='btn btn-primary' type="submit" name="addpost"/>
</div>
</div>
<div class="col-2"></div>
</div>

</form>
</body>
</html
