<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/angular.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>

    <script type="text/javascript">
    
        var mymodule=angular.module("mymodule",[]);
        mymodule.controller("mycontroller",function($scope,$http)
        {
            $scope.jsonArray;
            $scope.fetchAll=function()
            {
                var url="angular-fetch-all-json.php";
                $http.get(url).then(ok,notok);
                function ok(response)
                {
                    alert(JSON.stringify(response.data));
                    $scope.jsonArray=response.data;
                }
                function notok(response)
                {
                    alert(response.data);
                }
            }
            
        });
    </script>
</head>
<body ng-app="mymodule" ng-controller="mycontroller">
  <center>
   <input type="button" ng-click="fetchAll();" value="Load All Records" class="btn btn-primary">
    <table width="400" class="table table-striped mt-3" >
        <tr><th>User id</th><th>Address</th><th>Mobile</th><th>Pic</th></tr>
        <tr ng-repeat="record in jsonArray">
            <td>{{record.uid}}</td>
            <td>{{record.address}}</td>
            <td>{{record.mobile}}</td>
            <td>
                <img src="uploads/{{record.pic}}" width="60" height="60">
            </td>
            
        </tr>
        
    </table>    
</center>    
</body>
</html>