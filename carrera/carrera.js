$(document).ready( function() {
  $('#formulario2').submit(function(e) {
       e.preventDefault();  
       var btnAct = $("#btnActualizar");
       $.ajax({
          type: 'POST',
          url: 'carrera/sqlCarrera.php?opcion=1',
          data: $('#formulario2').serialize(),
          beforeSend: function(){
            btnAct.val("Actualizando...");
          // btnEnviar.text("Enviando..."); //Para button             
          btnAct.attr("disabled","disabled");
          },
          complete:function(data){
            btnAct.val("Actualizar");
            btnAct.removeAttr("disabled");
          },
          success: function(respuesta) {
            //var user = document.getElementById('iduser');
           console.log(respuesta);
            switch (respuesta) { 
            case 'exito':
              btnAct.val("Actualizar");
              document.getElementById('msgAlerta').style.display='block';        
              document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>Registro Actualizado Exitosamente!!!</b></span>";  
            
              break;
            case 'error db':
              document.getElementById('msgAlerta').style.display='block';        
              document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>error db</b></span>";
              break;
            default:
              document.getElementById('msgAlerta').style.display='block';        
              document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>"+respuesta+"</b></span>";
          }
            
          },
          error: function(data){
          // Se ejecuta si la peticón ha sido erronea
          alert("Error de ajax");
          }
          
          });
      
    }); 
});


$(document).ready( function() {
  $('#formulario1').submit(function(e) {
       e.preventDefault();  
       var btnEnviar = $("#btnEnviar");
       $.ajax({
          type: 'POST',
          url: 'carrera/sqlCarrera.php?opcion=2',
          data: $('#formulario1').serialize(),
          beforeSend: function(){
              btnEnviar.val("Enviando...");
          // btnEnviar.text("Enviando..."); //Para button             
            btnEnviar.attr("disabled","disabled");
          },
          complete:function(data){
            btnEnviar.val("Guardar");
            btnEnviar.removeAttr("disabled");
          },
          success: function(respuesta) {
            //var user = document.getElementById('iduser');
           console.log(respuesta);
            switch (respuesta) { 
            case 'exito':
              btnEnviar.val("Guardar");
              document.getElementById('msgAlerta').style.display='block';        
              document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>Registro Guardado Exitosamente!!!</b></span>";  
            
              break;
            case 'error db':
              document.getElementById('msgAlerta').style.display='block';        
              document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>error db</b></span>";
              break;
            default:
          }
            
          },
          error: function(data){
          // Se ejecuta si la peticón ha sido erronea
          alert("Error de ajax");
          }
          
          });
      
    }); 
});


$(document).ready( function() {
  $('#formulario3').submit(function(e) {
       e.preventDefault();  
       var btnElim = $("#btnEliminar");
       $.ajax({
          type: 'POST',
          url: 'carrera/sqlCarrera.php?opcion=3',
          data: $('#formulario3').serialize(),
          beforeSend: function(){
            btnElim.val("Eliminando...");
          // btnEnviar.text("Enviando..."); //Para button             
          btnElim.attr("disabled","disabled");
          },
          complete:function(data){
            btnElim.val("Eliminar");
            btnElim.removeAttr("disabled");
          },
          success: function(respuesta) {
            //var user = document.getElementById('iduser');
           //alert(respuesta);
            switch (respuesta) { 
            case 'exito':
              btnElim.val("Eliminar");
              document.getElementById('msgAlerta').style.display='block';        
              document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>Registro Eliminado Exitosamente!!!</b></span>";  
              break;
            case 'error db':
              document.getElementById('msgAlerta').style.display='block';        
              document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>error db</b></span>";
              break;
            default:
          
          }
            
          },
          error: function(data){
          // Se ejecuta si la peticón ha sido erronea
          alert("Error de ajax");
          }
          
          });
      
    }); 
});

function cerrarmsg(){
  document.getElementById('msgAlerta').style.display='none';
  location.href= "index.php?pag=Carreras"
}


