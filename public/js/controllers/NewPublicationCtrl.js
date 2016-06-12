app.controller('NewPublicationCtrl', function($scope, $http) {

    $http({url: '/api/categories'}).success(function(data){
        $scope.categories = data;
    });

});