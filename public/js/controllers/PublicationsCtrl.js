app.controller('PublicationsCtrl', function ($scope, $uibModal, $http, me) {

    $scope.displayFilters = false;
    $scope.me = me;
    $scope.displayForm = false;
    $scope.showUpdateForm = false;

    $scope.sortAnnee = '+annee';

    $http({url: 'api/categories'}).success(function (data) {
        $scope.categories = data;
    });

    $scope.setSort = function (order) {
        $scope.sortAnnee = order;
    };

    $scope.updatePublicationFormSubmit = function() {

        $scope.updateData = {
            title: $scope.title,
            category: $scope.category,
            auteurs: $scope.auteurs,
            lieu: $scope.lieu
        };

        $http({
            method: 'POST',
            url: 'api/publications',
            data: $.param($scope.updateData)
        }).success(function (data) {
            console.log(data);
            alert('UPDATE OK ! :)');
        });

    };

    $scope.showPublication = function(auteurs, me) {

        for(var i = 0; i < auteurs.length; i++)
        {
            if(auteurs[i].user.id == me.id)
            {
                return $scope.showUpdateForm;
            }
        }
        return false && $scope.showUpdateForm;
    };

    $scope.getListAuthors = function(auteurs) {

        var str = "";
        for(var i = 0; i < auteurs.length; i++)
        {
            str += auteurs[i].user.prenom + " " + auteurs[i].user.nom;
            if(i != auteurs.length -1)
            {
                str += ", ";
            }
        }
        return str;
    };

    $scope.matchLab = function (lab) {
        if (lab == undefined || lab == "")
            return function (item) {
                return true;
            };

        return function (item) {
            for (var i = 0; i < item.auteurs.length; i++) {
                var user = item.auteurs[i].user;
                var _ = user.laboratoire;
                if (_ != null && _ != undefined && _.toLowerCase().indexOf(lab.toLowerCase()) !== -1)
                    return true;
            }
            return false;
        };
    };

    $scope.matchAuthor = function (author) {
        if (author == undefined || author == "")
            return function (item) {
                return true;
            };

        return function (item) {
            for (var i = 0; i < item.auteurs.length; i++) {
                var user = item.auteurs[i].user;
                var _ = user.nom + " " + user.prenom + " " + user.nom;
                // Trick to match "nom prénom" or "prénom nom"

                if (_ != null && _ != undefined && _.toLowerCase().indexOf(author.toLowerCase()) !== -1)
                    return true;
            }
            return false;
        };
    };


    $scope.authorInput = {
        pattern: /^[a-z ]{3,50}$/i
    };

    $scope.toggleForm = function () {
        if ($scope.displayFilters) {
            $scope.toggleFilters();
        }
        $scope.displayForm = !$scope.displayForm;
    };

    $scope.toggleFilters = function () {
        if ($scope.displayForm) {
            $scope.toggleForm();
        }
        $scope.displayFilters = !$scope.displayFilters;
    };

    $scope.toggleUpdateForm = function () {
        $scope.showUpdateForm = !$scope.showUpdateForm;
    };

    $scope.annees = [];
    var i;
    for (i = 1980; i <= 2016; i++) {
        $scope.annees.push(i);
    }

    // http requests

    $http({url: 'api/laboratoires'}).success(function (data) {
        $scope.laboratoires = data;
    });

    $http({url: 'api/publications'}).success(function (data) {
        $scope.publications = data;
    });

    // MODAL

    $scope.open = function (size, author) {
        var modalInstance = $uibModal.open({
            animation: true,
            templateUrl: 'authorModal',
            controller: 'ModalInstanceCtrl',
            size: size,
            resolve: {
                author: function () {
                    return author;
                },
                listScope: function(){
                    return $scope;
                }
            }
        });
    };

});