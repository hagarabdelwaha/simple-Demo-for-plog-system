<?php

session_start();
require_once('userclass.php');



?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User Data</title>
</head>
<body>
<?php


 echo"<h2>Welcome :".$_SESSION['username']."</h2>";

if(isset($_GET['id'])&& !empty($_GET['id']))
{
  $usr=new User();
  $usr->id=$_GET['id'];
  $log=$usr->get_user();

    // if(isset($_GET['row']))
    // {
    //     $param=[$_GET['row']];
    // }elseif (isset($_GET['row'])) {
    //     $param=$_GET['uid'];
    //
    // }
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
                }else if($key=="user_id")
                {
                      $user_id=  $value;
                }

              }
   }


}


?>


 <form id="f1"  class="appnitro"  method="post" action="chk_edit_user.php" enctype="multipart/form-data">
<li> <input type="hidden" name="id" value="<?php echo $user_id; ?>" /> </li>
    <tr>
        <td><label>User Name</label></td>
        <td>
              <input  name="username" class="element text large" type="text" maxlength="255"
                        value=" <?php if(isset($_GET['uname'])){echo $_GET['uname'];}else{ echo $name;}?> "  />
        </td>
        <br>
    </tr>
    <tr>
        <td><label>Password</label></td>
        <td>

            <input  name="password" class="element text large" type="password" maxlength="255"
                        value="<?php if(isset($_GET['upass'])){echo $_GET['upass'];}else{echo $pass;}?>" required/>

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
		<tr> <td><label style="color: red"> <?php if(isset($_GET['msg'])) echo $_GET['msg'];?>

												<?php if(isset($_GET['enter'])) echo $_GET['enter'];?>
		</label>
</td>
	</tr>
    <!-- <tr>
        <td>Upload Photo</td>
        <td><input  name="userphoto"  type="file" id="fileToUpload" /></td>
    </tr> -->
    <tr>
        <td><input id="saveForm" class="button_text" type="submit" name="submit" value="Edit" /></td>
        <br>
        <!-- <td><input id="resetForm" class="button_text" type="reset" name="reset" value="Reset" /></td> -->
    </tr>
</table>

</form>
</body>
</html>
