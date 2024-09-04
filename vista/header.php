<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>UTSV</title>

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="bootstrap/css/utsv.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="bootstrap/css/fontawesome.v5.all.css" rel="stylesheet" />
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Icono de la página -->
    <link rel="icon" href="./moduloTickets/public/build/img/logo-ut.png" />

    <!-- Hoja de estilos propia -->
    <link rel="stylesheet" href="moduloTickets/public/build/css/app.css">

    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/jquery/jquery.dataTables.min.js"></script>
    <script src="bootstrap/jquery/dataTables.bootstrap4.min.js"></script>
    <script src="bootstrap/jquery/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                order: [
                    [0, "asc"]
                ],
                dom: 'Brftip',
                buttons: [{
                        text: 'Copiar tabla',
                        extend: 'copy'
                    },
                    {
                        text: 'Exportar a excel',
                        extend: 'excel',
                        title: 'rptDatosDelAlumno'
                    }
                ]
            });

            $('#example tbody').on('click', 'tr', function() {
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                } else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });

        });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/84976214f4.js" crossorigin="anonymous"></script>

</head>

<body>