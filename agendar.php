<?php require_once('./src/pages/headers/index.php') ?>
  
        <div class="container">
          <div class="row justify-content-center mb-5">
            <nav class="navbar navbar-light col-sm-6">
              <form id="agendTravelForm" class="col-8 form-row">
                
                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0;"><small>Origem</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"></i></span>
                    <input id="agenda-viagem-origem" type="text" class="form-control ipts" name="origem" placeholder="Origem" aria-label="Username" aria-describedby="basic">
                  </div>
                </div>

                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0;"><small>Destino</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"></i></span>
                    <input id="agenda-viagem-destino" type="text" class="form-control ipts" name="destino" placeholder="Destino" aria-label="Username" aria-describedby="basic">
                  </div>
                </div>

                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0;"><small>Preço</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Kz</i></i></span>
                    <input id="agenda-viagem-preco" type="text" class="form-control ipts" name="destino" placeholder="Preço" aria-label="Username" aria-describedby="basic">
                  </div>
                </div>

                <input id="agenda-viagem-id" type="hidden" class="form-control ipts" name="travelId" placeholder="Trajecto" aria-label="Username" aria-describedby="basic">

                <div class="form-group">
                  <p id="ponto" style="margin-bottom: 0; margin-top: 20px;"><small>Telefone</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-lines-fill"></i></span>
                    <input 
                      type="number" 
                      class="form-control ipts" 
                      name="phoneNumber" 
                      placeholder="Telefone" 
                      aria-label="Username" 
                      aria-describedby="basic" 
                      required maxlength="13">
                  </div>
                </div>
                
                <div class="form-group">
                  
                  <p id="ponto" style="margin-bottom: 0; margin-top: 20px;"><small>Email</small></p>
                  <div class="input-group ">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-at"></i></span>
                    <input 
                      type="email" 
                      class="form-control ipts" 
                      ame="email" 
                      placeholder="Email" 
                      aria-label="Username" 
                      aria-describedby="basic"
                      required maxlength="50">
                  </div>

                </div>
                <div class="form-group">
                  
                  <p id="ponto" style="margin-bottom: 0; margin-top: 20px;"><small>Quantidade de lugares</small>*</p>
                  <div class="input-group ">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-plus-fill"></i></span>
                    <input 
                    type="number" 
                    class="form-control ipts" 
                    name="placesReserve" 
                    placeholder="Quantidade de lugares" 
                    aria-label="Username" 
                    aria-describedby="basic">
                  </div>
                </div><br>
                <button type="submit" class=" btn btn-primary ipts-btn" id="consulta" data-bs-toggle=""data-bs-target="" data-bs-whatever="">
                  Agendar Viagem
                </button>
              </form>
            </nav>

            <div class="col-4">
              <img src="./assets/gif/agendTravel.gif" alt="agendTravel" class="agendTravel" style="width: 100%">
            </div>
          </div>

        </div>

<?php require_once('./src/pages/footers/index.php') ?>
