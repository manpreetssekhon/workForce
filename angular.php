<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Bootstrap CSS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/angular.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>

    <script type="text/javascript">
        var mymodule=angular.module("mymodule",[]);
        
        mymodule.controller("mycontroller",function($scope)
        {
            $scope.fn="khali";
            $scope.doClick=function()
            {
                alert("Hello:"+$scope.fn);
            }
            //=====================
            $scope.ufn;
            $scope.uln;
            $scope.join;
            $scope.doJoin=function()
            {
                $scope.join=$scope.ufn+" "+$scope.uln;
            }
            
        });
    </script>
</head>
<body ng-app="mymodule" ng-controller="mycontroller">
   
    <input type="text" ng-model="fn">
    <input type="text" ng-model="fn">
    <p>
        <input type="button" value="Click Here" ng-click="doClick();" >
    </p>
    <hr>
    
    <p>
        <input type="text" ng-model="ufn">
        <input type="text" ng-model="uln">
        <input type="button" value="Join" ng-click="doJoin();" >
        <input type="text" ng-model="join">
    </p>
</body>
</html>













