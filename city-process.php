<?php
include_once("connection.php");

$table=mysqli_query($conn,"select city from worker");//one or 0 possibilites
    
    $ary=array();//creating array for storing row

    while($row=mysqli_fetch_array($table))
    {
        $ary[]=$row;
    }

    echo json_encode($ary);




?>