app.controller('UpdatePublicationCtrl', function ($scope, $http, $routeParams, me) {

    $scope.me = me;
    $scope.publication_id = $routeParams.publication;

    $http({url: 'api/categories'}).success(function (data) {
        $scope.categories = data;
    });

    $scope.formData = {id: 0, titre: "", auteurs: [], categorie: "", lieu: ""};

    $http({url: 'api/publication', params: {id: $scope.publication_id}}).success(function (data) {
        data = data.publication[0];
        $scope.publication = data;
        $scope.formData.id = $scope.publication_id;
        $scope.formData.titre = data.titre;
        $scope.formData.auteurs = $scope.getListAuthors(data.auteurs);
        $scope.formData.categorie = data.categorie.slug;
        console.log(data.categorie);
        $scope.formData.lieu = data.lieu;
    });


    $scope.showPublication = function (auteurs, me) {
        if(auteurs == undefined || auteurs == null)
            return false;
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
            data: $.param($scope.formData),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (data) {
            console.log(data);
            alert("OK !");
        });

    };

});