<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <title>DeAl a FuNk</title>
    <link rel="icon" type="image/jpeg" href="pic/worker%20logo.jpeg">
    <style>
    
        body{
            
            background-image: url(pic/background-black-close-up-952670.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            
            
        }
        
        #card:hover{
            
            transition: 1s ease all ;
            transform: scale(1.2);
            
        }
    
    </style>
</head>

<body>

    <div class="container">
      <div class="form-row">
      <h2 class="display-4 text-white  col-md-12 text-center">Worker Dashboard</h2>
       </div>
<div class="form-row bg-transparent">
            <div class="card col-md-4 mt-sm-5 mb-sm-5 ml-xl-10 offset-1 float-xl-left" style="width: 15rem;" id="card">
                <img class="card-img img-thumbnail" src="pic/adult-african-descent-american-1451456%20-%20Copy.jpg" alt="Card image cap">
                <div class="card-body">
                   <center>
                    
                    
                       <a class="btn btn-primary mt-5" href="worker-profile-front.php">Profile</a>
                    </center>

                </div>
            </div>
            
            
            <div class="card col-md-4 mt-sm-5 mb-sm-5 mr-xl-10 float-xl-right offset-1" style="width: 18rem;" id="card" >
                <img class="card-img img-thumbnail" src="pic/500_F_64846320_GPcMLrqEhzAlqSCFrNT2s0yyN3wUCfaI%20-%20Copy.jpg" alt="Card image cap">
                <div class="card-body mt-5">
                    <center>
                    
                    
                        <a class="btn btn-primary" href="logout-process.php" >Log Out</a>
                        </center>
                </div>
            </div>

       </div>
       
    </div>
</body>

</html>
