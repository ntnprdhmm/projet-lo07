app.controller('ModalInstanceCtrl', function ($scope, $uibModalInstance, author, listScope, $http) {

    $scope.author = author;

    $scope.collaborateurs = [];

    $http({
        url: 'api/collaborateurs/' + author.id
    }).success(function (data) {
        $scope.collaborateurs = data;
        console.log(data);
    });


    $scope.listScope = listScope;

    $scope.search = function () {
        $scope.listScope.filtreAuteur = author.prenom + " " + author.nom;
        $uibModalInstance.close();
    };

    $scope.close = function () {
        $uibModalInstance.close();
    };
});