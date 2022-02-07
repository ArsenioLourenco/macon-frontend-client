<?php require_once('./src/pages/headers/index.php') ?>

<style>
@media screen and (max-device-width: 500px) {
    
}
</style>

<head>
    <link rel="stylesheet" href="./assets/home.css">
</head>
<section class="section">
    <div class="banner-caroucel">        
        <div id="carouselExampleControls" class="carousel slide p-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/bg-macon-frota.jpg" class="d-block w-100" alt="projeto macon">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/bg-macon-frota.jpg" class="d-block w-100" alt="projeto macon">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/bg-macon-frota.jpg" class="d-block w-100" alt="projeto macon">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
	
</section>
<!--====  End of carousel Section  ====-->

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
            <div class="row">
                <div class="col colu_1">
                    <!-- As a link -->
                    <div class="" id="navbarToggleExternalContent">
                        <div class="bg-ligth p-2">
                            <form action="/src/js/main" method="post" id="form_1">
                                <h5 id="title_1">Pesquisar Viagem</h5>
                                <hr style="background-color: #368ED6;" />
                                <div class="teste p-2">
                                    <small>Selecione o Pais*</small>
                                    <select 
                                        type="select" 
                                        name="idTravel" 
                                        id="country" 
                                        class="form-control ipts"
                                    >
                                        <option value="0" disabled selected>Selecione um Pais</option>
                                    </select>

                                    <small>Origem*</small>
                                    <select 
                                        type="select" 
                                        name="idTravel" 
                                        id="source" 
                                        class="form-control ipts"
                                        required class="form-control"
                                    >
                                        <option value="0">Selecione uma Província</option>
                                    </select>

                                    <small>Destino*</small>
                                    <select 
                                        type="select" 
                                        name="idTravel" 
                                        id="destination" 
                                        class="form-control ipts"
                                        width="450px" 
                                    >
                                        <option value="0">Selecione uma Província Destino</option>
                                    </select>

                                    <small>Data de Partida*</small>
                                    <input 
                                        type="date" 
                                        name="departureDate" 
                                        id="departureDate" 
                                        class="form-control ipts"
                                    >

                                    <small>Data de Chegada</small>
                                    <input 
                                        type="date" 
                                        name="returnDate" 
                                        id="returnDate" 
                                        class="form-control ipts"
                                        width="450px"
                                    >

                                    <button type="submit" class="t-2 form-control text-center" id="searchTravel"
                                        name="searchTravel" data-bs-toggle="modal" data-bs-target="#modalPesquisa">
                                        <span id="search">
                                            <!-- <img src="./assets/icons/search.png" class="rounded float-start" alt="search"> -->
                                        </span>
                                        Pesquisar Viagem
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
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <section class="bg-light p-0">
                                    <h3 class="pb-2">Datas Disponíveis</h3>
                                    <div class="table-responsive" id="no-more-tables">
                                        <table class="table bg-white">
                                            <thead class="text-black">
                                                <tr>
                                                    <th>Partida</th>
                                                    <th>Destino</th>
                                                    <th>Horário</th>
                                                    <th>Data</th>
                                                    <th>Preço</th>
                                                    <th>Nº Transporte</th>
                                                    <th>Assentos</th>
                                                    <th>Marcar Viagem</th>
                                                </tr>
                                            </thead>
                                            <tbody id="searchResultTbl">
                                                <!-- Dados da Tabela -->
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

<!-- End of Modal Content -->
                <div class="col p-3">
                    <p>
                    <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-7">

                        </div>
                    </div>
                    </p>
                    <img src="./assets/gif/agendTravel.gif" alt="">
                    <div class="text-center p-3">
                        <h2 id="principalTitle">Agende a sua Viagem</h2>
                        <p id="descTitle1">Agende as suas viajens a partir da nossa plataforma <br>
                            ou consulte as viagens que já foram agendadas e reserve seu lugar.
                        </p>
                        <a href="agendar.php" id="agendarViagemBtn">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <br><br><br><br><br><br>

<section class="section pt-0 position-relative pull-top t-2">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
            <div class="row">
                <div class="col colu_1">
                    <div class="col-sm-12 text-dark text-center my-4">
                        <h1 id="principalTitle">Destinos em Destaque</h1>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="assets/img/Luanda1.jpg" class="card-img-top" alt="Cidade de Luanda">
                                    <div class="card-body">
                                        <h5 class="card-title">Luanda</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" id="colBtn" class="btn btn-outline-primary">Reservar</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="assets/img/Benguela1.jpg" class="card-img-top" alt="Benguela">
                                    <div class="card-body">
                                        <h5 class="card-title">Benguela</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" id="colBtn" class="btn btn-outline-primary">Reservar</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <div class="card">
                                <img src="assets/img/Whindhoek1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Windhoek</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" id="colBtn" class="btn btn-outline-primary">Reservar</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="assets/img/Whindhoek1.jpg" class="card-img-top" alt="Windhoek City">
                                    <div class="card-body">
                                        <h5 class="card-title">Windhoek</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" id="colBtn" class="btn btn-outline-primary">Reservar</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="assets/img/Huambo1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Huambo</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" id="colBtn" class="btn btn-outline-primary">Reservar</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                <img src="assets/img/Lubango.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Lubango</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" id="colBtn" class="btn btn-outline-primary">Reservar</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br><br>

<section>
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</section>
    

<?php require_once('./src/pages/footers/index.php') ?>
