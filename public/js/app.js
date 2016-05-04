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
        when('/publications/:page/publication/:id', {
            templateUrl: 'js/templates/pages/publications/publication.html',
            controller: 'publicationController'
        }).
        when('/inscription', {
            templateUrl: 'js/templates/pages/inscription/index.html'
        }).
        otherwise({
            redirectTo: '/'
        });
    }]);

/**
 * Concerne l'ensemble des publications
 */
app.controller('publicationsController', function($scope) {
    $scope.displayForm = false;
    $scope.toggleForm = function() {
        $scope.displayForm = !$scope.displayForm;
    };
});

/**
 * Concerne une seule publication
 */
app.controller('publicationController',function($scope, $routeParams) {
    $scope.page = $routeParams.page;
    $scope.id = $routeParams.id;
});