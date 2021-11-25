<?php require_once('./src/pages/headers/index.php') ?>
<head>
    <link rel="stylesheet" href="./assets/home.css">
</head>
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">A Carteira Digital Que Facilitará a tua Vida.</h1>
				<p class="text-white mb-5">Baixe a Aplicação, disfrute de nossos serviços e facilite a sua vida.</p>
				<a href="#" class="btn btn-main-md">BAIXE AGORA!</a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="images/mobile.png" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
            <div class="row">
            <div class="col colu_1">
                <!-- As a link -->
                <div class="" id="navbarToggleExternalContent">
                    <div class="bg-ligth p-2">
                        <form action="/src/js/main" method="post" id="form_1">
                            <h5 id="title_1">Consultar Viagem</h5>
                            <hr style="background-color: #368ED6; ">
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
                                    width="450px" 
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
                    </div>
                    <div class="col-7">

                    </div>
                </div>
                </p>
                <img src="./assets/svg/home.svg" alt="">
                <div class="text-center p-3">
                    <h2 id="principalTitle">Agendar Viagem</h2>
                    <p id="descTitle1">Agende as suas viajens a partir da nossa plataforma <br>
                        ou consulte as viagens que já foram agendadas e reserve seu lugar.
                    </p>
                    <a href="agendar.php" id="agendarViagemBtn">
                        <!-- <button type="submit" class="t-2 form-control text-center" id="searchTravel" name="searchTravel" data-bs-toggle="modal" data-bs-target="#modalPesquisa">
                            <span id="search">
                            </span>
                            Agendar Viagem
                        </button> -->
                    </a>
                </div>
            </div>
        </div><br><br>
    </div><br>
				<!-- <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                    <img src="./assets/svg/travels.svg" alt="" class="img-icon" style="width: 15%;">
					<h3 class="mt-4 text-capitalize h5 ">Quais Locais Viajamos?</h3>
					<p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                    <img src="./assets/svg/agend.svg" alt="" class="img-icon" style="width: 15%;">
					<h3 class="mt-4 text-capitalize h5 ">Como Reservar seu Lugar?</h3>
					<p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                    <img src="./assets/svg/pay.svg" alt="" class="img-icon" style="width: 15%;">
					<h3 class="mt-4 text-capitalize h5 ">Como Pagar?</h3>
					<p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
					</p>
				</div> -->
			</div>
		</div>
	</div>
</section>
    

<?php require_once('./src/pages/footers/index.php') ?>
