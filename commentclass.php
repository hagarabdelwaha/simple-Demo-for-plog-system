<?php
require_once('dbconnection.php');

class Comment extends db
{

 public $cid;
 public $uid;
 public $content;
 public $post_id;

 function __construct() {
        db::__construct();
      }

//********************************

 public function Add_comment()
 {
  //
  // $dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  //
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="insert into comments (content,user_id,post_id) value(?,?,?)";
   $edit_statm=$this->db_connection->prepare($query);
   $edit_parameters=[$this->content,$this->uid,$this->post_id];
   $edit_statm->execute($edit_parameters);
    return $edit_statm->rowcount();

 }

 public function Edit_comment()
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
   $query="update  comments set content=? where user_id=? and post_id=? ";
   $edit_statm=$this->db_connection->prepare($query);
   $edit_parameters=[$this->content,$this->uid,$this->post_id];
   $edit_statm->execute($edit_parameters);
    return $edit_statm->rowcount();

 }


public function getpostcomments()
{

  // 	$dbname="blog";
  //   $host="localhost";
  //   $dbuser="go12";
  //   $upasswd="1234";
  //
  // //data source name
  //  $dsn = "mysql:host=$host;dbname=$dbname";
  //  $db_connection = new PDO($dsn, $dbuser, $upasswd);
  //  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query="select user_id,content,comment_id from comments where  post_id=?";
   $edit_statm=$this->db_connection->prepare($query);
   $edit_parameters=[$this->post_id];
   $edit_statm->execute($edit_parameters);
  return $edit_statm;

}


public function delete_comment()
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
   $query="delete  from comment where id= ?";
   $param=[$this->uid];
   $usr=$this->db_connection->prepare($query);
    $usr->execute($param);
    return $usr->rowcount();

}

}

?>
