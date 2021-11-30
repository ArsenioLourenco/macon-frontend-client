<?php require_once('./src/pages/headers/index.php') ?>

<hr>
<div class="container p-3" style="margin-top: 8px">
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-body col-12">
                    <div class="col-6">
                        <div class="card col-11">
                            <h2 class="card-title text-center p-2">Pagamento Por Referencia</h2>
                            <form action="" class="form  px-5">
                                <div class="form-group ">
                                    <label for="my-input">Text</label>
                                    <div class="input-group ">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control " placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Text</label>
                                    <div class="input-group ">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Text</label>
                                    <div class="input-group  ">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>



                                <div class="my-3">
                                    <button class="btn btn-outline-primary me-2" type="button">Main button</button>
                                    <button class="btn btn-outline-success me-2" type="button">cancelar</button>
                                </div>

                                <!-- <button type="submit" class="btn form-control " data-bs-toggle="modal" id="" name="travelConsult" data-bs-target="#modalConsultarViagem"> -->

                                </button>
                            </form>
                        </div>

                    </div>

                    <div class="col-6 ">
                        <img src="./assets/img/puyOnline.png" class="img-thumbnail" style="margin-left: 100%; margin-top: -330px;"  alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Consultar Viagem-->
<!-- <div class="modal fade" id="modalConsultarViagem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
</div> -->

<?php require_once('./src/pages/footers/index.php') ?>