/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var app = angular.module('miApp', []);
app.controller('AlumnosCtrol', alumnoControl);

alumnoControl.$inyect =['$scope','$http'];
function alumnoControl($scope, $http) {
    $scope.reverso = false;
    $scope.confirmar = function(){
            var respuesta = confirm("Estas Seguro de Eliminar este Alumno");
            if (respuesta)
                return true;
            return false;
    };    
   
    
    $http({
        method: 'GET',
        url: 'alumnos.json'
    }).then(function (response) {
        $scope.alumnos = response.data.alumnos;
    }, function (response) {
        console.log(response.status);
    });
    

}