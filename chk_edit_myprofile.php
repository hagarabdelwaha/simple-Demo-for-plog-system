<?php

session_start();
require_once('userclass.php');



?>
<!DOCTYPE html>
<html>
    <title></title>
</head>
<body>

<?php

//$_POST['username'])&&
if(!empty($_POST['username'])&&!empty($_POST['email'])&&$_POST['password'])
{
  $usr=new User();
  $usr->id=$_SESSION['id'];
  $usr->name=trim($_POST['username']);
  $usr->password=sha1($_POST['password']);
  $usr->email=trim($_POST['email']);
  $log=$usr->Edit_user();

 // $msg="User Updated successfully";
 // print_r($usr);
header("location:user_data.php");

}
else{
$username=$_POST['username'];
$mail=$_POST['email'];
$id=$_POST['id'];
 // $error_msg.=$fn."</br>".$ln."</br>".$add."</br>".$con."</br>".$gen."</br>".$sk."</br>".$capr."</br>".$capn."</br>".$imgerror."</br>".$mailerror."</br>";
$error_msg="data is required";
  header("location:editmyprofile.php?errors=$error_msg&uname=$username&mail=$mail");
    exit;

}

?>

</body>
</html>
