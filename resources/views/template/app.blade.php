<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <link href="style/navbar.css" rel="stylesheet" type="text/css">
        @yield('style')
    </head>
    <body>
        @yield('content')
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../node_modules/angular/angular.min.js"></script>
    <script type="text/javascript" src="../node_modules/angular-route/angular-route.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    @yield('script')
</html>
