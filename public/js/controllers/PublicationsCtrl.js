app.controller('PublicationsCtrl', function($scope, $uibModal) {

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