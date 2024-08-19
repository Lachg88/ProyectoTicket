<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="./moduloTickets/public/build/img/soporte.webp" class="img-fluid" alt="Image">
        </div>
        <div class="col-9 lead">
            <h5 style="font-size:20pt;color:#278A49;font-weight:500;"> BIENVENIDO AL SISTEMA DE SOPORTE SIGU
            </h5>
            <p class="text-justify" style="font-size:12pt;font-weight:500;">Es muy fácil de usar, si en algún momento experimenta problemas con alguno de nuestros módulos, no dude en enviarnos un ticket de soporte. Estaremos encantados de responder rápidamente y trabajar en la resolución de cualquier problema que pueda tener.</p>
            <h5 style="font-size:12pt;font-weight:500;">Si ya nos ha enviado un ticket puede consultar el estado de este mediante su <strong>Ticket ID</strong></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body text-center">
                    <strong>Nuevo Ticket</strong>
                    <div class="text-center">
                        <img src="./moduloTickets/public/build/img/crear.png" alt="Image" width="60" height="60">
                        <h5><i class="fa fa-file-text"></i> Abrir un nuevo ticket</h5>
                        <p class="text-justify">Crea una nueva solicitud y te ayudaremos a solucionarlo. Si deseas consultar el estado de tu incidencia utiliza el formulario de la derecha <em><strong>Comprobar estado de Ticket.</strong></em></p>
                        <p>Para abrir un nuevo <strong>ticket</strong> has click en el siguiente botón</p>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="text-center">
                                <a href="index.php?pag=Alta de Ticket">
                                    <button class="btn btn-primary"><i class="fa fa-file-text"></i> Crear Ticket</button>
                                </a>
                            </div>
                            <BR>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body text-center">
                    <strong>Comprobar estado de Ticket</strong>
                    <div class="text-center">
                        <img src="./moduloTickets/public/build/img/crear2.png" alt="Image" width="60" height="60">
                        <h5><i class="fa fa-link"></i> Consultar estado de ticket</h5>
                    </div>
                    <form role="form" method="GET" action="consultarT.php">
                        <input type="hidden" name="view" value="ticketcon">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-6 form-label">Email</label>
                            <div class="col-12">
                                <input type="email" class="form-control" name="email_consul" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-6 form-label">ID Ticket</label>
                            <div class="col-12">
                                <input type="text" class="form-control" name="id_consul" placeholder="ID Ticket" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-link"></i> Consultar Ticket</button>
                                </div>
                                <BR>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>