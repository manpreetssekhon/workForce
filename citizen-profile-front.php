<?php
session_start();
?>
                            
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />


    <script>
        $(document).ready(function(){
            fetchRec();
            function fetchRec()
            {
               
                var uid= $("#uid").val();
              
                $.getJSON("citizen-fetch.php?user="+uid,function(jsonArray)
                          {
                
                    if(jsonArray.length==0)
                        {
                            alert("Inavlid id");
                            return;
                        }
                        
                            $("#name").val(jsonArray[0].name);// mobile id field name
                            $("#mobile").val(jsonArray[0].mobile);
                            $("#email").val(jsonArray[0].email);
                            $("#address").val(jsonArray[0].address);
                            $("#city").val(jsonArray[0].city);
                            $("#state").val(jsonArray[0].state);
                            $("#pincode").val(jsonArray[0].pincode);
                            
                          });
            }
        
        
        });
        
    </script>
    <style>
    
        body{
            background-image: url( pic/art-art-materials-bright-1047540.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            
            
        }
    
    </style>
    <title>DeAl a FuNk</title>
    <link rel="icon" type="image/jpeg" href="pic/worker%20logo.jpeg">
</head>

<body>
   
    <div class="container">
       
        <div class="row">
            
            <div class="col-md-10 offset-md-1 text-center">
               
               <h2 class="display-4">CITIZEN PANEL</h2>
              
                <div class="row">

            <div class="col-md-8 offset-md-2 bg-white" style="padding:10px">
                <form action="citizen-profile-process.php" method="GET" >
                    <div class="form-row">
                        <div class=" form-group col-md-12">
                            <label for="validationDefault01">Uid</label>
                            <input type="text" readonly value='<?php echo $_SESSION["uid"]; ?>'  class="form-control" id="uid" name="uid" placeholder="Uid" required>
                          </div>
                        
                        
                        </div>
                        <div class=" form-row ">
                           <div class="form-group col-md-6 ">
                            <label for="validationDefault02">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class=" form-group col-md-6">
                            <label for="validationDefaultUsername">Mobile</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"  >+91</span>
                                </div>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        </div>
                    <div class=" form-group col-md-14">
                            <label for="validationDefault03">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                            <small id="emailHelp" class="form-text text-muted">Please don't use special symbols for example(#)</small>
                        </div>
                        
                    <div class="form-group">
                        
                        <div class="col-md-14 mb-3">
                            <label for="validationDefault03">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                        </div>
                    </div>
                       <div class="form-row">
                        <div class=" form-group col-md-4">
                            <label for="validationDefault03">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="validationDefault04">State</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="validationDefault05">Pincode</label>
                            <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" id="btn" name="btn" value="Save">
                    <input class="btn btn-primary" type="submit" value="Update" id="btn" name="btn">
                </form>
            </div>




        </div>
        </div>
       </div>
    </div>

</body>

</html>
