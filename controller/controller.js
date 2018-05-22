var app= angular.module("MyFirstApp",[]);
	app.controller("FirstController", function($scope) {
		$scope.nombre ="Cesar";
		$scope.nuevoComentario = {};
		$scope.comentarios = [
			{
				comentario:"Buen Pagina :D",
				username:"Cluu"
			},
			{
				comentario:"Mala Pagina :(",
				username: "Tron"
			}


		];

		$scope.agregarComentario = function(){
			$scope.comentarios.push($scope.nuevoComentario);
			$scope.nuevoComentario = {};
		}
});
	
