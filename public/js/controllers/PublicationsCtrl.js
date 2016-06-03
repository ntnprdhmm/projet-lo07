app.controller('PublicationsCtrl', function($scope, $uibModal, $http) {

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

    // http requests

    $http({method: 'post', url: 'getLaboratoires'}).success(function(data){
        $scope.laboratoires = data;
    });

    $http({method: 'post', url: 'getPublications'}).success(function(data){
        $scope.publications = data;
    });

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