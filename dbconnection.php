<?php
class db{

 public  $dbname;
  public $host;
  public $dbuser;
  public $upasswd;

 //data source name
public  $dsn;
public  $db_connection ;


  function __construct() {

     $this->dbname="blog";
      $this->host="localhost";
     $this->dbuser="go12";
     $this->upasswd="1234";
    $this->dsn = "mysql:host=$this->host;dbname=$this->dbname";
     $this->db_connection = new PDO($this->dsn, $this->dbuser, $this->upasswd);
     $this->db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




  }



}
?>
