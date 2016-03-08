angular.module("cemasa").controller("productsController", function($scope, JsonService) {
    //$http devuelve una promesa que desempaquetamos con then
    JsonService.getData().then(function(dataResponse) {
        var jsonA = dataResponse.data;

        var jsonB=_(jsonA).groupBy("Familia")


        var jsonC=_(jsonB).map(function (value,key){
            return {'Familia':key, 'Producto': _(value).pluck('Producto')}
        })


        $scope.productos = jsonC;
        console.debug( $scope.productos);

    });

});
