<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <link href="style/navbar.css" rel="stylesheet" type="text/css">
        <link href="style/form.css" rel="stylesheet" type="text/css">
        @yield('style')
    </head>
    <body>
        @yield('content')
    </body>
    <!-- JQUERY -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- BOOTSTRAP -->
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ANGULAR-->
    <script type="text/javascript" src="../node_modules/angular/angular.min.js"></script>
    <!-- ANGULAR PACKAGES-->
    <script type="text/javascript" src="../node_modules/angular-route/angular-route.js"></script>
    <script type="text/javascript" src="../node_modules/angular-bootstrap-npm/dist/angular-bootstrap.js"></script>
    <script type="text/javascript" src="../node_modules/angular-bootstrap-npm/dist/angular-bootstrap-tpls.js"></script>
    <script type="text/javascript" src="../node_modules/angular-animate/angular-animate.js"></script>
    <script type="text/javascript" src="../node_modules/angular-touch/angular-touch.js"></script>
    <!-- ANGULAR SCRIPTS-->
    <script type="text/javascript" src="js/app.js"></script>
    <!-- OTHERS SCRIPTS -->
    <script type="text/javascript" src="js/form.js"></script>
    @yield('script')
</html>
