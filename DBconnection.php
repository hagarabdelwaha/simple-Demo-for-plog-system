//DBconnection.php
<?php

 $dbname="blog";
  $host="localhost";
  $dbuser="go12";
  $upasswd="1234";

//data source name
 $dsn = "mysql:host=$host;dbname=$dbname";
 $db_connection = new PDO($dsn, $dbuser, $upasswd);
 $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 ?>
