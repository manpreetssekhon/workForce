<!DOCTYPE html>
<html lang="en" id="index">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>


    <script>
        $(document).ready(function () {
            $("#suid").keyup(function () {
                var uid = $("#suid").val();
                $.get("index-back-ajax.php?uid=" + uid, function (text) {

                    $("#errUid").html(text);
                });


            });
            //====================
            $("#btnSignup").click(function () {
                var suid = $("#suid").val();
                var spwd = $("#spwd").val();
                var smobile = $("#smobile").val();
                var stype = $("#stype").val();
                //alert(suid+"  "+spwd+"  "+smobile+"  "+stype);

                var url = "signup-process.php?uid=" + suid + "&pwd=" + spwd + "&mobile=" + smobile +
                    "&type=" + stype;

                $.get(url, function (text) {
                    alert(text);

                });

            });
            //============================          

        });
        /////------------------------------------
        $(document).ready(function () {

            $("#btnlogin").click(function () {
                var luid = $("#luid").val();
                var lpwd = $("#lpwd").val();
                var ltype = $("#ltype").val();
                //console.log(luid+"  "+lpwd+"   "+ltype);

                var url = "save-login.php?uid=" + luid + "&pwd=" + lpwd + "&type=" + ltype;

                $.get(url, function (text) {
                    //  alert(text);
                    text = text.trim();
                    if (text == "login successfully")
                        if (ltype == "citizen")
                            window.location = "citizen-dash-front.php";
                        else
                            window.location = "worker-dash-front.php";

                });

            });


        });

        function myFunction() {
            var x = document.getElementById("lpwd");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }


        };
    </script>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/index.css" type="text/css" />

    <style>
        /*body{
            
            /* background-image: url(pic/air-atmosphere-blue-675977.jpg);*/
        /*  background-size: cover;
                      background-repeat: no-repeat;
          }*/

        .logo {
            width: 50px;
            height: 40px;

            /*background-image: url(pic/worker%20logo.jpeg);*/
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 50%;


        }

        #pic {

            border-radius: 20px 0px 20px 0px;
            box-shadow: 5px 0px 5px 0px;



        }

        #pic:hover {

            transition: 2s ease all;
            transform: scale(1.1);
        }

        #pics {

            border-radius: 20px 0px 20px 0px;
            box-shadow: 5px 0px 5px 0px;

        }

        #pics:hover {

            transition: 2s ease all;
            transform: scale(1.1);
        }

        #button {
            display: inline-block;
            border-radius: 4px;
            background-color: #012690;
            border: none;
            color: #ffffff;
            text-align: center;
            font-size: 18px;
            padding: 2px;
            width: 80px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        #button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        #button span:after {
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        #button:hover span {
            padding-right: 25px;
        }

        #button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>

    <title>DeAl a FuNk</title>
    <link rel="icon" type="image/jpeg" href="pic/worker%20logo.jpeg">
</head>

