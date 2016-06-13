app.controller('PublicationsCtrl', function ($scope, $uibModal, $http) {

    $scope.displayFilters = false;
    $scope.displayForm = false;

    $scope.sortAnnee = '+annee';

    $scope.setSort = function (order) {
        $scope.sortAnnee = order;
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
    $scope.collaborateurs = [
        {
            name: "jean paul",
            collaborations: 16
        },
        {
            name: "michel",
            collaborations: 9
        },
        {
            name: "bernard",
            collaborations: 2
        }
    ];

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
                collaborateurs: function () {
                    return $scope.collaborateurs;
                },
                listScope: function(){
                    return $scope;
                }
            }
        });
    };

});