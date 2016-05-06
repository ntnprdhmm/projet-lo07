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
    $scope.displayForm = false;
    $scope.toggleForm = function() {
        $scope.displayForm = !$scope.displayForm;
    };

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
            templateUrl: 'myModalContent.html',
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