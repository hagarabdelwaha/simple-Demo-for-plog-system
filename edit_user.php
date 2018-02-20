<?php

session_start();
require_once('userclass.php');
require_once('adminbar.php');


if(isset($_SESSION['id']))
{
	   header("location:user_data.php");
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User Data</title>
</head>
<body>
<?php


echo"
<div class='row m-3'>
<div class='col-2'></div>
<div class='col-8'>
<div class='card'>";

if(isset($_GET['id'])&& !empty($_GET['id']))
{
  $usr=new User();
  $usr->id=$_GET['id'];
  $log=$usr->get_user();

    while ($row= $log->fetch(PDO::FETCH_ASSOC))
  {
                echo"<tr>";
              foreach ($row as $key=>$value)
              {
                if($key=="name")
                {
                $name= $value;
                }else if($key=="psw")
                {
                    $pass= $value;
                }
                else if($key=="email")
                {
                      $email=  $value;

                }

              }
   }


}


?>


 <form id="f1"  class="appnitro"  method="post" action="chk_edit_user.php" enctype="multipart/form-data">
 <input type="hidden" name="id" value="<?php if(isset($_GET['row'])){echo $_GET['row'];}elseif(isset($_GET['id'])){echo $_GET['id'];} ?>" />
    <tr>
        <td><label>User Name</label></td>
        <td>
              <input  name="username" class="element text large" type="text" maxlength="255"
                        value=" <?php if(isset($_GET['uname'])){echo $_GET['uname'];}else{ echo $name;}?> " required/>
        </td>
        <br>
    </tr>
    <tr>
        <td><label>Password</label></td>
        <td>

            <input  name="password" class="element text large" type="password" maxlength="255"
                    value=" <?php if(isset($_GET['pass'])){echo $_GET['pass'];}else{ echo $pass;}?> " required/>

        </td>
        <br>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <input  name="email" class="element text large" type="text" maxlength="255"
                        value=" <?php if(isset($_GET['mail'])){echo $_GET['mail'];}else{echo $email;}?> " required/>
        </td>
        <br>
    </tr>

    <!-- <tr>
        <td>Upload Photo</td>
        <td><input  name="userphoto"  type="file" id="fileToUpload" /></td>
    </tr> -->
    <tr>
        <td><input id="saveForm" class='btn btn-primary' type="submit" name="submit" value="Edit" /></td>
        <br>
        <!-- <td><input id="resetForm" class="button_text" type="reset" name="reset" value="Reset" /></td> -->
    </tr>
</table>

<?php

echo'
  </div>
  </div>
	<div class="col-2"></div>
	</div>
';

?>
</form>
</body>
</html>
