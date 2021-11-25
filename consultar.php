<?php require_once('./src/pages/headers/index.php') ?>
<hr>
<div class="container p-3" style="margin-top: 8px">
    <div class="row">
        <div class="col-6">
            <h4>Consulte Viagem</h4>
            <hr>
            <p>
                Consulte as viagens que já foram agendadas e reserve seu lugar<br>
                ou agende as suas viajens a partir da nossa plataforma.
            </p><br>
            <form action="" class="form">
                <div class="p-2">
                    <small for="">Informe o método de Pesquisa <span style="color: red">*</span></small>
                    <br>
                    <select name="typeConsult" id="typeConsult" class="form-control ipts" required>
                        <option value="" disabled selected>Selecione Aqui</option>
                        <option value="contact">Por nº de Telefone</option>
                        <option value="personalCode">Por nº código de Agendamento</option>
                    </select>
                    
                    <small for="">Escreva aqui<span style="color: red">*</span></small><br>
                    <input type="text" name="valueToConsult" id="" class="form-control ipts" placeholder="Escreva aqui..." required>
                    
                    <small for=""><span style="color: red"></span></small>
                    <button type="submit" class="btn form-control ipts" data-bs-toggle="modal"
                    id="searchTravel" name="travelConsult" data-bs-target="#modalConsultarViagem">
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
            <div class="modal-dialog modal-fullscreen">
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
                                        <th scope="col">id</th>
                                        <th scope="col">places Reserved</th>
                                        <th scope="col">User Code</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Personal Code</th>
                                    </tr>
                                </thead>
                                <tbody id="searchResultTbl">
                                </tbody>
                            </table>
                        </section>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once('./src/pages/footers/index.php') ?>
