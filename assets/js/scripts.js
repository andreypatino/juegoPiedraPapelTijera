victoriasUsuario = 0;
victoriasPC = 0;
empates = 0;
/**
   * Método que permite ver el resutaldo del usuario con la maquina
   * @author Andrey Sarria
   * @copyright Todos los derechos reservado 2020.
   * @version 1.0  
*/
function Resultado(){
    $("#usuarioimg").html('');
    $("#ordenadorimg").html('');
    $("#mssgresultado").html('');
    $("#tablaresultados").html('');

    var ordenador = jugadaOrdenador();
    var imgord = imagen(ordenador.toString());
    $("#ordenadorimg").append(imgord);

	var usuario = $('#jugada_del_usuario').val();
    var imgusu = imagen($('#jugada_del_usuario').val());
    $("#usuarioimg").append(imgusu); 

    if (usuario == '') {     
        $("#Msini").html('Debe escoger jugada');
        $("#Msini").show();
        setTimeout(function() {
        $("#Msini").fadeOut(1500);
        },3000);
        
    }else{
        
        $("#Msini").hide();
        var formdata = new FormData();
        formdata.append("usuario", usuario);
        formdata.append("ordenador", ordenador);       
        formdata.append("command", "Cresultado");
        $.ajax({
    
            url: "php_class/FrontController.php",
            type:"POST",
            dataType: "json",
            data: formdata,
            enctype: "multipart/form-data",
            contentType:false,
            processData:false,
            success: function(rta){
                console.warn(rta);
                if (rta.tipo === 'exito') { 
                    switch(rta.ganador) {
                          case 'U':
                            ++victoriasUsuario;
                            break;
                          case 'P':
                            ++victoriasPC;
                            break;
                          case 'E':
                            ++empates;
                            break;  
                          default:
                            var img = "Error jugada no existe";    
                             break;
                        }
                    var cadena='';
                    cadena += '<h4>Tabla de resultados</h4><table class="table" style="width:100%">'+
                            '<tr>'+
                            '<th>EMPATES</th>'+
                            '<th>USUARIO GANO</th>'+
                            '<th>ORDENADOR GANO</th>'+
                            '</tr>'+
                            '<tr>'+
                            '<td>'+empates+'</td>'+
                            '<td>'+victoriasUsuario+'</td>'+
                            '<td>'+victoriasPC+'</td>'+
                            '</tr>'+
                            '</table>';
                    $("#ordenadorimg").append(cadena);      
                    console.log(victoriasUsuario+'-'+victoriasPC+'-'+empates);                        
                    $("#mssgresultado").append(rta.messRs); 
                     
                }else{
                    $("#mssgresultado").append('Error en el resultado'); 
                    
                }
                          
            }
        });
        
    }    
/**
   * Método que permite traer la imagen de la jugada
   * @author Andrey Sarria
   * @copyright Todos los derechos reservado 2020.
   * @version 1.0  
*/    

 function imagen(jugada){
    console.log(jugada);
   switch(jugada) {
      case '1':
        var img = "<img src='assets/img/piedra.png' style='width: 250px;'>";
        break;
      case '2':
        var img = "<img src='assets/img/papel.png' style='width: 250px;'>";
        break;
      case '3':
        var img = "<img src='assets/img/tijera.png' style='width: 250px;'>";
        break;  
      default:
        var img = "Error jugada no existe";    
         break;
    }
     return img;
 }  

/**
   * Método que permite realizar el random del ordenador
   * @author Andrey Sarria
   * @copyright Todos los derechos reservado 2020.
   * @version 1.0  
*/    

 function jugadaOrdenador(){
    
     var ordenador = Math.floor(Math.random() * 3);
     
      switch(ordenador) {
      case 0:
        var rta = 1;
        break;
      case 1:
        var rta = 2;
        break;
      case 2:
        var rta = 3;
        break;  
      default:
        var rta = "Error jugada no existe";    
         break;
    }
     return rta;
 }  

}
