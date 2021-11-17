<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macon - Consultar_Viagens</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="/assets/consultarStyle.css">
    <link rel="stylesheet" href="/assets/bootstrap-icons/font/bootstrap-icons.css">
    <style>

    </style>

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="src/js/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="row col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="logotype">
              <a class="nav-link" aria-current="page" href="index.php"><img src="./assets/img/LOGO-MACON.png" alt="Logotipo Macon" id="logotype" style="height: 60px;">
              </a>
              <br>
              <span style="top: 80px; position: absolute; margin-bottom: 10px;" id="descLogo">Consulte & Agende Aqui Suas
                Viagens</span>
            </div>
            <div class="collapse navbar-collapse dis" id="navbarText" style="display:flex;">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="consultar.php">Consultar Viagem</a>
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



    <div class="container t-1 p-3">
        <div class="row">
            <div class="col colu_1">
                
               
                <div class="container ">

                    <div class="row ">
                        <div class="text-center p-3">
                            <h2 id="principalTitle">Consultar Viagens</h2>
                            <p id="descTitle1"> Consulte as viagens que já foram agendadas e reserve seu lugar<br>
                                ou agende as suas viajens a partir da nossa plataforma.
                            </p>
                        </div>
                        <div class="row justify-content-center mb-5">
                            <nav class="navbar navbar-light col-sm-6">
                                <form class=" col-12">
                                    <div class="form-row" >
                                        <div class="form-group">
                                            <label for="my-input"></label>
                                            <div class=" input-group">
                                                <span class="input-group-text" id="contato"><i class="bi bi-person-fill"></i></span>
                                                <input type="tel" class="form-control" id="form-input" placeholder="Contatos"
                                                    aria-label="Contatos" aria-describedby="contato">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="my-input"></label>
                                            <div class=" input-group">
                                                <span class="input-group-text" id="Codigo-pessoal">#</span>
                                                <input type="password" class="form-control" id="form-input" placeholder="Código de agendamento"
                                                    aria-label="Codigo_pessoal" aria-describedby="Codigo-pessoal">
                                            </div>
                                        </div>
                                    </div>
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>




                                    </div>
                                </form>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    






</body>
<!-- Footer -->
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
   
</html>