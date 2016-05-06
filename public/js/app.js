var app = angular.module("myApp", ["ngRoute", "ui.bootstrap"]);

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
    }
]);

/**
 * Concerne une seule publication
 */
app.controller('publicationController',function($scope, $routeParams) {
    $scope.page = $routeParams.page;
    $scope.id = $routeParams.id;
});

/**
 * Concerne l'ensemble des publications
 */
app.controller('publicationsController', function($scope, $uibModal) {

    $scope.displayFilters = false;
    $scope.displayForm = false;

    $scope.authorInput = {
        pattern: /^[a-z ]{3,50}$/i
    };

    $scope.toggleForm = function() {
        if($scope.displayFilters) {
            $scope.toggleFilters();
        }
        $scope.displayForm = !$scope.displayForm;
    };

    $scope.toggleFilters = function() {
        if($scope.displayForm) {
            $scope.toggleForm();
        }
        $scope.displayFilters = !$scope.displayFilters;
    };

    $scope.laboratoires = [
        'CREIDD',
        'ERA',
        'GAMMA3',
        'LASMIS',
        'LM2S',
        'LNIO',
        'LOSI',
        'Tech-CICO'
    ];

    // MODAL
    $scope.collaborateurs = [
        {
            name: "jean paul",
            collaborations: 16
        },
        {
            name: "michel",
            collaborations: 9
        },
        {
            name: "bernard",
            collaborations: 2
        }
    ];

    $scope.open = function (size, author) {
        var modalInstance = $uibModal.open({
            animation: true,
            templateUrl: 'authorModal',
            controller: 'ModalInstanceCtrl',
            size: size,
            resolve: {
                author: function() {
                    return author;
                },
                collaborateurs: function() {
                    return $scope.collaborateurs;
                }
            }
        });
    };


});

/**
 * Controller d'une instance de uiModal
 */
app.controller('ModalInstanceCtrl', function ($scope, $uibModalInstance, author, collaborateurs) {

    $scope.author = author;
    $scope.collaborateurs = collaborateurs;

    $scope.search = function () {
        // select publications where author = author
        $uibModalInstance.close();
    };

    $scope.close = function () {
        $uibModalInstance.close();
    };
});