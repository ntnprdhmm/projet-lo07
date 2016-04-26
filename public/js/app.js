var app = angular.module("myApp", ["ngRoute"]);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
        when('/', {
            templateUrl: 'js/templates/pages/index/index.html'
        }).
        when('/publications/:page', {
            templateUrl: 'js/templates/pages/publications/index.html'
        }).
        otherwise({
            redirectTo: '/'
        });
    }]);