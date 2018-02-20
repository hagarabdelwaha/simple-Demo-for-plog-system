<?php

require_once('dbconnection.php');

class Post extends db
{

  function __construct() {
         db::__construct();
       }

 public $post_id;
 public $uid;
 public $content;


//********************************

 // public function Edit_post()
 // {
 //
 // 	 $dbname="Cafeteria";
 //    $host="localhost";
 //    $dbuser="go12";
 //    $upasswd="1234";
 //
 //  //data source name
 //   $dsn = "mysql:host=$host;dbname=$dbname";
 //   $db_connection = new PDO($dsn, $dbuser, $upasswd);
 //   $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //   $query="update post set  content=? where id=?";
 //   $edit_statm=$db_connection->prepare($query);
 //   $edit_parameters=[$this->name,$this->id];
 //   $edit_statm->execute($edit_parameters);
 //    return $edit_statm->rowcount();
 //
 // }

 public function Add_post()
 {

  //   $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  //
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="insert into posts (content,user_id) values (?,?)";
   $edit_statm=$this->db_connection->prepare($query);
   $edit_parameters=[$this->content,$this->uid];
   $edit_statm->execute($edit_parameters);
    return $edit_statm->rowcount();

 }


 public function Delete_post()
 {

  //   $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  //
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="delete from posts where user_id = ? and post_id = ?";
   $edit_statm=$this->db_connection->prepare($query);
   $edit_parameters=[$this->uid,$this->post_id];
   $edit_statm->execute($edit_parameters);
    return $edit_statm->rowcount();

 }




public function getAllposts()
{

  //  $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $param=[$this->uid];
   $query="select content,date,post_id from posts ";
   $select_product=$this->db_connection->prepare($query);
    $select_product->execute();
    return $select_product;


}
//
// public function delete_post()
// {
//
//   $dbname="blog";
//     $host="localhost";
//     $dbuser="go12";
//     $upasswd="1234";
//
//   //data source name
//    $dsn = "mysql:host=$host;dbname=$dbname";
//    $db_connection = new PDO($dsn, $dbuser, $upasswd);
//    $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $query="delete  from post where id= ?";
//    $param=[$this->uid];
//    $usr=$db_connection->prepare($query);
//     $usr->execute($param);
//     return $usr->rowcount();
//
// }



public function get_post()
{
  //
  // $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $param=[$this->uid];
   $query="select content,date,post_id from posts where user_id = ? ";
   $select_product=$this->db_connection->prepare($query);
    $param=[$this->uid];
    $select_product->execute($param);
    return $select_product;
}


public function get_postid()
{

  // $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $param=[$this->uid];
   $query="select content,date,post_id from posts where user_id = ? ";
   $select_product=$this->db_connection->prepare($query);
    $param=[$this->uid];
    $select_product->execute($param);
    return $select_product;
}


}

?>
