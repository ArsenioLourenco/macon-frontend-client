<?php require_once './src/pages/headers/index.php'?>
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
                            <form id="pagamentoForm" class="form  px-5">
                                <div class="form-group ">
                                    <label for="my-input">Entidade</label>
                                    <div class="input-group ">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-check-fill"></i></span>
                                        <input id="entidade"
                                        type="text"
                                        class="form-control ipts"
                                        name="entidade"
                                        value="Macon"
                                        placeholder="Entidade"
                                        aria-label="Username"
                                        aria-describedby="basic"
                                        required>
                                    </div><br>
                                </div>
                                <div class="form-group ">
                                    <label for="my-input">Referência</label>
                                    <div class="input-group ">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-currency-exchange"></i></span>
                                        <input type="text" id="reference" name="reference" class="form-control" placeholder="Referência" aria-label="Username" aria-describedby="basic-addon1">
                                    </div><br>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Valor</label>
                                    <div class="input-group  ">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-cash-coin"></i></span>
                                        <input type="number" class="form-control" id="pricevalor" placeholder="Valor" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group  ">
                                        <input type="hidden" class="form-control" id="agendId" name="agendTravelCode"  aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="my-3">
                                    <button class="btn btn-outline-primary me-2" type="submit">Pagar por Referência</button>
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

<!-- <script>
        var text = "";
        var possible = "abcde0123456789";
        for (var i = 0; i < 15; i++){
            text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    // document.getElementById("referencia").value = text;
</script> -->

<script>
            var query = location.search.slice(1);
            var partes = query.split('&');
            var data = {};
            partes.forEach(function (parte) {
                var chaveValor = parte.split('=');
                var chave = chaveValor[0];
                var valor = chaveValor[1];
                data[chave] = valor;
                console.log(valor);
            });
            console.log(data.price);
            document.getElementById("pricevalor").value = data.price;
            document.getElementById("reference").value = data.reference;
            document.getElementById("agendId").value = data.agendamento;
            </script>

<?php require_once './src/pages/footers/index.php'?>
