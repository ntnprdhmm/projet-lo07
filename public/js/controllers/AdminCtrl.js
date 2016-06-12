app.controller('AdminCtrl', function ($scope, $http) {

    $http({method: 'post', url: 'api/admin/accounts'}).success(function (data) {
        $scope.users = data.accounts;
    });
    
});
