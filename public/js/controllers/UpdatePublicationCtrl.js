app.controller('UpdatePublicationCtrl', function ($scope, $http, $routeParams, me) {

    $scope.me = me;
    $scope.publication_id = $routeParams.publication;

    $http({url: 'api/categories'}).success(function (data) {
        $scope.categories = data;
    });

    $http({url: 'api/publication', params: {id: $scope.publication_id}}).success(function (data) {
        $scope.publication = data;
    });

    $scope.formData = {};

    $scope.showPublication = function (auteurs, me) {

        for (var i = 0; i < auteurs.length; i++) {
            if (auteurs[i].user.id == me) {
                return true;
            }
        }
        return false;
    };

    $scope.getListAuthors = function (auteurs) {

        var str = "";
        for (var i = 0; i < auteurs.length; i++) {
            str += auteurs[i].user.prenom + " " + auteurs[i].user.nom;
            if (i != auteurs.length - 1) {
                str += ", ";
            }
        }
        return str;
    };

    $scope.updatePublication = function () {

        $http({
            method: 'POST',
            url: 'api/publication',
            data: $.param($scope.formData)
        }).success(function (data) {
            console.log(data);
            alert('UPDATE OK ! :)');
        });

    };

});