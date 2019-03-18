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
            
                transition: 2s ease all ;
            transform: scale(1.1);
            
        }
    
    </style>
</head>

<body>


    <div class="form-row">
        <h2 class="display-4 text-white  col-md-12 text-center">Citizen Dashboard</h2>
    </div>
    <div class="row bg-transparent">
        <div class="col-md-4">
            <div class="card " style="height:480px;" id="card">
                <img class="card-img" src="pic/achievement-adult-agreement-1437866%20-%20Copy.jpg" alt="Card image cap">
                <div class="card-body">
                    <center>


                        <a  class="btn btn-primary mt-5" href="citizen-profile-front.php">Profile</a>
                    </center>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card " style="height:480px;" id="card">
                <img class="card-img" src="pic/500_F_100455400_KralEPEeyNGiaWE2vbMVvmEFVyg9LNKV%20-%20Copy.jpg" alt="Card image cap">
                <div class="card-body ">
                    <center>


                        <a class="btn btn-primary mt-5" href="city-front.php" >Search</a>
                    </center>
                </div>
            </div>

        </div>

        <div class="col-md-4 ">
            <div class="card  " style="height:480px;" id="card">
                <img class="card-img" src="pic/500_F_64846320_GPcMLrqEhzAlqSCFrNT2s0yyN3wUCfaI%20-%20Copy.jpg" alt="Card image cap">
                <div class="card-body mt-5">
                    <center>


                        <a class="btn btn-primary" href="logout-process.php">Logout</a>
                    </center>
                </div>
            </div>
        </div>


    </div>


</body>

</html>
