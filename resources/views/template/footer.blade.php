<div class="d-flex justify-content-center content-footer">
    <div class="card-deck container">
        <div class="card">
            <div class="card-body d-flex justify-content-center">
                <div>
                    <h5 data-target="contant-footer" class="card-title d-flex justify-content-between js-collapse">Suscríbete y obtén bono por 10% dto
                        <div class="icon-footer"><i data-icon="plus" class="fas fa-plus"></i></div>
                    </h5>
                    {{-- <div class="card-hr">
                        <hr>
                    </div> --}}
                    <div class="clearfix"></div>

                    <div id="contant-footer" class="collapse-footer">

                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-left" placeholder="Correo electrónico" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary border-right" type="button" id="button-addon2">Enviar</button>
                            </div>
                        </div>

                        <p class="card-text">
                            ©2019 IPHONEQUILLA SAS. Todos los derechos reservados.
                            Barranquilla, Colombia.
                        </p>
                        <p class="card-text">
                            Desarrollado por: Blackhost SAS
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-letter card-not">
            <div class="card-body d-flex justify-content-center">
                <div>
                    <h5 class="card-title">
                        Contáctanos
                    </h5>
                    {{-- <div class="card-hr">
                        <hr>
                    </div> --}}
                    <div class="clearfix"></div>

                    <div class="card-text d-flex align-items-center mb-2">
                        <div class="icon-contact rounded-circle d-flex align-items-center justify-content-center">
                            <i class="icon-ic_stay"></i>
                        </div>
                        Comunícate con nosotros: (+57) {{$info->number_whatsapp}}
                    </div>
                    <div class="card-text d-flex align-items-center mb-2">
                        <div class="icon-contact rounded-circle d-flex align-items-center justify-content-center">
                            <i class="icon-ic_mail"></i>
                        </div>
                        Escríbenos a: {{$info->email_contact}}
                    </div>
                    {{-- <div class="input-group mb-3 input-footer">
                        <input type="text" class="form-control" placeholder="Escribe tu correo" aria-label="Escribe tu correo" aria-describedby="button-addon2">
                        <div class="c-f-button">
                            <div class="input-group-append d-flex justify-content-end">
                                <a class="btn btn-outline-secondary" id="button-addon2">Enviar</a>
                            </div>
                        </div>
                    </div> --}}

                    <div class="d-flex flex-row bd-highlight mb-3 card-icon">
                        <a class="p-2 bd-highlight">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="p-2 bd-highlight">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    {{-- <h5 data-target="srvices-footer" class="card-title d-flex justify-content-between js-collapse">Servicio al cliente
                        <div class="icon-footer"><i data-icon="plus" class="fas fa-plus"></i></div>
                    </h5> --}}
                    {{-- <div class="card-hr">
                        <hr>
                    </div> --}}
                    <div class="clearfix"></div>
                    <div id="srvices-footer" class="collapse-footer">
                        <ul class="list-group">
                            <li class="list-group-item mb-2 d-flex justify-content-between align-items-center rounded">
                                Sobre nosotros
                                <i class="fas fa-angle-down"></i>
                            </li>
                            <li class="list-group-item mb-2 d-flex justify-content-between align-items-center rounded">
                                Información legal
                                <i class="fas fa-angle-down"></i>
                            </li>
                            <li class="list-group-item mb-2 d-flex justify-content-between align-items-center rounded">
                                Servicio al cliente
                                <i class="fas fa-angle-down"></i>
                            </li>
                            <li class="list-group-item mb-2 d-flex justify-content-between align-items-center rounded">
                                Puntos de venta
                                <i class="fas fa-angle-down"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
