<?php require_once './src/pages/headers/index.php'?>

        <div class="container my-5 py-5">
          <div class="row justify-content-center mb-5">
            <nav class="navbar navbar-light col-sm-6">
              <form id="agendTravelForm" class="col-8 form-row">


                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0;"><small>Origem</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-geo-alt"></i></span>
                    <input id="agenda-viagem-origem"
                    type="text"
                    class="form-control ipts"
                    name="origem"
                    placeholder="Origem"
                    aria-label="Username"
                    aria-describedby="basic"
                    required
                    >
                  </div>
                </div>

                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0;"><small>Destino</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-geo-alt"></i></span>
                    <input id="agenda-viagem-destino"
                    type="text"
                    class="form-control ipts"
                    name="destino"
                    placeholder="Destino"
                    aria-label="Username"
                    aria-describedby="basic"
                    required
                    >
                  </div>
                </div>
                <div class="form-group">

                <div class="form-group">
                  <p id="ponto" style="margin-bottom: 0; margin-top: 20px;"><small>Nome</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                    <input
                      type="text"
                      class="form-control ipts"
                      name="clientName"
                      placeholder="Nome"
                      aria-label="Username"
                      aria-describedby="basic"
                      required maxlength="50"
                      >
                  </div>
                </div>

                <div class="form-group">
                  <p id="ponto" style="margin-bottom: 0; margin-top: 20px;"><small>Telefone</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-phone"></i></span>
                    <input
                      type="number"
                      class="form-control ipts"
                      name="phoneNumber"
                      placeholder="Telefone"
                      aria-label="Username"
                      aria-describedby="basic"
                      required maxlength="13"
                      >
                  </div>
                </div>

                <div class="form-group">

                  <p id="ponto" style="margin-bottom: 0; margin-top: 20px;"><small>Email</small></p>
                  <div class="input-group ">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                    <input
                      type="email"
                      class="form-control ipts"
                      name="email"
                      placeholder="email"
                      aria-label="Username"
                      aria-describedby="basic"
                      required maxlength="50"
                      >
                  </div>

                </div>
                <div class="form-group">

                    <div class="input-group ">
                    <p id="ponto" style="margin-bottom: 0; margin-top: 20px;"><small>Reserva</small>*</p>
                    <p id="ponto" style="margin-bottom: 0; margin-top: 20px; margin-left: 150px"><small>Bagagem</small>*</p>
                    </div>
                  
                  <div class="input-group ">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-people"></i></span>
                      <input
                      id="#agenda-viagem-placesReserved"
                      type="number"
                      class="form-control ipts"
                      name="placesReserve"
                      placeholder="Quantidade de lugares"
                      aria-label="Username"
                      aria-describedby="basic"
                        required maxlength="50">
                  
                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-briefcase"></i></span>
                        <input
                        type="number"
                        class="form-control ipts"
                        name="baggageNumber"
                        placeholder="Nº bagagem"
                        aria-label="Username"
                        aria-describedby="basic"
                          required maxlength="2">
                  </div>

                  <div class="form-group">
                    <div class="input-group ">
                    <input id="travelId"
                    type="hidden"
                    class="form-control ipts"
                    name="travelId"
                    value="${travel}"
                    aria-label="Username"
                    aria-describedby="basic"
                    >
                  </div>

                  </div>
                </div><br>
                <button type="submit" class=" t-2 form-control text-center" id="agendTravelBtn" data-bs-toggle=""data-bs-target="" data-bs-whatever="">
                  Agendar Viagem
                </button>
              </form>
            </nav>

            <div class="col-4">
              <img src="./assets/gif/agendTravel.gif" alt="agendTravel" class="agendTravel" style="width: 100%">
            </div>
          </div>

        </div>
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
            console.log(data.travel);
            document.getElementById("travelId").value = data.travel;
            </script>

<?php require_once './src/pages/footers/index.php'?>