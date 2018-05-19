/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function agregarPropuesta(nombre,facultad,comentario){
    cadena="&nombre=" + nombre +
            "&facultad=" + facultad +
            "&comentario=" + comentario;
    $.ajax({
        type:"POST",
        url:"php/agregarPropuesta.php",
        data:cadena,
        success:function(r){
            if(r==1){
                alertify.success("propuesta agregada con exito");
            } else{alertify.error("fallo, intenta mas tarde");}
        }
    })   
}

function InfoSemillero(nombre,descripcion) {
    $('#nombreu').val(nombre);
    $('#comentariou').val(descripcion);
}