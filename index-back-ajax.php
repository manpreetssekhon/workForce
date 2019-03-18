<?php

include_once("connection.php");
$uid=$_GET['uid'];
$qry=("select * from users where uid='$uid'");
$table=mysqli_query($conn,$qry);

if(mysqli_num_rows($table)==0)
{
    echo "Available";
    
}
else
echo "UnAvailable";





?>
