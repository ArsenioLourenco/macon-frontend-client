<?php require_once('./src/pages/headers/index.php') ?>
<hr>
<div class="container p-3" style="margin-top: 8px">
    <div class="row">
        <div class="col-6">
            <h4>Fale Connosco</h4>
            <hr>
            <p>
                Preencha o formulário abaixo, para reclamar, denunciar, sugerir ou informar alguma coisa.
            </p><br>
            <form action="" class="form">
                <div class="p-2">
                    <small for="">Qual é o seu laço com a macon?<span style="color: red">*</span></small>
                    <br>
                    <select name="typeConsult" id="typeConsult" class="form-control ipts" required>
                        <option value="" disabled selected>Selecione Aqui</option>
                        <option value="">Simpatizante.</option>
                        <option value="">Cliente.</option>
                        <option value="">Colaborador.</option>
                        <option value="">Não tenho nenhum laço com a macon.</option>
                    </select>
                    
                    <small for="">Nome Completo<span style="color: red">*</span></small><br>
                    <input type="text" name="" id="" class="form-control ipts" placeholder="Escreva aqui..." required>

                    <small for="">Email<span style="color: red">*</span></small><br>
                    <input type="text" name="" id="" class="form-control ipts" placeholder="Escreva aqui..." required>

                    <small for="">Asunto<span style="color: red">*</span></small><br>
                    <input type="text" name="" id="" class="form-control ipts" placeholder="Escreva aqui..." required>

                    <small for="">Mensagem<span style="color: red">*</span></small><br>
                    <textarea name="" id="" cols="30" rows="10" class="form-control ipts-text-area" placeholder="Escreva aqui..." required></textarea>
                    
                    <small for=""><span style="color: red"></span></small>
                    <button type="submit" class="btn form-control ipts" data-bs-toggle="modal"
                    id="searchTravel" name="travelConsult" data-bs-target="#modalConsultarViagem">
                        Consultar Viagem
                    </button>
                </div>
            </form>
        </div>
        <div class="col-6 p-2 t-2">
            <img src="./assets/gif/envelope.gif" alt="" style="width: 100%; heigth: 100%">
        </div>
    </div>
</div>

<?php require_once('./src/pages/footers/index.php') ?>