<body>
    <div class="container-fluid">
        <div class="row" id="navBar">
            
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">

                        <a href="./workForce/index.php">

                            <img src="pic/worker%20logo.jpeg" alt="DealaFunkLogo" class="logo">

                        </a>

                        <a class="navbar-brand text-white">WORKFORCE</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <span class="navbarFiller"></span>
                            <ul class="navbar-nav mr-auto">
                            </ul>
                            <div style="margin-left:10px;">
                                <button id="button" type="button" class="btn mt-2 mb-2" data-toggle="modal"
                                    data-target="#Signup" style="vertical-align:middle">
                                    Signup <span class="badge badge-light"></span>
                                    <span class="sr-only">unread messages</span>
                                </button>
                            </div>

                            <div style="margin-left:10px;">
                                <button id="button" type="button" class="btn mr-1 mt-2 mb-2" data-toggle="modal"
                                    data-target="#login" style="vertical-align:middle">
                                    Login <span class="badge badge-light"></span>
                                    <span class="sr-only">unread messages</span>
                                </button>
                            </div>

                            <div style="margin-left:10px;">
                                <a class="btn   mr-1 mt-2 mb-2" href="#service" id="button"
                                    style="vertical-align:middle">Services</a>
                                <span class="badge badge-light"></span>
                                <span class="sr-only">unread messages</span>

                            </div>

                            <div style="margin-left:10px;">
                                <a class="btn  mr-1 mt-2 mb-2" href="#developer" id="button"
                                    style="vertical-align:middle">Developer</a>
                                <span class="badge badge-light"></span>
                                <span class="sr-only">unread messages</span>

                            </div>

                        </div>
                    </nav>

                </div>

            </div>

            <div class="">

                <div id="carouselExampleIndicators" class="carousel slide mt-2 mb-2  " data-ride="carousel"
                    style="width:920px;">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="pic/build-builder-concrete-38600.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="pic/alone-close-up-colors-1573827.jpg" alt="First slide">

                        </div>

                        <div class="carousel-item ">
                            <img class="d-block w-100" src="pic/carpenter-hands-indoors-374861.jpg" alt="First slide">

                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        

        <div class="row">
            <div class="col-md-12 bg-dark text-md-center text-white" id="service">
                <h2>Our Services</h2>
            </div>
        </div>

        <div class="form-row bg-white mt-2">
            <div class="card ml-1 mt-3" style="width: 15rem; height:25rem;" id="pic">
                <img class="card-img-top;" src="pic/builders-building-construction-159306.jpg" alt="Card image cap"
                    style="height:15rem;">
                <div class="card-body">
                    <h2>Carpainter</h2>
                </div>
            </div>

            <div class="card ml-5 mt-3" style="width: 15rem;" id="pic">
                <img class="card-img-top" src="pic/bucket-building-cleaning-756883.jpg" alt="Card image cap"
                    style="height:15rem;">
                <div class="card-body">
                    <h2>Painter</h2>
                </div>
            </div>

            <div class="card ml-5 mt-3" style="width: 15rem;" id="pic">
                <img class="card-img-top" src="pic/adult-blur-cable-510423.jpg" alt="Card image cap"
                    style="height:15rem;">
                <div class="card-body">
                    <h2>Electrician</h2>
                </div>
            </div>

            <div class="card ml-5 mt-3" style="width: 15rem;" id="pic">
                <img class="card-img-top" src="pic/factory-factory-worker-girl-1108101.jpg" alt="Card image cap"
                    style="height:15rem;">
                <div class="card-body">
                    <h2>Mechanic</h2>
                </div>
            </div>

        </div>

        <div class="row mt-2">
            <div class="col-md-12 bg-dark text-md-center text-white" id="developer">
                <h2>Developers</h2>
            </div>
        </div>

        <div class="container">
            <div class="row offset-3">
                <div class="col-md-4">
                    <div class="card mt-3" id="pics">
                        <center> <img class="rounded-circle mt-3" width="200" height="200" img-thumbnail
                                src="pic/IMG-20181103-WA0016.jpg" alt="Card image cap" /></center>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card mt-3" id="pics">
                        <center> <img class="rounded-circle mt-3" width="200" height="200" img-thumbnail
                                src="pic/sir.jpeg" alt="Card image cap" /></center>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row mt-2">
            <div class="col-md-12 bg-dark text-md-center text-white">
                <h2>Copyright&copy;</h2>
            </div>
        </div>



        <div class="modal fade" tabindex="-1" role="dialog" id="Signup">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Signup Window</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Id

                                    <span id="errUid"></span>
                                </label>

                                <input type="text" class="form-control" id="suid" name="uid">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="spwd" name="pwd">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputmobile">mobile number</label>
                                <input type="text" class="form-control" id="smobile" name="mobile">

                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Type</label>
                                <select class="form-control" name="type" id="stype">
                                    <option value="select">Select</option>
                                    <option value="worker">Worker</option>
                                    <option value="citizen">Citizen</option>
                                </select>
                            </div>


                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary " id="btnSignup">signup</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <!--**********************************-->

        <div class="modal fade" tabindex="-1" role="dialog" id="login">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login Window</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">User ID

                                    <span id="errUid">*</span>
                                </label>
                                <input type="text" class="form-control" id="luid" name="uid"
                                    aria-describedby="emailHelp" placeholder="Enter email">


                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="lpwd" name="pwd" placeholder="Password">
                                <input type="checkbox" onclick="myFunction()">show password
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Type</label>
                                <select class="form-control" id="ltype" name="type">
                                    <option value="select">Select</option>
                                    <option value="worker">Worker</option>
                                    <option value="citizen">Citizen</option>
                                </select>
                            </div>



                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btnlogin">login</button>
                    </div>
                </div>
            </div>
        </div>





    </div>
</body>

</html>