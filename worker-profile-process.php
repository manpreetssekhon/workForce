<?php
include_once("connection.php");

$btn=$_POST["btn"];


if($btn=="Save")
{
    doSave($conn);
}

    else
    
    {
       doupdate($conn); 
    }  



function doUpdate($conn)
{
$uid=$_POST['uid'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$category=$_POST['category'];    
$experience=$_POST['experience'];    
$age=$_POST['age'];    
$city=$_POST['city'];
$country=$_POST['country'];
$addhar=$_POST['addhar'];
$qualification=$_POST['qualification'];
$other=$_POST['other'];
    
    
    
    $orgnamepic=$_FILES["pic"]["name"];
    $tmpnamepic=$_FILES["pic"]["tmp_name"];
    $orgnameid=$_FILES["id"]["name"];
    $tmpnameid=$_FILES["id"]["tmp_name"];
    
    if($orgnamepic=="")
        $orgnamepic=$_POST["hpic"];
    else
            move_uploaded_file($tmpnamepic,"uploads/".$orgnamepic);
    
    
    if($orgnameid=="")
        $orgnameid=$_POST["hid"];
    else
        move_uploaded_file($tmpnamepic,"uploads/".$orgnameid);
        
       $qry="update worker set name='$name', mobile='$mobile', address='$address', category='$category', experience='$experience', age='$age', pic='$orgnamepic', id='$orgnameid', city='$city', country='$country', addhar='$addhar', qualification='$qualification', other='$other'where uid='$uid'";  
        
        mysqli_query($conn,$qry);
    
    echo mysqli_affected_rows($conn);
    
    
    
        
        
    }



function doSave($conn)
{
   


$uid=$_POST['uid'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$category=$_POST['category'];    
$experience=$_POST['experience'];    
$age=$_POST['age'];    
$city=$_POST['city'];
$country=$_POST['country'];


    $orgnamepic=$_FILES["pic"]["name"];
    $tmpname=$_FILES["pic"]["tmp_name"];

    if($orgnamepic!="")
        
        move_uploaded_file($tmpname,"uploads/".$orgnamepic);
    else
        $orgnamepic="nopic.png";
     $orgnameid=$_FILES["id"]["name"];
        $tmpnameid=$_FILES["id"]["tmp_name"];
    if($orgnameid!="")
        move_uploaded_file($tmpnameid,"uploads/".$orgnameid);
    else
        $orgnameid="nopic.png";

$addhar=$_POST['addhar'];
$qualification=$_POST['qualification'];
$other=$_POST['other'];
   

$qry="insert into worker (uid,name,mobile,address,category,experience,age,pic,id,city,country,addhar,qualification,other) values('$uid','$name','$mobile','$address','$category','$experience','$age','$orgnamepic','$orgnameid','$city','$country','$addhar','$qualification','$other')";

mysqli_query($conn,$qry);

 if(mysqli_error($conn)=="")
    {
        echo "You are successfuly Registered";
    }
    else
        echo mysqli_error($conn);
    


}


?>