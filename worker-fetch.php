<?php
    include_once("connection.php");

    $uid=$_GET["user"];
    
    $table=mysqli_query($conn,"select * from worker where uid='$uid'");//one or 0 possibilites
    
    $ary=array();//creating array for storing row

    while($row=mysqli_fetch_array($table))
    {
        $ary[]=$row;
    }

    echo json_encode($ary);
?>