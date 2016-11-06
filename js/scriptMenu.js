$(document).on('ready', function(){ //cuando el documento este listo

        $('#contenedor2').hide();
        $('#contenedor3').hide();
        $('#contenedor4').hide();
        $('#contenedor5').hide();
        $('#Inicio').css({'background-color': 'rgba(0, 0, 0, 1)'});

        /*Ajustamos el tamaño de los diferentes elementos*/
        $('#contenedor1').css({ //accesamos a todos los elementos div del documento
            'height': ($(document).outerHeight(true) - 160  ) //la altura del documento - 60px de la barra - los margenes
        });
    
        $('#contenedor2').css({ //accesamos a todos los elementos div del documento
            'height': ($(document).outerHeight(true) - 160  ) //la altura del documento - 60px de la barra - los margenes
        });
        $('#contenedor3').css({ //accesamos a todos los elementos div del documento
            'height': ($(document).outerHeight(true) - 160  ) //la altura del documento - 60px de la barra - los margenes
        });
         $('#contenedor4').css({ //accesamos a todos los elementos div del documento
            'height': ($(document).outerHeight(true) - 160  ) //la altura del documento - 60px de la barra - los margenes
        });
         $('#contenedor5').css({ //accesamos a todos los elementos div del documento
            'height': ($(document).outerHeight(true) - 160  ) //la altura del documento - 60px de la barra - los margenes
        });

        /*************************************************/
         /*Inicio para las ocultar informacion de las demas pestañas*/
        $('#Inicio').click(function(){
            $('#contenedor2').fadeOut(function(){
                $('#Quees').css({'background-color': 'transparent'});
                $('#Inicio').css({'background-color': 'rgba(0, 0, 0, 1)'});
                $('#contenedor1').fadeIn();
            });
            $('#contenedor3').fadeOut(function(){
               $('#Programa').css({'background-color': 'transparent'});
               $('#Inicio').css({'background-color': 'rgba(0, 0, 0, 1)'});
               $('#contenedor1').fadeIn();
            });
            $('#contenedor4').fadeOut(function(){
                $('#Registrar').css({'background-color': 'transparent'});
                $('#Inicio').css({'background-color': 'rgba(0, 0, 0, 1)'});
                $('#contenedor1').fadeIn();
            });
            $('#contenedor5').fadeOut(function(){
               $('#Contacto').css({'background-color': 'transparent'});
                $('#Inicio').css({'background-color': 'rgba(0, 0, 0, 1)'});
                $('#contenedor1').fadeIn();
            });
        });

        /*Que es para las ocultar informacion de las demas pestañas*/
         $('#Quees').click(function(){
            $('#contenedor1').fadeOut(function() {
                $('#Inicio').css({'background-color': 'transparent'});
                $('#contenedor2').fadeIn();
                $('#Quees').css({'background-color': 'rgba(0, 0, 0, 1)'});
            });
            $('#contenedor3').fadeOut(function() {
                $('#Programa').css({'background-color': 'transparent'});
                $('#Quees').css({'background-color': 'rgba(0, 0, 0, 1)'});
                $('#contenedor2').fadeIn();
            });
            $('#contenedor4').fadeOut(function() {
                $('#Registrar').css({'background-color': 'transparent'});
                $('#Quees').css({'background-color': 'rgba(0, 0, 0, 1)'});
                $('#contenedor2').fadeIn();
            });
            $('#contenedor5').fadeOut(function() {
                $('#Contacto').css({'background-color': 'transparent'});
                $('#contenedor2').fadeIn();
                $('#Quees').css({'background-color': 'rgba(0, 0, 0, 1)'});
            });
        });

        /*Programa para las ocultar informacion de las demas pestañas*/
        $('#Programa').click(function(){
              $('#contenedor1').fadeOut(function() {
                  $('#Inicio').css({'background-color': 'transparent'});
                  $('#contenedor3').fadeIn();
                  $('#Programa').css({'background-color': 'rgba(0, 0, 0, 1)'});
              });
              $('#contenedor2').fadeOut(function() {
                  $('#Quees').css({'background-color': 'transparent'});
                  $('#contenedor3').fadeIn();
                  $('#Programa').css({'background-color': 'rgba(0, 0, 0, 1)'});
              });
            
             $('#contenedor4').fadeOut(function() {
                  $('#Registrar').css({'background-color': 'transparent'});
                  $('#contenedor3').fadeIn();
                  $('#Programa').css({'background-color': 'rgba(0, 0, 0, 1)'});
              });
               $('#contenedor5').fadeOut(function() {
                  $('#Contacto').css({'background-color': 'transparent'});
                  $('#contenedor3').fadeIn();
                  $('#Programa').css({'background-color': 'rgba(0, 0, 0, 1)'});
              });
        });

        /*Registrar para las ocultar informacion de las demas pestañas*/
        $('#Registrar').click(function(){
                $('#contenedor1').fadeOut(function() {
                    $('#Inicio').css({'background-color': 'transparent'});
                    $('#contenedor4').fadeIn();
                    $('#Registrar').css({'background-color': 'rgba(0, 0, 0, 1)'});
                });
                $('#contenedor2').fadeOut(function() {
                    $('#Quees').css({'background-color': 'transparent'});
                    $('#contenedor4').fadeIn();
                    $('#Registrar').css({'background-color': 'rgba(0, 0, 0, 1)'});
                });
                $('#contenedor3').fadeOut(function() {
                    $('#Programa').css({'background-color': 'transparent)'});
                    $('#Registrar').css({'background-color': 'rgba(0, 0, 0, 1)'});
                    $('#contenedor4').fadeIn();                    
                    
                });
                 $('#contenedor5').fadeOut(function() {
                     $('#Contacto').css({'background-color': 'transparent'});
                    $('#Registrar').css({'background-color': 'rgba(0, 0, 0, 1)'});
                     $('#contenedor4').fadeIn();
                    
                     
                });
        });

        /*Contacto para las ocultar informacion de las demas pestañas*/
        $('#Contacto').click(function(){
                $('#contenedor1').fadeOut(function() {
                    $('#Inicio').css({'background-color': 'transparent'});
                    $('#contenedor5').fadeIn();
                    $('#Contacto').css({'background-color': 'rgba(0, 0, 0, 1)'});
                });
                $('#contenedor2').fadeOut(function() {
                    $('#Quees').css({'background-color': 'transparent'});
                    $('#contenedor5').fadeIn();
                    $('#Contacto').css({'background-color': 'rgba(0, 0, 0, 1)'});
                });
                $('#contenedor3').fadeOut(function() {
                  
                    $('#Programa').css({'background-color': '#transparent'});
                    $('#Registrar').css({'background-color': 'rgba(0, 0, 0, 1)'});
                     $('#contenedor5').fadeIn();
                });
                $('#contenedor4').fadeOut(function() {
                    $('#Registrar').css({'background-color': 'transparent'});
                     $('#contenedor5').fadeIn();
                    $('#Contacto').css({'background-color': 'rgba(0, 0, 0, 1)'});
                });
        });

});//del $('document').on('ready')