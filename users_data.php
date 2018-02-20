<?php
 session_start();

require_once('userclass.php');
require_once('adminbar.php');

if(!isset($_SESSION['id']))
{
	    header("location:nopage.php");
}

?>
<html>
<head>
<title>Users Data</title>
</head>
<body>
</body>
</html>


<?php
$usr=new User();
$usr->id=$_SESSION['id'];
$log=$usr->getAllUsers();

              echo "<table class='table table-striped'>";
              echo "<thead>
                    <tr>
                    <th scope='col'>User Name</th>
                    <th scope='col'>Email</th>
                    </tr>
                    </thead>";

                $rowid;

		     while($row= $log->fetch(PDO::FETCH_ASSOC))
		     {
               //show users data
		     	echo "<tr>";
               foreach ($row as $key => $value)
                        {
                        	if($key=="user_id")
                        	{
                        		$rowid=$value;
                        	}
                        	else if($key=="psw")
                        	{

                        	}
                        	else
                        	{
                        		echo "<td>$value</td>";
                        	}

			             }

				echo "
				 <td> <a href= edit_user.php?id=$rowid> Edit </a> </td>
				  <td> <a href= delete_user.php?id=$rowid> Delete </a> </td>
				  </td>
				  ";


                echo "</tr>";
		        }

		         echo "</table>";



 ?>
