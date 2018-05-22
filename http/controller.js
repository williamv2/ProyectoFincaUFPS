angular.module("MyFirstApp",[])
	.controller("FirstController",function($scope, $http) {
		$scope.posts = [];
		$scope.newPost= {};
		$http.get("http://jsonplaceholder.typicode.com/posts")
			.then(function(datos){
				console.log(datos.data);
				$scope.posts = datos.data;
			},
			function(error){

			});

			$scope.addPost = function(){
				$http.post("http://jsonplaceholder.typicode.com/posts",{
					title: $scope.newPost.title,
					body: $scope.newPost.body,
					userId: 1
				})
					.then(function(data,status,headers,config){
						console.log(data)
						$scope.posts.push($scope.newPost);
						$scope.newPost = {};

					},
					function(error,status,headers,config){
						console.log(error);
					});

			}


			
	});