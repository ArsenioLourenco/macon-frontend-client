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
                <p style="top: 100px; position: absolute; margin-bottom: 10px;" id="descLogo">Consulte & Agende Aqui
                    Suas
                    Viagens</p>
                <br>
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
                                                <span class="input-group-text" id="contato">#</span>
                                                <input type="tel" class="form-control" id="form-input" placeholder="Contatos"
                                                    aria-label="Contatos" aria-describedby="contato">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="my-input"></label>
                                            <div class=" input-group">
                                                <span class="input-group-text" id="Codigo-pessoal">@</span>
                                                <input type="password" class="form-control" id="form-input" placeholder="Código de agendamento"
                                                    aria-label="Codigo_pessoal" aria-describedby="Codigo-pessoal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 p-3">
                                        <button type="submit" class=" btn btn-primary " id="consulta" data-bs-toggle=""
                                            data-bs-target="" data-bs-whatever="">
        
                                            Consultar Viagens
                                        </button>
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

</html>