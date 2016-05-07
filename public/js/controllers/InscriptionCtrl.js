app.controller('InscriptionCtrl', function($scope) {

    $scope.registerFormSubmit = function(isValid) {

        // check to make sure the form is completely valid
        if (isValid) {
            alert('our form is amazing');
        }

    };

});
