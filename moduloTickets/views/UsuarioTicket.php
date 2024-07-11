  <div class="container">
    <div class="row well">
      <div class="col-sm-3">
        <img src="imagen/soporte.webp" class="img-responsive" alt="Image">
      </div>
      <div class="col-sm-9 lead">
        <h5 style="font-size:20pt;color:#278A49;font-weight:500;"> BIENVENIDO AL SISTEMA DE SOPORTE SIGU
        </h5>
        <p class="text-justify" style="font-size:12pt;font-weight:500;">Es muy fácil de usar, si en algún momento experimenta problemas con alguno de nuestros módulos, no dude en enviarnos un ticket de soporte. Estaremos encantados de responder rápidamente y trabajar en la resolución de cualquier problema que pueda tener.</p>
        <h5 style="font-size:12pt;font-weight:500;">Si ya nos ha enviado un ticket puede consultar el estado de este mediante su <strong>Ticket ID</strong></h5>
      </div>
    </div><!--fin row 1-->
    <div class="row">
      <div class="col-sm-6">
        <div class="panel panel-info">
          <div class="panel-heading text-center"><i class="fa fa-file-text"></i>&nbsp;<strong>Nuevo Ticket</strong></div>
          <div class="panel-body text-center">
            <center> <img src="imagen/crear.png" alt="Image" width="60" height="60"> </center>
            <h5>Abrir un nuevo ticket</h5>
            <p class="text-justify">Crea una nueva solicitud y te ayudaremos a solucionarlo. Si deseas consultar el estado de tu incidencia utiliza el formulario de la derecha <em><strong>Comprobar estado de Ticket.</strong></em></p>
            <p>Para abrir un nuevo <strong>ticket</strong> has click en el siguiente botón</p>
          </div>

          <div class="form-group">
            <div>
              <center><a href="agregarT.php">
                  <button class="btn btn-primary">Crear Ticket</button>
                </a> </center>
              <BR>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="panel panel-danger">
          <div class="panel-heading text-center"><i class="fa fa-link"></i>&nbsp;<strong>Comprobar estado de Ticket</strong></div>
          <div class="panel-body text-center">
            <center> <img src="imagen/crear2.png" alt="Image" width="60" height="60"> </center>
            <h5>Consultar estado de ticket</h5>
            <form class="form-horizontal" role="form" method="GET" action="consultarT.php">
              <input type="hidden" name="view" value="ticketcon">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="email_consul" placeholder="Email" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">ID Ticket</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="id_consul" placeholder="ID Ticket" required="">
                </div>
              </div>
              <div class="form-group">
                <div>
                  <BR>
                  <button type="submit" class="btn btn-success">Consultar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>