<?php
include_once("connection.php");

session_start();

$uid=$_GET['uid'];
$pwd=$_GET['pwd'];
$type=$_GET['type'];

$qry= "select * from users where uid='$uid' and pwd='$pwd' and type='$type'";

$table=mysqli_query($conn,$qry);

 if(mysqli_num_rows($table)==0)
    {
        echo "invalid user".mysqli_error($conn);
    }
    else{
        $_SESSION["uid"]=$uid;
        echo "login successfully";
    }






?>