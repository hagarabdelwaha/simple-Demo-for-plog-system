<?php
session_start();

if(isset($_SESSION['id']))
{
	   header("location:user_data.php");
}


?>

<!DOCTYPE html>
<head>

	<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body id="main_body" >

	<!-- <div id="form_container">
		<h1><a>Login Form</a></h1>

		<form id="f1"  class="appnitro"  method="post" action="chklogin.php">
			<ul >
				<li id="li_1" >
					<label class="description" for="element_1">User Name </label>
					<div>
						<input id="element_1" name="username" class="element text large" type="text" maxlength="255"
						value="<?php if(isset($_GET['username'])) echo $_GET['username']; ?>"/>
					</div>
				</li>
				<li id="li_2" >
					<label class="description" for="element_2"> Password </label>
					<div>
						<input id="element_2" name="password" class="element text large" type="Password" maxlength="255" />
					</div>
				</li>
				<li> <label style="color: red"> <?php if(isset($_GET['msg'])) echo $_GET['msg'];?>

                            <?php if(isset($_GET['enter'])) echo $_GET['enter'];?>
				</label>  </li>
				<li class="buttons">
			    	<input id="saveForm" class="button_text" type="submit" name="btn_Login" value="Login"  />
			    	<a href="register.php">Register</a>

				</li>




			</ul>


		</form>
		<div id="footer">
		</div>
	</div> -->
	<!--<script src="js/form.js"></script>-->

	<div id="formcontainer" class="container">
		<div class="row">


<div class="col-4">

</div>

<div class="col-4">
	<form class="form-login"    method="post" action="chklogin.php">
		<h2 class="form-login-heading"> Log in</h2>

		<label for="inputEmail" class="sr-only">User Name</label>
		<input class="form-control" name="username"  type="text" maxlength="255"
		value="<?php if(isset($_GET['username'])) echo $_GET['username']; ?>" required autofocus>

		<label for="inputPassword" class="sr-only">Password</label>
		<input class="form-control" name="password"  type="Password" maxlength="255" required>

		 <div >
			 <label style="color: red"> <?php if(isset($_GET['msg'])) echo $_GET['msg'];?>

													<?php if(isset($_GET['enter'])) echo $_GET['enter'];?>
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_Login" value="Login" >Log in</button>
		<a href="register.php">Register</a>
	</form>
</div>

<div class="col-4">

</div>

</div>
	</div> <!-- /container -->




	</body>





</html>
