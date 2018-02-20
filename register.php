<?php

session_start();
require_once('userclass.php');



?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body id="main_body" >

	<div id="formcontainer" class="container">
		<div class="row">


<div class="col-4">

</div>

	<div class="col-4">
		<h2 class="form-login-heading"> Registeration Form</h2>
		<form   method="post" action="chkregister.php" enctype="multipart/form-data">

					<label for="inputUsernamel">User Name</label>
					<div>
						<input class="form-control"  name="username" class="element text large" type="text" maxlength="255"
						value="<?php if(isset($_GET['uname'])) echo $_GET['uname'];?>" required />
					</div>

					<label for="inputPassword" >Password</label>
					<div>
						<input  class="form-control" name="password" class="element text large" type="password" maxlength="255"
						value="<?php if(isset($_GET['upass'])) echo $_GET['upass'];?>" required />
					</div>


          <label for="inputEmail" for="element_2">Email </label>
					<div>
						<input class="form-control"  name="email" class="element text large" type="text" maxlength="255"
						value="<?php if(isset($_GET['mail'])) echo $_GET['mail'];?>" required/>
					</div>




                 <label> Uplode Your Photo </label>
					<div>
						<input class="form-control" name="userphoto"  type="file" id="fileToUpload" required />
						<!--<input type="submit" value="sendfile">-->
					</div>

      <label class="description" name="error" id ="error"  style="color:red ">
           <?php
                    if(!empty($_GET['errors']))
                    {
                      echo "<label>".$_GET['errors'];
					          }

				?>
       </label>
			 <div class="col-4">
			    	<input  class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit" />
			    	<input  class="btn btn-lg btn-primary btn-block" type="reset" name="reset" value="Reset" />
</div>

			</ul>


		</form>
	</div>

	<div class="col-4">

	</div>




	</div>
</div>

	<!--<script src="js/form.js"></script>-->
	</body>
</html>
