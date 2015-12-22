angular.module("cemasa").controller("productsController", function($scope, JsonService) {
    $scope.prueba = "esto es una prueba";
    $scope.productos = JsonService.getData();

});
