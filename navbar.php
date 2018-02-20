
<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
      <li class="nav-item active">
				<a class="navbar-brand" href="user_data.php">Home</a>
			</li>
	      <li class="nav-item active">
	        <a class="navbar-brand" href="addpost.php">Add Post <span class="sr-only">(current)</span></a>
	      </li>

				<li class="nav-item active">
	        <img src="<?php echo $_SESSION['img']; ?>" width='50' height='50'/>
				</li>
				<li class="nav-item active">
        <a class="navbar-brand" href="userprofile.php"> <?php echo $_SESSION['username']; ?> </a>
	      </li>
				<li class="nav-item">
				 <a class="navbar-brand" href="logout.php">Logout</a>
			 </li>
			 <li class="nav-item">
				<a class="navbar-brand" href="  editmyprofile.php">Edit Profile</a>
			</li>



	    </ul>
	  </div>
	</nav>
</body>
</html>
