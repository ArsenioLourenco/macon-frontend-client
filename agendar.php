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
  <link rel="stylesheet" href="/assets/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>

  <div class="row col-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="logotype">
          <a class="nav-link active" aria-current="page" href="index.php"><img src="./assets/img/LOGO-MACON.png" alt="Logotipo Macon" id="logotype" style="height: 60px;">
          </a>
          <br>
          <span style="top: 80px; position: absolute; margin-bottom: 10px;" id="descLogo">Consulte & Agende Aqui Suas
            Viagens</span>
        </div>
        <div class="collapse navbar-collapse dis" id="navbarText" style="display:flex;">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consultar.php">Consultar Viagem</a>
            </li>
         
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contactos</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>
  
        <div class="container">
          <div class="row justify-content-center mb-5">
            <nav class="navbar navbar-light col-sm-6">
              <form id="agendTravelForm" class="col-8 form-row">
                
                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0;"><small>Origem</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"></i></span>
                    <input id="agenda-viagem-origem" type="text" class="form-control" name="origem" placeholder="Origem" aria-label="Username" aria-describedby="basic">
                  </div>
                </div>

                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0;"><small>Destino</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"></i></span>
                    <input id="agenda-viagem-destino" type="text" class="form-control" name="destino" placeholder="Destino" aria-label="Username" aria-describedby="basic">
                  </div>
                </div>

                <div class="form-group">
                  <p class="" id="ponto" style="margin-bottom: 0;"><small>Preço</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Kz</i></i></span>
                    <input id="agenda-viagem-preco" type="text" class="form-control" name="destino" placeholder="Preço" aria-label="Username" aria-describedby="basic">
                  </div>
                </div>

                <input id="agenda-viagem-id" type="hidden" class="form-control" name="travelId" placeholder="Trajecto" aria-label="Username" aria-describedby="basic">

                <div class="form-group">
                  <p id="ponto" style="margin-bottom: 0; margin-top: 20px;"><small>Telefone</small>*</p>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-lines-fill"></i></span>
                    <input 
                      type="number" 
                      class="form-control" 
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
                      class="form-control" 
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
                    class="form-control" 
                    name="placesReserve" 
                    placeholder="Quantidade de lugares" 
                    aria-label="Username" 
                    aria-describedby="basic">
                  </div>
                </div><br>
                <button type="submit" class=" btn btn-primary " id="consulta" data-bs-toggle=""data-bs-target="" data-bs-whatever="">
                  Agendar Viagem
                </button>
              </form>
            </nav>

            <div class="col-4">
              <img src="./assets/gif/agendTravel.gif" alt="agendTravel" class="agendTravel">
            </div>
          </div>

        </div>



        <!-- Footer     -->

        <footer>
		<div class="container">
			<div class="row text-center py-5">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h3 class="text-center">CONTACT INFO</h3>
					<p>(888) 888-8888<br>
					email@nuno.com</p>
				</div>
        <br>
        <small >Copyrigth&copy;2021 - Interdígitos, LDA - Tecnologia de informação e serviços </small>
			</div><!--- End of Row -->
		</div><!--- End of Container -->
	</footer> 

        <!-- <footer class="row col-12  bg-light">
          <div class="footers text-center">
            <small >Copyrigth&copy;2021 - Interdígitos, LDA - Tecnologia de informação e serviços </small>
          </div>
        </footer>
        -->
        
      
      
   
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
    <script src="src/js/jquery-3.6.0.min.js"></script>
    <script src="src/js/main.js"></script>
    <script src="src/js/localization/messages_pt_PT.js"></script>
    
</body>

</html>