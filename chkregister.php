<?php

session_start();
require_once('userclass.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

$flag=false;


if(!empty($_POST['username']))
{
	//echo $_POST['username']."<br>";
}else
{
	$add="username Is Required"."<br>";
	$flag=true;
	//echo "username Is Required"."<br>";
}


if(!empty($_POST['password']))
{
	//echo $_POST['password']."<br>";
}else
{
	$add="password Is Required"."<br>";
	$flag=true;
	//echo "password Is Required"."<br>";
}


if(!empty($_POST['email']))
{

   $email_filter="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
   if(!preg_match($email_filter,$_POST['email']))
   {
     $ematch="Email Not Falied";
     $flag=true;
   }

}else
{
	$mailerror="Mail is Required "."<br>";
	$flag=true;
}


//upload user photo

if(!is_uploaded_file($_FILES['userphoto']['tmp_name']))
{
  $flag=true;
	$imgerror="Upload your photo";
}

$usr=new User();
$usr->name=trim($_POST['username']);
$count=$usr->chkusername();

if($count >0)
{
$flag=true;
$nf="User Name Not falid ,Please choose another name";
}

$username=trim($_POST['username']);
//encrypt passwd by
$upassword=$_POST['password'];
$enc_pass=sha1($_POST['password']);

$mail=trim($_POST['email']);
$uimg=$_FILES['userphoto']['name'];



if($flag)
{
$error_msg=$add."</br>".$capr."</br>".$capn."</br>".$imgerror."</br>".$mailerror."</br>".$nf."<br>".$ematch;

  header("location:register.php?errors=$error_msg&uname=$username&upass=$upassword&mail=$mail");
	exit;
}else
{
  $imgs_path='users_img/'.$_FILES['userphoto']['name'];
   move_uploaded_file($_FILES['userphoto']['tmp_name'], $imgs_path);

  $usr=new User();
  $usr->name=trim($_POST['username']);
  $usr->password=$enc_pass;
  $usr->email=trim($_POST['email']);
  $usr->img=$imgs_path;
  $log=$usr->register();

 header("location:login.php");

}
?>
</body>
</html>
