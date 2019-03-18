<?php
    include_once("connection.php");

    
    
    $table=mysqli_query($conn,"select distinct category from worker");
    
    $ary=array();//creating array for storing row

    while($row=mysqli_fetch_array($table))
    {
        $ary[]=$row;
    }

    echo json_encode($ary);




    
?>