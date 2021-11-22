// $(document).ready(function() {
       $("#form_1").validate({
              rules : {
                     source:{
                           required:true,
                           minlength:3
                    },
                    destination:{
                           required:true
                    },
                    departureDate:{
                           required:true
                    }                                 
              },
              messages:{
                    nome:{
                           required:"Por favor, informe seu nome",
                           minlength:"O nome deve ter pelo menos 3 caracteres"
                    },
                    email:{
                           required:"É necessário informar um email"
                    },
                    mensagem:{
                           required:"A mensagem não pode ficar em branco"
                    }      
              }
          });
          
// })


