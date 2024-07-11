// var redirigirDespuesDeAlerta = true;
$(document).ready(function () {

    $('#formulario1').submit(function (e) {
        e.preventDefault();

        if (this.checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();

            // verificar si esta la oferta creada, usando la function get_oferta que esta en el archivo modeloOfertaEdu.php, si existe la oferta, debe de mandar un aviso de que ya existe la oferta, si no existe, debe de crear la oferta
        }
        else {
            // // imprime los datos del form
            // console.log($('#formulario1').serialize());
            var btnEnviar = $("#btnEnviar");
            btn = document.getElementById('btnEnviar');
            
            //alert(per.value);
            alert(btn.value);
            opc = btn.value;
            console.log(opc,"valor")

            // $.ajax({
            //     type: 'POST',
            //     url: 'moduloTickets/models/sqlTickets.php?opcion=' + opc,
            //     data: $('#formulario1').serialize(),
            //     beforeSend: function () {
            //         // alert('beforeSend');
            //         btnEnviar.val("Enviando...");
            //         //btnEnviar.text("Enviando..."); //Para button             
            //         btnEnviar.attr("disabled", "disabled");
            //     },
            //     complete: function (data) {
            //         // alert(data);
            //         btnEnviar.val(opc);
            //         btnEnviar.removeAttr("disabled");
            //         console.log(btnEnviar);
            //     },
            //     success: function (respuesta) {
            //         // opc = opc.replace(/[^a-zA-Z0-9 ]/g, '');
            //         console.log(respuesta)
            //         switch (respuesta) {
            //             case 'Registro insertado':
            //                 btnEnviar.val(opc);
            //                 document.getElementById('msgAlerta').style.display = 'block';
            //                 document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>El ticket fue creado con exito</b></span>";
            //                 redirigirDespuesDeAlerta = true;
            //                 break;
            //             case 'Registro actualizado':
            //                 btnEnviar.val(opc);
            //                 document.getElementById('msgAlerta').style.display = 'block';
            //                 document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>El ticket se actualizó con exito</b></span>";
            //                 redirigirDespuesDeAlerta = true;
            //                 break;
            //             case 'Error al actualizar':
            //                 btnEnviar.val(opc);
            //                 document.getElementById('msgAlerta').style.display = 'block';
            //                 document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>Hay un error en el ticket</b></span>";
            //                 redirigirDespuesDeAlerta = true;
            //                 break;
            //             default:
            //                 alert('Lo lamentamos, respuesta invalida:' + respuesta);
            //         }

            //     },
            //     error: function (data) {
            //         // Se ejecuta si la peticón ha sido erronea
            //         alert("Error " + data);
            //     }

            // });
        }

    });

});

function cerrarmsgo() {
    document.getElementById('msgAlerta').style.display = 'none';

    // Verificar si se debe redirigir
    if (redirigirDespuesDeAlerta) {
        window.location.href = 'index.php?pag=UsuarioTicket';
    }
}

(function () {
    'use strict';
    window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation');

        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();