app.controller('ModalInstanceCtrl', function ($scope, $uibModalInstance, author, collaborateurs, listScope) {

    $scope.author = author;
    $scope.collaborateurs = collaborateurs;
    $scope.listScope = listScope;

    $scope.search = function () {
        $scope.listScope.filtreAuteur = author.prenom + " " + author.nom;
        $uibModalInstance.close();
    };

    $scope.close = function () {
        $uibModalInstance.close();
    };
});