/**
 * Created by albertobarquin on 11/3/16.
 */
angular.module("cemasa").controller("brandsController", function($scope, JsonService) {
    //$http devuelve una promesa que desempaquetamos con then
    JsonService.getBrands().then(function(dataResponse) {
        var brands = dataResponse.data;

        $scope.brands = brands;
        console.log('brands');
        console.debug( $scope.brands);

    });

});
