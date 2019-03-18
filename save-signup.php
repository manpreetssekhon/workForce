<?php
include_once("connection.php");

$uid=$_GET['uid'];
$pwd=$_GET['pwd'];
$mobile=$_GET['mobile'];
$type=$_GET['type'];

$qry="insert into users (uid,pwd,mobile,type) values('$uid','$pwd','$mobile','$type')";

mysqli_query($conn,$qry);

 if(mysqli_error($conn)=="")
    {
        echo "Saved successfuly";
    }
    else
        echo mysqli_error($conn);
    




?>