app.controller('NewPublicationCtrl', function ($scope, $http) {

    $http({url: '/api/categories'}).success(function (data) {
        $scope.categories = data;
    });

    $scope.newPublicationFormSubmit = function (isValid) {

        $scope.formData = {
            title: $scope.title,
            category: $scope.category,
            authors: $scope.authors,
            conference: $scope.conference,
            annee: $scope.annee
        };

        $http({
            method: 'PUT',
            url: '/api/publications',
            data: $.param($scope.formData),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (data) {
            console.log(data);
            alert('OK ! :)');
        });
    };
});