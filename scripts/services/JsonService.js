/**
 * Created by albertobarquin on 2/12/15.
 */
angular.module("cemasa").service("JsonService", [ '$http', function($http) {
    var jsonUrl = "data/data.json";
    this.getData = function(){
        return $http.get(jsonUrl, {
           cache: true
       });


    }

}]);
