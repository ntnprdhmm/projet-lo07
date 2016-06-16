app.controller('ModalInstanceCtrl', function ($scope, $uibModalInstance, author, collaborateurs, listScope) {

    $scope.author = author;
    
    $scope.collaborateurs = [];

    $http({
        url: 'api/collaborateurs/' + author.user.id
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