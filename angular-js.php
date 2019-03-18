<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <script type="text/javascript" src="js/angular.min.js">
    </script>
    <script>
          var myapp=angular.module("app",[]);
        myapp.controller("controller",function($scope){
            
            $scope.password="manpreet";
            
            $scope.fname="manpreet singh";
            $scope.lname="sekhon";
            $scope.both=$scope.fname+" "+$scope.lname;
            
            $scope.dojoin=function()
            {
                $scope.both=$scope.fname+" "+scope.lname;
                
            }
            
            
            
            
        });
    
    
    </script>
</head>
<body ng-app="app" ng-controller="controller">
    ur password plz:<input type="text" ng-model="password">
    <span ng-bind="password"></span>
    <br>
    <br>other way:{{password}}
    <br><br>
    ur password plz:<input type="text" ng-model="password">
    <hr>
    
    F.name<input type="text" ng-model="fname"><br>
    L.name<input type="text" ng-model="lname"><br>
    <input type="button" value="do join" ng-click="dojoin();">
    <br>
    Joined Name:<span ng-bind="both"></span>
</body>
</html>