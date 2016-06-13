app.controller('AdminCtrl', function ($scope, $http) {

    $http({method: 'get', url: 'api/admin/accounts'}).success(function (data) {
        $scope.users = data.accounts;
    });

});
