  <!-- Footer -->
<link rel="stylesheet" href="./assets/footer.css">
    
  <footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
              <h5>Siga-nos nas Redes Sociais</h5>
            <a href="index.html"><img src="./assets/img/macon-logo.png" alt="footer-logo"></a>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/pg/macontransportes/posts/"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://mobile.twitter.com/maconplays"><i class="ti-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/macon/"><i class="ti-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
            <h5>Assine nossa NewsLatter</h5>
            <form action="" class="row g-3 needs-validation" novalidate>
              <label for="" style="color: #FFFFFF">Subscreva a newsletter MACON e receba todas as ofertas, promoções e novidades na sua caixa de correio. Esteja sempre atento às melhores oportunidades.</label>
              <input type="email" name="" class="form-control ipts-footer" id="email" placeholder="Escreva seu email aqui" require=""> &ensp;
              <button 
                type="button" 
                class="form-control ipts-footer-btn" 
                id="btn-new-latter"
                onclick="handleReturnMessage()"
                >
                Subscrever
              </button>
            </form>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h5>Macon</h5>
            <!-- links -->
            <ul>
              <li><a class="link-footer" href="agendar.php">Agende Sua Viagem</a></li>
              <li><a class="link-footer" href="consultar.php">Consulte seus Dados</a></li>
              <li><a class="link-footer" href="contactos.php">Fale Connosco</a></li>
              <li><a class="link-footer" href="sobreNos.php">Saiba Sobre Nós</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="text-center bg-ligth py-4">
        <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Macon Angola - Todos os direitos Reservados. Dev. Interdigitos sa.</a></small class="text-secondary">
    </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="plugins/aos/aos.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="plugins/google-map/gmap.js"></script>
  

    <footer style="position: button-fixed">
    </footer>
    <!-- To Top -->
    <div class="scroll-top-to">
      <i class="ti-angle-up"></i>
    </div>
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
        <!-- <script src="src/js/jquery-3.6.0.min.js"></script> -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="src/js/main.js"></script>


    <script>
      function handleReturnMessage(){
        let emailReceived = document.getElementById('email').value;

        if(!emailReceived){
          return Swal.fire({
                icon: 'error',
                text: 'Por Favor, preencha o campo email.!',
              });
        } else{
          return Swal.fire({
              icon: 'success',
              text: 'Acusamos Receber Seu Email. Obrigado.!',
              showConfirmButton: false,
              timer: 2000
            });
        }
      }
    </script>
  </body>
</html>