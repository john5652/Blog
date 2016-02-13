"use strict";

(function() {
    var app = angular.module("blogController", []);

    var TOKEN = $("meta[name=csrf-token]").attr("content");
    
    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", TOKEN);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.controller("ManagePostsController", ['$scope', '$log', '$http', function($scope, $log, $http) {

        $scope.posts = [];
        $scope.post = {};


        $http.get("/posts/list").then(function(response) {
	        $log.info("Ajax request completed successfully!");
	        $log.info(response);
	        $scope.posts = response.data;
    	});

        $scope.delete = function(id, index){

        	$http.delete("/posts/" + id).then(function(data) {
        		$log.info("DELETE request completed successfully!");
        		$scope.posts.splice(index + 1, 1);
    		});
     	}	

     	$scope.update = function(id, index){

        	$http.put("/posts/" + id, {
        		"title": $scope.post.title, 
        		"body": $scope.post.body, 

        	}).then(function(data) {
        		$log.info("UPDATE request completed successfully!");
        		$("#myModal").modal("hide");

    		}, function(data) {
    			$log.debug(data)
    			$log.info("UPDATE failed.")
    		});
     	}	


    }]);
})();