<?php
  if(isset($POST['consultTravel'])){
    echo var_dump($POST['consultTravel']);
  }
?>

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
  <div class="container t-1 p-4">
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
            <form action="/src/js/main" method="post" id="form_1">
              <h5 id="title_1">Consultar Viagem</h5>
              <hr style="background-color: #368ED6; ">
              <div class="teste p-2">
              <small>Selecione o Pais*</small>
                <select type="select" name="idTravel" id="country" class="form-control ipts" required >
                  <option value="0" disabled selected>Selecione um Pais</option>
                </select>

                <small>Origem*</small>
                <select type="select" name="idTravel" id="source" class="form-control ipts" required >
                  <option value="0">Selecione uma Província</option>
                </select>

                <small>Destino*</small>
                <select type="select" name="idTravel" id="destination" class="form-control ipts" width="450px" required>
                  <option value="0">Selecione uma Província Destino</option>
                </select>

                <small>Data de Partida*</small>
                <input type="date" name="departureDate" id="departureDate" class="form-control ipts" width="450px" required>

                <small>Data de Chegada*</small>
                <input type="date" name="returnDate" id="returnDate" class="form-control ipts" width="450px" required>

                <button type="submit" class="t-2 form-control text-center" id="consultTravel" name="consultTravel" data-bs-toggle="modal" data-bs-target="#modalPesquisa">
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

      <!-- Modal Pesquisa -->

<div class="modal fade" id="modalPesquisa" tabindex="-1" aria-labelledby="modalPesquisa" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPesquisa">Resultados da Pesquisa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <section class="bg-light p-0">
    <h3 class="pb-2">Datas Disponíveis</h3>
    <div class="table-responsive" id="no-more-tables">
      <table class="table bg-white">
        <thead class="bg-primary text-black">
          <tr>
            <th>Partida</th>
            <th>Destino</th>
            <th>Horário</th>
            <th>Data</th>
            <th>Preço</th>
            <th>Marcar Viagem</th>
          </tr>
          
        </thead>
        <tbody id="searchResultTbl">
          
        </tbody>
      </table>
    </div>
  </section>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>
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
          <a href="agenda.php" class="btn t-2 text-center" id="agendarViagemBtn">
            Agendar Viagem
          </a>
        </div>
      </div>
    </div><br><br>
    <small>Copyrigth&copy;2021 - Interdígitos, LDA - Tecnologia de informação e serviços </small>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="src/js/jquery-3.6.0.min.js"></script>
  <script src="src/js/main.js"></script>
</body>
</html>