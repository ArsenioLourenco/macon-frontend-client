<?php require_once './src/pages/headers/index.php'?>

        <div class="container my-5 py-5">
          <div class="row justify-content-center mb-5">
            <nav class="navbar navbar-light col-sm-6">
              <form id="agendTravelForm" class="col-8 form-row" method="post">
                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0;"><small>Origem</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-geo-alt"></i></span>
                    <input id="agenda-viagem-origem"
                    type="text"
                    class="form-control ipts"
                    name="origem"
                    data-table-column-name="Origem"
                    placeholder="Origem"
                    aria-label="Username"
                    aria-describedby="basic"
                    required>
                  </div>
                </div>
                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0; margin-top: 5px"><small>Destino</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-geo-alt"></i></span>
                    <input id="agenda-viagem-destino"
                    type="text"
                    class="form-control ipts"
                    name="destino"
                    data-table-column-name="Destino"
                    placeholder="Destino"
                    aria-label="Username"
                    aria-describedby="basic"
                    required
                    >
                  </div>
                </div>
                <div class="form-group">

                <div class="form-group">
                  <p id="ponto" style="margin-bottom: 0; margin-top: 5px;"><small>Nome</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                    <input
                      type="text"
                      class="form-control ipts"
                      name="clientName"
                      data-table-column-name="Nome Completo"
                      placeholder="Nome"
                      aria-label="Username"
                      aria-describedby="basic"
                      required maxlength="50"
                      >
                  </div>
                </div>

                <div class="form-group">
                  <p id="ponto" style="margin-bottom: 0; margin-top: 5px;"><small>Telefone</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-phone"></i></span>
                    <input
                      type="number"
                      class="form-control ipts"
                      name="phoneNumber"
                      data-table-column-name="Telefone"
                      placeholder="Telefone"
                      aria-label="Username"
                      aria-describedby="basic"
                      required maxlength="13"
                      >
                  </div>
                </div>

                <div class="form-group">

                  <p id="ponto" style="margin-bottom: 0; margin-top: 5px;"><small>Email</small></p>
                  <div class="input-group ">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                    <input
                      type="email"
                      class="form-control ipts"
                      name="email"
                      data-table-column-name="E-mail"
                      placeholder="email"
                      aria-label="Username"
                      aria-describedby="basic"
                      required maxlength="50"
                      >
                  </div>

                </div>
                <div class="form-group">

                    <div class="input-group ">
                    <p id="ponto" style="margin-bottom: 0; margin-top: 5px;"><small>Reserva</small>*</p>
                    <p id="ponto" style="margin-bottom: 0; margin-top: 5px; margin-left: 150px"><small>Bagagem</small>*</p>
                    </div>

                  <div class="input-group ">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-people"></i></span>
                      <input
                      id="#agenda-viagem-placesReserved"
                      type="number"
                      class="form-control ipts"
                      name="placesReserve"
                      data-table-column-name="Lugares Reservados"
                      placeholder="Nº de lugares"
                      aria-label="Username"
                      aria-describedby="basic"
                        required maxlength="50">

                      <span class="input-group-text" id="basic-addon1"><i class="bi bi-briefcase"></i></span>
                        <input
                        type="number"
                        class="form-control ipts"
                        name="baggageNumber"
                        data-table-column-name="Bagagens"
                        placeholder="Nº bagagens"
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

                <button type="submit" class="btn btn-primary" id="agendTravel" name="agendtravel" data-bs-target="#exampleModal">
                  Agendar Viagem
                </button>
                </div>
              </form>
            </nav>

            <!-- Modal Agendar Viagem -->
            <div class="modal fade" id="consultingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                  <table id="consultingModalDataTable" class="table bg-white">
                    <thead class="text-black">
                      <tr>
                        <th>Nome Completo</th>
                        <th>Email</th>
                        <th>Rota</th>
                        <th>Telefone</th>
                        <th>Data</th>
                        <th>Horario</th>
                      </tr>
                    </thead>
                    <tbody id="agendTable">
                      <tr>
                        <td>Tentar</td>
                        <td>Tentar</td>
                        <td>Tentar</td>
                        <td>Tentar</td>
                        <td>Tentar</td>
                        <td>Tentar</td>
                      </tr>
                    </tbody>
                  </table>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="pagar" name="pagar">Pagar</button>
                    <button type="button" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    <a href="index.php" style="text-decoration:none; color:white !important;">Cancelar</a>
                  </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-4">
              <img src="./assets/svg/home.svg" alt="agendTravel" class="agendTravel" style="width: 100%">
            </div>
          </div>

        </div>
        <script>
            var query = location.search.slice(1);
            var parametros = query.split('&');
            var data = {};
            parametros.forEach(function (parte) {
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