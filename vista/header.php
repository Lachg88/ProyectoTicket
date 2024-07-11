<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link rel="stylesheet" href="moduloTickets/build/css/app.css"> 
    <!-- Bootstrap CSS -->
    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="bootstrap/css/utsv.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="bootstrap/css/fontawesome.v5.all.css" rel="stylesheet" />
    <title>UTSV</title>
    <link rel="icon" href="imagen/utsv32.png" />

    
    <!--script src="bootstrap/jquery/jquery-3.5.1.slim.min.js"></script-->
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
        order: [[ 0, "asc" ]],
        dom:'Brftip',        
        buttons: [
            {text:'Copiar tabla',extend:'copy'},
            {text:'Exportar a excel',extend:'excel', title:'rptDatosDelAlumno'}
        ]
} );

$('#example tbody').on( 'click', 'tr', function () {        
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    
} );
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/84976214f4.js" crossorigin="anonymous"></script>
 
</head>
<body>