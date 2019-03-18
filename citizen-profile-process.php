<?php
include_once("connection.php");

$btn=$_GET["btn"];


if($btn=="Save")
{
    doSave($conn);
}

    else
    
    {
       doupdate($conn); 
    }



function doupdate($conn){
    
    $uid=$_GET['uid'];
$name=$_GET['name'];
$mobile=$_GET['mobile'];
$email=$_GET['email'];
$address=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$pincode=$_GET['pincode'];

$qry="update citizen set uid='$uid', name='$name', mobile='$mobile', address='$address', email='$email', city='$city', state='$state', pincode='$pincode' where uid='$uid'";  

mysqli_query($conn,$qry);

 if(mysqli_error($conn)=="")
    {
        echo "Your data successfuly updated";
    }
    else
        echo mysqli_error($conn);
       
    
}

function doSave($conn)
{
   


$uid=$_GET['uid'];
$name=$_GET['name'];
$mobile=$_GET['mobile'];
$email=$_GET['email'];
$address=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$pincode=$_GET['pincode'];

$qry="insert into citizen (uid,name,mobile,email,address,city,state,pincode) values('$uid','$name','$mobile','$email','$address','$city','$state','$pincode')";

mysqli_query($conn,$qry);

 if(mysqli_error($conn)=="")
    {
        echo "You are successfuly Registered";
    }
    else
        echo mysqli_error($conn);
    


}


?>