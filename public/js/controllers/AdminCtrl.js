app.controller('AdminCtrl', function ($scope, $http) {

    $http({method: 'get', url: 'api/admin/accounts'}).success(function (data) {
        $scope.users = data.accounts;
    });

<<<<<<< HEAD
    $http({method: 'get', url: 'api/admin/getDoublons'}).success(function (data) {
        $scope.doublons = data.doublons;
=======
    $http({method: 'get', url: '/api/admin/anomalies'}).success(function (data) {
        $scope.anomalies = data;
>>>>>>> e763bcf77962cb7ebef3936c02f458799bebeff4
    });

});
