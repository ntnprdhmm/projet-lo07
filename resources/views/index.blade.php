<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <title>Laravel</title>
        <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container" ng-controller="helloWorldController as helloCtrl">
            <h1>@{{ helloCtrl.hello }}</h1>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../node_modules/angular/angular.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</html>
