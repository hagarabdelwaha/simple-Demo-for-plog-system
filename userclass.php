<?php
require_once('dbconnection.php');
class User extends db
{

 public $id;
 public $name;
 public $email;
 public $password;
 public $img;

 function __construct() {
        db::__construct();
      }

//********************************

 public function Edit_User()
 {

 	//  $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  //
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="update users set  name=?,email=?,psw=? where user_id=?";
   $edit_statm=$this->db_connection->prepare($query);
   $edit_parameters=[$this->name,$this->email,$this->password,$this->id];
   $edit_statm->execute($edit_parameters);
    return $edit_statm->rowcount();

 }





public function getAllUsers()
{

  //  $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  //
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="select user_id,name,email  from  users ";
   $users=$this->db_connection->prepare($query);
   $users->execute();
  return $users;


}


public function delete_user()
{

  // $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  //
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="delete  from users where user_id= ?";
   $param=[$this->id];
   $usr=$this->db_connection->prepare($query);
    $usr->execute($param);
    return $usr->rowcount();

}



public function get_user()
{

  // $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="select * from  users where user_id = ? ";
    $param=[$this->id];
   $select_product=$this->db_connection->prepare($query);
    $select_product->execute($param);
  return $select_product;
}


public function get_username()
{

  // $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="select name from  users where user_id = ? ";
    $param=[$this->id];
   $select_product=$this->db_connection->prepare($query);
    $select_product->execute($param);
  return $select_product;
}

public function chkusername()
{

  // $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="select * from  users where name = ? ";
    $param=[$this->name];
   $select_product=$this->db_connection->prepare($query);
    $select_product->execute($param);
  return $select_product->rowcount();
}

// public function get_posts()
// {
//   $dbname="blog";
//     $host="localhost";
//     $dbuser="go12";
//     $upasswd="1234";
//
//   //data source name
//    $dsn = "mysql:host=$host;dbname=$dbname";
//    $db_connection = new PDO($dsn, $dbuser, $upasswd);
//    $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $query="select * from post where uid = ?";
//    $param=[$this->id];
//    $select_posts=$this->db_connection->prepare($query);
//     $select_posts->execute();
//   return $select_posts;
//
// }

public function login()
{

 //  $dbname="blog";
 //   $host="localhost";
 //   $dbuser="go12";
 //   $upasswd="1234";
 //
 // //data source name
 //  $dsn = "mysql:host=$host;dbname=$dbname";
 //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
 //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query="select * from users where name=? and psw=? " ;
  $edit_statm=$this->db_connection->prepare($query);
  $edit_parameters=[$this->name,$this->password];
  $edit_statm->execute($edit_parameters);
   return $edit_statm;

}

public function register()
{
 //
 //  $dbname="blog";
 //   $host="localhost";
 //   $dbuser="go12";
 //   $upasswd="1234";
 //
 // //data source name
 //  $dsn = "mysql:host=$host;dbname=$dbname";
 //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
 //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query="insert into users (name,email,psw,imgpath) value(?,?,?,?)";
  $edit_statm=$this->db_connection->prepare($query);
  $edit_parameters=[$this->name,$this->email,$this->password,$this->img];
  $edit_statm->execute($edit_parameters);
   return $edit_statm->rowcount();

}





}

?>
