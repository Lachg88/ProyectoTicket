<section class="ticket">

    <div class="ticket__row">
        <div>
            <picture class="ticket__image">
                <source srcset="./moduloTickets/public/build/img/soporte.webp" type="image/webp">
                <img src="./moduloTickets/public/build/img/soporte.png" alt="Sistema de Soporte SIGU">
            </picture>
        </div>
        <div class="ticket__description">
            <div class="ticket__title">Módulo de Soporte SIGU</div>
            <div class="ticket__text">Nuestro sistema es fácil de usar. Si tienes algún problema con uno de nuestros módulos, puedes enviarnos un ticket de soporte. Estamos aquí para ayudarte a resolver cualquier inconveniente de manera rápida y eficiente.</div>
            <div class="ticket__instruction">Puedes generar un nuevo ticket, o si ya has enviado un ticket, puedes consultar su estado ingresando tu <strong>Ticket ID</strong>.</div>
        </div>
    </div>

    <div class="ticket__container">

        <div class="ticket__cards">
        
            <div class="ticket-card">
                <header class="ticket-card__title"><p>Crear Nuevo Ticket</p></header>
                <div class="ticket-card__info">
                    <!-- <img src="./moduloTickets/public/build/img/crear.png" alt="Crear nuevo ticket" class="ticket-card__image"> -->
                    <p class="ticket-card__subtitle"><i class="fa-solid fa-ticket ticket-card__icon"></i> Generar un Nuevo Ticket</p>
                    <p class="ticket-card__text">Envíanos una solicitud de soporte y te ayudaremos a resolver el problema.</p>
                    <div class="ticket-card__button-container"><a href="index.php?pag=Alta de Ticket" class="ticket-card__button ticket-card__enlace">Crear Ticket</a></div>
                </div>
            </div>
        
            <div class="ticket-card">
                <header class="ticket-card__title"><p>Consultar Estado del Ticket</p></header>
                <div class="ticket-card__info">
                    <!-- <img src="./moduloTickets/public/build/img/crear2.png" alt="Consultar estado del ticket" class="ticket-card__image"> -->
                    <p class="ticket-card__subtitle"><i class="fas fa-info-circle ticket-card__icon"></i> Verificar Estado del Ticket</p>
                    
                    <p class="ticket-card__text">Si deseas consultar el estado de un ticket existente, utiliza este formulario.</p>
                    <form action="consultarT.php" method="GET" class="ticket-card__form">
                        <label for="email" class="ticket-card__label">Correo Electrónico</label>
                        <input type="email" id="email" name="email_consul" placeholder="Introduce tu correo" class="ticket-card__input" required>
                        <label for="ticket-id" class="ticket-card__label">ID del Ticket</label>
                        <input type="text" id="ticket-id" name="id_consul" placeholder="Introduce el ID del ticket" class="ticket-card__input" required>
                        <div class="ticket-card__button-container">
                            <button type="submit" class="ticket-card__button">Consultar Ticket</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    
</section>
