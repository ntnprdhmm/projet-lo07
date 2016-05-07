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