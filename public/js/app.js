var app = angular.module("myApp", ["ngRoute", "ui.bootstrap"]);

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.
        when('/', {
            templateUrl: 'js/templates/pages/index/index.html'
        }).
        when('/publications/:page', {
            templateUrl: 'js/templates/pages/publications/index.html',
            controller: 'NewPublicationCtrl',
            controller: 'PublicationsCtrl'
        }).
        when('/inscription', {
            templateUrl: 'js/templates/pages/inscription/index.html'
        }).
        when('/admin', {
            templateUrl: 'js/templates/pages/admin/index.html'
        }).
        otherwise({
            redirectTo: '/'
        });
    }
]);