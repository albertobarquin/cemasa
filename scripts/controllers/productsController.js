angular.module("cemasa").controller("productsController", function($scope, JsonService) {
    var test = JsonService.getData();
    console.debug(test.data);
    $scope.productos = null;

    //$http devuelve una promesa que desempaquetamos con then
    JsonService.getData().then(function(dataResponse) {
        $scope.productos = dataResponse.data;
    });

});
