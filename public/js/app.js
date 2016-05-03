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
        when('/inscription', {
            templateUrl: 'js/templates/pages/inscription/index.html'
        }).
        otherwise({
            redirectTo: '/'
        });
    }]);

app.controller('publicationsController', function($scope) {
    $scope.displayForm = false;
    $scope.toggleForm = function() {
        $scope.displayForm = !$scope.displayForm;
    };
});