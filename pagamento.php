<?php require_once('./src/pages/headers/index.php') ?>
<style>
#cancelar-butoon:hover{
    background-color: red;
    color: white;
}
.card-body{
    /* 0 6px 20px 0 rgba(0, 0, 0, 0.19) */
    border-style: none;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6) ;
}
#cards{
    border-style: none;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
}
</style>
<hr>
<div class="container p-3" id="paymentTravel" style="margin-top: 8px">
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-body col-12">
                    <div class="col-6">
                        <div class="card col-sm-12 col-md-12 col-lg-12 my-4  mx-2" id="cards">
                            <h2 class="card-title text-center p-2">Pagamento Por Referencia</h2>
                            <form action="" class="form  px-5">
                                <div class="form-group ">
                                    <label for="my-input">Entidade</label>
                                    <div class="input-group ">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-check-fill"></i></span>
                                        <input 
                                        type="text" 
                                        class="formEntity" 
                                        placeholder="Entidade" 
                                        aria-label="Username" 
                                        aria-describedby="basic-addon1"
                                        >
                                    </div><br>
                                </div>
                                <div class="form-group ">
                                    <label for="my-input">Referência</label>
                                    <div class="input-group ">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-currency-exchange"></i></span>
                                        <input 
                                        type="text" 
                                        class="formReference" 
                                        placeholder="Referência" 
                                        aria-label="Username" 
                                        aria-describedby="basic-addon1"
                                        >
                                    </div><br>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Motante</label>
                                    <div class="input-group  ">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-cash-coin"></i></span>
                                        <input 
                                        type="text" 
                                        class="formAmount" 
                                        placeholder="Motante" 
                                        aria-label="Username" 
                                        aria-describedby="basic-addon1"
                                        >
                                    </div>
                                </div>

                                <div class="my-3">
                                    <button id="buttonPagar" class="btn btn-outline-primary me-2" type="buttonPagar">Pagar por Referência</button>
                                    <button class="btn  me-2" type="button" id="cancelar-butoon">cancelar</button>
                                </div>

                                <!-- <button type="submit" class="btn form-control " data-bs-toggle="modal" id="" name="travelConsult" data-bs-target="#modalConsultarViagem"> -->

                                </button>
                            </form>
                        </div>

                    </div>

                    <div class="col-6 ">
                        <img src="./assets/img/puyOnline.png" class="img-thumbnail" style="margin-left: 100%; margin-top: -430px; width: 700px; border: none;"  alt="">
                    </div>
                    <hr>
                    <div class="col-12 text-center">
                        <h2>Pagamento Normal</h2>
                        <div class="">
                            <p>Também pode se fazer o pagamento por via normal. <br> 
                                Basta obter o seu bilhete/passagem e dirigir-se ao terminal que lhe for indicado
                            </p>
                        </div>
                        <button class="btn btn-primary me-2" type="button">Obter o bilhete</button>
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
<script src="src/js/payment.js">

</script>
<?php require_once('./src/pages/footers/index.php') ?>