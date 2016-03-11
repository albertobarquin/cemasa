/**
 * Created by albertobarquin on 2/12/15.
 */
angular.module("cemasa").service("JsonService", [ '$http', function($http) {
    var productsUrl = "data/data.json";
    var brandsUrl = "data/brands.json";

    delete $http.defaults.headers.common['X-Requested-With'];

    this.getData = function(){
        return $http.get(productsUrl, {
           cache: true
       });

    }
    this.getBrands = function(){
        return $http.get(jsonUrl, {
            cache: true
        });

    }

}]);

