<?php
    include_once("connection.php");

    $city=$_GET["city"];
    $category=$_GET["category"];
    
    $table=mysqli_query($conn,"select * from worker where city='$city' and category='$category'");
    
    $ary=array();//creating array for storing row

    while($row=mysqli_fetch_array($table))
    {
        $ary[]=$row;
    }

    echo json_encode($ary);




    
?>