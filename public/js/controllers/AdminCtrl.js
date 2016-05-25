app.controller('AdminCtrl', function($scope){

    $scope.users = [
        {
            name: "JM Nigro",
            date: "04/04/2016", // date de creation du compte
            orga: "Institut Charles Delaunay",
            labo: "CREIDD"
        },
        {
            name: "Marc Lemercier",
            date: "03/02/2016", // date de creation du compte
            orga: "Institut Charles Delaunay",
            labo: "ERA"
        },
        {
            name: "Aurelien Bénel",
            date: "11/01/2016", // date de creation du compte
            orga: "Institut Charles Delaunay",
            labo: "Tech-CICO"
        },
        {
            name: "Ines di loreto",
            date: "04/12/2015", // date de creation du compte
            orga: "Institut Charles Delaunay",
            labo: "LASMIS"
        },
    ];

    $scope.deleteAccount = function(id){



    };

});
