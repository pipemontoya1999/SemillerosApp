/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function agregarPropuesta(nombre,facultad,comentario){
    cadena="nombre=" + nombre +
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
    });   
}

function InfoSemillero(nombre,descripcion) {
    $('#nombreu').val(nombre);
    $('#comentariou').val(descripcion);
}

function grupoSemillero(id) {
        
    var IDS = id;
    $.ajax({
        type:"POST",
        url:"php/consultaGrupo.php",
        data:{'id':IDS},
        dataType: 'json',
        cache: false,

        success:function(response){
            Object.size = function(obj) {
            var size = 0, key;
             for (key in obj) {
             if (obj.hasOwnProperty(key)) size++;
            }
             return size; 
            };
            var tam = Object.size(response);
            $('.elemento_add').remove(); 
                 var horaInicio=0;
                 var horaFin=0;
             for(var i = 0; i < tam; i++ ){
                var ID= response[i]['id'];
                var HI= parseInt(response[i]['HoraInicio']);
                var HF= parseInt(response[i]['HoraFin']);
                 if(HI>=7 & HI<=11){
                      horaInicio = response[i]['HoraInicio']+":00 AM";  
                 }else{ horaInicio = response[i]['HoraInicio']+":00 PM";}
                 
                 if(HF>=7 & HF<=11){
                      horaFin = response[i]['HoraFin']+":00 AM";  
                 }else{ horaFin = response[i]['HoraFin']+":00 PM";}
                 
                 
                 
               $('#tablaGrupo').append(
                     '<tr class="elemento_add"> \n\
                        <td>'+ response[i]['identificador'] + '</td>\n\
                        <td>'+ response[i]['semillero'] +'</td> \n\
                        <td>'+ response[i]['dia'] +'</td> \n\
                        <td>' + horaInicio + '</td> \n\
                        <td>' + horaFin + '</td> <td>'+
                        '<button class="btn btn-success glyphicon glyphicon-plus" onclick="agregarSemillero('+ID+','+IDS+')" ></button>'
                        +'</td>\n\
                        </tr>'
                                        );  
                                }
                             }
                         });
}
             function agregarSemillero(idg,ids){
                     $.ajax({
                     type:"POST",
                     url:"php/agregarSemillero.php",
                     data:{'idGrupo':idg,
                           'idSemillero':ids},
        
                  success:function(response){
                     alert(response);
                 if(response==1){
                  alertify.success("Semillero agregado con exito");
                 }
                 if(response==0){alertify.error("fallo, intenta mas tarde");}
                 if(response==3){alertify.error("ya estas registrado en este curso");}
                        }
                     }); 
                 }

