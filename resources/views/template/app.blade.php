<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- ANGULAR-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
    <!-- ANGULAR PACKAGES-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-route.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.3.2/ui-bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.3.2/ui-bootstrap-tpls.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-animate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-touch.min.js"></script>
    <!-- ANGULAR SCRIPTS-->
    <script type="text/javascript" src="js/app.js"></script>
        <!-- controllers -->
        <script type="text/javascript" src="js/controllers/PublicationsCtrl.js"></script>
        <script type="text/javascript" src="js/controllers/NewPublicationCtrl.js"></script>
        <script type="text/javascript" src="js/controllers/PublicationCtrl.js"></script>
        <script type="text/javascript" src="js/controllers/ModalInstanceCtrl.js"></script>
        <script type="text/javascript" src="js/controllers/AdminCtrl.js"></script>
        <script type="text/javascript" src="js/controllers/InscriptionCtrl.js"></script>
        <!-- DIRECTIVES -->
        <script type="text/javascript" src="js/directives/passwordVerify.js"></script>
    <!-- OTHERS SCRIPTS -->
    <script type="text/javascript" src="js/scripts/form.js"></script>
    @yield('script')
</html>
