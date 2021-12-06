<?php require_once('./src/pages/headers/index.php') ?>
<hr>
<div class="container p-3" style="margin-top: 8px;">
    <div class="row">
        <div class="col-6">
            <h4>Consulte Viagem</h4>
            <hr>
            <p>
                Consulte as viagens que já foram agendadas e reserve seu lugar<br>
                ou agende as suas viajens a partir da nossa plataforma.
            </p><br>

            <form id="form_consultar">
                <div class="p-2">
                    <br>
                    <small for="">Consulte a sua Viagem<span style="color: red">*</span></small><br>
                    <input type="tel" name="valueToConsult" id="contact" class="form-control ipts" placeholder="Nº Telefone/Código de Reserva" required>
                    <small for=""><span style="color: red"></span></small>

                    <button 
                        type="submit" 
                        class="btn form-control ipts" 
                        data-bs-toggle="modal"
                        id="travelConsult" 
                        name="travelConsult" 
                        data-bs-target="#modalConsultarViagem">
                        Consultar Viagem
                    </button>

                </div>
            </form>
        </div>
        <div class="col-6">
            <img src="./assets/gif/consultTravel.gif" alt="">
        </div>
    </div>
</div>
    <!-- Modal Consultar Viagem-->
    <div class="modal fade" id="modalConsultarViagem" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalConsultarViagem">Consultar Viagem
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Origem</th>
                                        <th scope="col">Destino</th>
                                        <th scope="col">Horário</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Terminal</th>
                                        <th scope="col">Transporte</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Nº Assentos</th>
                                        <th scope="col">Codigo de Agendamento</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Estado de reserva</th>
                                        <th scope="col">Tipo de Transporte</th>
                                    </tr>
                                </thead>
                                <tbody id="searchResultTbl">
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

    <?php require_once('./src/pages/footers/index.php') ?>
<!-- <script src="./src/js/consultar.js"></script> -->

<script src="./src/js/consultar.js">

</script>