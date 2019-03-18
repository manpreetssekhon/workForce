<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DeAl a FuNk</title>
    <link rel="icon" type="image/jpeg" href="pic/worker%20logo.jpeg">
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

    <script type="text/javascript">
        var mymodule = angular.module("mymodule", []);

        mymodule.controller("mycontroller", function($scope, $http) {

            $scope.jsoncity;
            $scope.jsoncategory;
            $scope.jsonAll;

            $scope.fetchcity = function() {

                var url = "city-process.php";
                $http.get(url).then(ok, notok);

                function ok(response) {
                    //alert(JSON.stringify(response.data));
                    $scope.jsoncity = response.data;
                }

                function notok(response) {
                    //alert(response.data);
                }
            }


            $scope.fetchcategory = function() {
                var url = "fetch-category.php";
                $http.get(url).then(ok, notok);

                function ok(response) {
                    // alert(JSON.stringify(response.data));
                    $scope.jsoncategory = response.data;
                }

                function notok(response) {
                    //alert(response.data);
                }
            }
            //==========

            $scope.fetchrecord = function() {
                var city = document.getElementById("city").value;
                var category = document.getElementById("category").value;
                //alert("Sel. city:" + city + " Sel. category:" + category);

                var url = "worker-process.php?city=" + city + "&category=" + category;

                $http.get(url).then(ok, notok);

                function ok(response) {


                    $scope.jsonAll = response.data;
                    //  alert(JSON.stringify(response.data));

                }

                function notok(response) {
                    //alert(response.data);
                }

            }

            //============

            $scope.doSms = function(mobile) {
                var msg = prompt("Write Ur Contact Number and msg.");
                var url = "send-sms.php?mobile=" + mobile + "&msg=" + msg;

                $http.get(url).then(ok, notok);

                function ok(response) {
                    //alert(JSON.stringify(response.data));

                }

                function notok(response) {
                    //alert(response.data);
                }
            }
        });

        
        
        
    </script>

    <style>
        select{
            width: 300px;
            height: 50px;
             align-items: center;
            justify-content: space-around;
            text-align: center;
            
        }
        body{
            
             
            background-image: url(pic/background-black-close-up-952670.jpg);
            background-size:cover;
            background-repeat:no-repeat;
            
              
          
            
        }
        
        
    </style>
</head>

<body ng-app="mymodule" ng-controller="mycontroller" ng-init="fetchcity();  fetchcategory();">
    <div class="container">
       <center>
        <div class="row mt-xl-5">
            <div class="col-md-12 text-white margin-left:500px;">CITY
                <select name="city" id="city" autofocus>
                    <option ng-repeat="record in jsoncity" value="{{record.city}}">

                        {{record.city}}

                    </option>
                </select>
                CATEGORY
                <select name="category" id="category" >
                    <option ng-repeat="record in jsoncategory" value="{{record.category}}">

                        {{record.category}}

                    </option>

                </select>
                <input type="button"  value="SEARCH" ng-click="fetchrecord();" class="btn btn-info" style="width:150px;">
            </div>
            
        </div>

</center>


<center>

        <div class="form-group">
          
            <div class="col-md-5 mt-md-5" ng-repeat="record in jsonAll" >
               <center>
                <div class="card">
                    <img class="card-img-top" src="uploads/{{record.pic}}" height="200"  alt="Card image cap" role="dialog" tabindex="-1"  >
                    <div class="card-body">
                        <h5 class="card-title">{{record.name}}</h5>
                        <p class="card-text">{{record.address}}</p>
                        <p class="card-text">{{record.mobile}}</p>
                        <a href="#" ng-click="doSms(record.mobile);" class="btn btn-primary">SMS</a>
                    </div>
                </div>
                </center>
            </div>
 
        </div>
       </center>
    </div>
</body>

</html>
