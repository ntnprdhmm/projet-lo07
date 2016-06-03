app.controller('NewPublicationCtrl', function($scope, $http) {

    $http({method: 'post', url: 'getCategories'}).success(function(data){
        $scope.categories = data;
    });

});