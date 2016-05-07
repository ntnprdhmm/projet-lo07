var app = angular.module("myApp", ["ngRoute", "ui.bootstrap"]);

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.
        when('/', {
            templateUrl: 'js/templates/pages/index/index.html'
        }).
        when('/publications/:page', {
            templateUrl: 'js/templates/pages/publications/index.html'
        }).
        when('/publications/:page/publication/:id', {
            templateUrl: 'js/templates/pages/publications/publication.html',
            controller: 'PublicationCtrl'
        }).
        when('/inscription', {
            templateUrl: 'js/templates/pages/inscription/index.html'
        }).
        otherwise({
            redirectTo: '/'
        });
    }
]);
