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

        function showprev(file)
        {
            
        if(file.files && file.files[0] )
            {
                var reader=new FileReader();
                reader.onload=function(e){
                    $('#prev').prop('src',e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }
        
         function showrev(file)
        {
        if(file.files && file.files[0] )
            {
                var reader=new FileReader();
                reader.onload=function(e){
                    $('#rev').prop('src',e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }


        $(document).ready(function(){
                
            $("#fetch").click(function(){
               
                var uid= $("#uid").val();
              
                $.getJSON("worker-fetch.php?user="+uid,function(jsonArray)
                          {
                
                    if(jsonArray.length==0)
                        {
                            alert("Inavlid id");
                            return;
                        }
                        
                            $("#name").val(jsonArray[0].name);// mobile id field name
                            $("#mobile").val(jsonArray[0].mobile);
                            $("#address").val(jsonArray[0].address);
                            $("#category").val(jsonArray[0].category);
                            $("#experience").val(jsonArray[0].experience);
                            $("#age").val(jsonArray[0].age);
                            $("#city").val(jsonArray[0].city);
                            $("#country").val(jsonArray[0].country);
                            $("#addhar").val(jsonArray[0].addhar);
                            $("#qualification").val(jsonArray[0].qualification):
                            $("#other").val(jsonArray[0].other);
                            $("#prev").prop("src","uploads/"+jsonArray[0].pic);
                            $("#rev").prop("src","uploads/"+jsonArray[0].id);
                            
                         $("#hpic").val(jsonArray[0].pic);
                         $("#hid").val(jsonArray[0].id);

                            
                          });
            });
        
        
        });
        
    
    
    
    
    </script>

     <title>DeAl a FuNk</title>
    <link rel="icon" type="image/jpeg" href="pic/worker%20logo.jpeg">
</head>

<body style="background-color:gray">
    <div class="container">

        <div class="row">

            <div class="col-md-10 offset-md-1 text-center">

                <h2>WORKERS PANEL</h2>

                <div class="row">

                    <div class="col-md-8 offset-md-2 bg-white" style="padding:10px">
                        <form action="worker-profile-process.php" method="post" enctype="multipart/form-data">

                            <input type="hidden" id="hpic" value="" name="hpic">
                            <input type="hidden" id="hid" value="" name="hid">




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
                                            <span class="input-group-text">+91</span>
                                        </div>
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-row col-md-14">
                                <label for="validationDefault03">ADDRESS</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                            </div>

                            <div class="form-row ">
                                <div class="col-md-4">
                                    <label for="formgroupExampleInput2">Category</label>
                                    <select class="form-control" name="category" id="category">
                                        <option value="Select">Select</option>
                                        <option value="Painter">Painter</option>
                                        <option value="Plumber">Plumber</option>
                                        <option value="Carpainter">Carpainter</option>
                                        <option value="Labourer">Labourer</option>
                                        
                                    </select>

                                </div>


                                <div class="col-md-4">
                                    <label for="formgroupExampleInput2">Experience</label>
                                    <select class="form-control" name="experience" id="experience">
                                        <option value="Select">Select</option>
                                        <option value="Worker">2-5 years</option>
                                        <option value="Citizen">5-10 years</option>
                                        <option value="Citizen">more than 10 years</option>
                                    </select>

                                </div>



                                <div class="col-md-4">
                                    <label for="validationDefault02">Age</label>
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Age" required>
                                </div>


                            </div>
                            <div class=" form-row  mt-3">
                                <div class="col-md-6 ">
                                    <label for="validationDefault02">PIC</label>
                                    <input type="file" class="form-control" name="pic" id="pic" onchange="showprev(this,'prev');">

                                </div>
                                <div class="form-group col-md-6 ">
                                    <img id="prev" src="uploads/nopic.png" width="150" height="150">

                                </div>
                            </div>

                            <div class=" form-row ">
                                <div class="col-md-6 ">
                                    <label for="validationDefault02">ID PROOF</label>
                                    <input type="file" class="form-control" name="id" id="id" onchange="showrev(this,'rev');">

                                </div>
                                <div class="col-md-6 ">
                                    <img id="rev" src="uploads/nopic.png" width="150" height="150">

                                </div>
                            </div>








                            <div class="form-row">
                                <div class=" form-group col-md-6">
                                    <label for="validationDefault03">City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationDefault04">COUNTRY</label>
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="validationDefault05">ADDHARCARD NUMBER</label>
                                    <input type="text" class="form-control" id="addhar" name="addhar" placeholder="Addhar Number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationDefault05">QUALIFICATION</label>
                                    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification" required>
                                </div>

                            </div>
                            <center>
                                <div class="form-group">

                                    <textarea rows="10" cols="50" id="other" name="other">


                                </textarea>

                                </div>
                            </center>

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
