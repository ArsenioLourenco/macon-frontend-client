<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Macon - Cliente</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/style.css">
  <style>

  </style>
</head>

<body>
  <div class="container t-1 p-3">
    <div class="row">
      <div class="col colu_1">
        <div class="logotype">
          <img src="./assets/img/LOGO-MACON.png" alt="Logotipo Macon" id="logotype"><br>
        </div>
        <p style="top: 100px; position: absolute; margin-bottom: 10px;" id="descLogo">Consulte & Agende Aqui Suas
          Viagens</p>
        <br>
        <div class="" id="navbarToggleExternalContent">
          <div class="bg-ligth p-2">
            <form action="" id="form_1">
              <h5 id="title_1">Consultar Viagem</h5>
              <hr style="background-color: #368ED6; ">
              <div class="teste p-2">
                <small>Origem*</small>
                <input type="text" name="idTravel" id="idTravel" class="form-control ipts" required>

                <small>Destino*</small>
                <input type="text" name="idTravel" id="idTravel" class="form-control ipts" width="450px" required>

                <small>Data de Partida*</small>
                <input type="date" name="idTravel" id="idTravel" class="form-control ipts" width="450px" required>

                <small>Data de Chegada*</small>
                <input type="date" name="idTravel" id="idTravel" class="form-control ipts" width="450px" required>

                <button type="submit" class="t-2 form-control text-center" id="consultTravel">
                  <a href="MACON-FRONT-END/pesquisa.php"></a>
                  <span id="search">
                    <!-- <img src="./assets/icons/search.png" class="rounded float-start" alt="search"> -->
                  </span>
                  Pesquisar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col p-3">
        <p>
        <div class="row">
          <div class="col-1">
            <img src="./assets/icons/smartphone.png" alt="Contactos" id="phone_1">
          </div>
          <div class="col-7">
            <p style="margin-top: 17px; margin-left: 20px;">
              <span style="color: #368ED6;">Fale Connosco</span>
              <br>
              +244 936 789 173 - 226 21 35 04
            </p>
          </div>
        </div>
        </p>
        <img src="./assets/svg/home.svg" alt="">
        <div class="text-center p-3">
          <h2 id="principalTitle">Agendar Viagem</h2>
          <p id="descTitle1">Agende as suas viajens a partir da nossa plataforma <br>
            ou consulte as viagens que já foram agendadas e reserve seu lugar.
          </p>
          <button type="submit" class="t-2 text-center" id="agendTravel" data-bs-toggle="modal"
            data-bs-target="#exampleModal" data-bs-whatever="@mdo">
            <span id="search">
              <!-- <img src="./assets/icons/search.png" class="rounded float-start" alt="search"> -->
            </span>
            Agendar Viagem
          </button>
        </div>
      </div>
    </div><br><br>
    <small>Copyrigth&copy;2021 - Interdígitos, LDA - Tecnologia de informação e serviços </small>
  </div>
  <!-- Modal Area -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agende Aqui Sua Viagem</h5>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <form>
                <small>Trajecto*</small>
                <select name="idTravel" class="form-control iptsAgend" required>
                  <option value="" selected>Selecione Seu Trajecto Aqui</option>
                  <option value="">Luanda - Uíge</option>
                  <option value="">Luanda - Uíge</option>
                  <option value="">Luanda - Uíge</option>
                  <option value="">Luanda - Uíge</option>
                </select>

                <small>Telefone*</small>
                <input type="number" name="idTravel" id="idTravel" class="form-control iptsAgend" width="450px"
                  required>

                <small>Email*</small>
                <input type="email" name="idTravel" id="idTravel" class="form-control iptsAgend" width="450px" required>

                <small>Lugares*</small>
                <input type="number" name="idTravel" id="idTravel" class="form-control iptsAgend" width="450px"
                  required>

                <span>*</span>
                <input type="submit" name="idTravel" id="AgendTravelBtn" class="form-control iptsAgend" width="450px"
                  value="Agendar Viagem" required>
              </form>
            </div>
            <div class="col">
              <img src="./assets/gif/agendTravel.gif" alt="agendTravel" class="agendTravel">
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="src/js/jquery-3.6.0.min.js"></script>
  <script src="src/js/main.js"></script>
</body>
</html>