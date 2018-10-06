/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    
    
    $('#seleccionar').click(function(){
        seleccionarTodo(true);
        
    });
    $('#cancelar').click(function (){
        seleccionarTodo(false);
    });
    $('#borrar').click(function () {
       // var array = document.getElementsByName('borrarElementos');
        var rpta = arraySeleccionado();

        if (rpta) {
            var respuesta = confirm("Estas Seguro de Eliminar estos " + rpta.length + " elementos");
            if (respuesta)
                return true;
            return false;
        } else {

            window.alert("Ningun elemento seleccionado");
            return false;
        }
    }
    );
});
function arraySeleccionado() {
    var array = document.getElementsByName('borrarElementos');
    var check = [];
    var j = 0;
    for (var i = 0; i < array.length; i++) {
        if (array[i].checked) {
            check[j] = array[i];
            j++;
        }
    }
    if (j)
        return check;
    return 0;

}
function seleccionarTodo(estado){
    var array = document.getElementsByName('borrarElementos');
    for (var i = 0; i < array.length; i++) {
        array[i].checked = estado;
    }
}


