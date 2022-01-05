// Selecionar a consulta com Id 
const consultTravelBtn = $("#searchTravel"),
  searchResultTable = $("#searchResultTbl"),
  countryList = $("#country"),
  provinceListSource = $("#source"),
  provinceListDestination = $("#destination"),
  agendTravelForm = $('#agendTravelForm'),
  baseURL = 'http://192.168.40.32:6800/';

// Bind events 
consultTravelBtn.on("click", handleConsultTravel);
countryList.on('change', handleCountryListChange);

// Agend Travel Submition 
agendTravelForm.on('submit', agendTravel);

function agendTravel(event) {
  event.preventDefault();

  var consultingModal = new bootstrap.Modal(document.querySelector('#consultingModal'));
  const consultingModalDataTable = $('#consultingModalDataTable');
  const cModalThead = consultingModalDataTable.find('thead tr');
  const cModalTbody = consultingModalDataTable.find('tbody tr');

  // Limpar informações no cabeçalho e no corpo da tabela
  cModalThead.html('');
  cModalTbody.html('');

  // Listar informações do Formulario de Agendamento de Viagens excluindo campos ocultos
  $(this).find('input:not([type="hidden"])').each(function(index, inputElement) {
    const tableColumnName = $(inputElement).attr('data-table-column-name');
    const inputValue = $(inputElement).val();

    cModalThead.append(`<th>${tableColumnName}</th>`);
    cModalTbody.append(`<td>${inputValue}</td>`);
  });

  consultingModal.show();
}
//Função para guardar dados
  $('#guardar').on('click', guardarTravel);
  
function guardarTravel(event){
  event.preventDefault();

  $.ajax({
    type: "POST",
    url: "http://192.168.40.32:6800/client/travel/agend",
    data: $(agendTravelForm).serialize(),
    dataType: "JSON",
    success: function (response) {

      const { message, success } = response;
      console.log('DADOS Agendamento: ', message);

     console.log(message, success);

     const [ seats, route, departureDate, price, reservationCode ] = message.split('.') ?? window.alert('Failed');
        
      window.open(
        `http://localhost:3000/generatepdf.php?seats=${seats}&route=${route}&departureDate=${departureDate}&price=${price}&reservationCode=${reservationCode}`,
        '_blank'

      )

    },
    error: function (response) {
      console.log("Error: ", response);
      const { responseJSON: {message, success} } = response;
        // console.log("Error: ", response);
        console.log(message, success);
        if(!success)
          return exibeMensagem('Voltar', message);
    },
  });
}

// Pagemnto Function
$('#pagamentoForm').on('submit', travelPayment);

function travelPayment(event) {
  event.preventDefault();

  $.ajax({
    type: "POST",
    url: "http://192.168.40.32:6800/payment/create",
    data: $(this).serialize(),
    dataType: "JSON",
    success: function (response) {

      const { message, success } = response;
      
      console.log('DADOS Pagamento: ', message);

      if(!success) 
        return exibeMensagem('Voltar', message);

    },
    error: function (response) {
      console.log("Error: ", response);
    },
  });
}

function exibeMensagem(confirmButtonText = 'Voltar', text = '') {
  return Swal.fire({
      icon: 'warning',
      title: 'Oops...',
      //showConfirmButton: false,
      confirmButtonText,
      text,
      didClose: () => {
        $('#modalPesquisa').find('.btn-close').trigger('click');
      }
  })
 }

//  ConsultTravel Function
function handleConsultTravel(event) {
  event.preventDefault();

  let source = $("#source option:selected").val(),
      destination = $("#destination option:selected").val(),
      departureDate = $("#departureDate").val(),
      returnDate = $("#returnDate").val();

  let returnDateExists = returnDate != null ? returnDate : '';

  $.ajax({
    type: "GET",
    url: `http://192.168.40.32:6800/travels/${source}/${destination}/${departureDate}/${returnDateExists}`,
    data: {},
    dataType: "json",
    success: function (response) {
      console.log("Success: ", response);

      const { data } = response;

      searchResultTable.find('tr').remove();
      
      data.map(({
        id, 
        originProvince: { provinceName: originProvinceName }, 
        destinyProvince: { provinceName: destinyProvinceName },
        transport: { transportNumber: transNumber, totalPlace},
        price,
        timeToArrival,
        timeToGoTo,
        departureDate,
        returnDate,
      }) => {
        
      searchResultTable.append(`<tr data-id="${id}">
            <td data-title="originProvinceName">${originProvinceName}</td>
            <td data-title="destinyProvinceName">${destinyProvinceName}</td>
            <td data-title="time"> Partida: ${timeToGoTo} | Chegada: ${timeToArrival}</td>
            <td data-title="dates"> Partida: ${departureDate} | Regresso: ${returnDate}</td>
            <td data-title="price">${price}</td>
            <td data-title="transNumber">${transNumber}</td>
            <td data-title="totalPlace">${totalPlace}</td>
            <td data-title="Marcar Viagem">
            <a href="agendar.php?travel=${id}&origem=${originProvinceName}&destino=${destinyProvinceName}&preco=${price}" 
              class="btn btn-primary btn-t-2 text-center"
              id="agendarViagemBtn"
              style="color: #FFFFFF !important;"
              data-originProvince="${originProvinceName}"
              data-destinyProvince="${destinyProvinceName}"
              data-time="${timeToGoTo},${timeToArrival}"
              data-date="${departureDate},${returnDate}"
              data-price="${price}">
             Agendar
              </a>
            </td>
        </tr>`);
      });
    },
    error: function (response) {
    //  To do:Retornar uma mensagem de Não Temos Essa Viagem Agendada. 
      console.log("Error: ", response);
      exibeMensagem('Voltar a Pesquisa', 'Pesquisa não Encontrada');
    },
  });
}

function appendCountryList() {
  $.ajax({
      type: "GET",
      url: "http://192.168.40.32:6800/countries/list",
      data: {},
      dataType: "json",
      success: function (response) {
      //   console.log("Success: ", response);
        const { data } = response;

        data.map(({id, countryName }) => {
              // Add Countries to select box
              countryList.append(`<option value="${id}">${countryName}</option>`);
        });
      },
      error: function (response) {
        console.log("Error: ", response);
      },
    });
}

function handleCountryListChange() {
  const countrySelectedId = countryList.find('option:selected').val();

  appendProvinceList(countrySelectedId);
}

function appendProvinceList(country_id) {
    $.ajax({
        type: "GET",
        url: `http://192.168.40.32:6800/provinces/list/${country_id}`,
        data: {},
        dataType: "json",
        success: function (response) {
          // console.log("Success: ", response);
          const { data } = response;

          // Remove any options before adding new ones
          provinceListSource.children('option').remove();
          provinceListDestination.children('option').remove();

          if(data.length !== 0) {
            provinceListSource.html(`<option value="0" disabled selected>Selecione uma Província</option>`);
            provinceListDestination.html(`<option value="0" disabled selected>Selecione uma Província</option>`);
          } else {
            provinceListSource.html(`<option value="0" disabled selected>Nenhuma Província cadastrada</option>`);
            provinceListDestination.html(`<option value="0" disabled selected>Nenhuma Província cadastrada</option>`);
          }

          data.map(({id, provinceName }) => {
                // Add provinces to select box
                provinceListSource.append(`<option value="${id}">${provinceName}</option>`);
                provinceListDestination.append(`<option value="${id}">${provinceName}</option>`);
          });
        },
        error: function (response) {
          console.log("Error: ", response);
        },
      });
}

function getFromParamsTravelData() {
  const paramStringSize = window.location.search.length;
  const queryParams = window.location.search.substring(1, paramStringSize).split('&');
  const travel = queryParams;

  for (let i = 0; i < travel.length; i++) {
    let item = travel[i];

    const nameParam = item.split('=')[0];
    const valueParam = item.split('=')[1];

    if (nameParam === 'travel')
      $('#agenda-viagem-id').val(valueParam);

    if (nameParam === 'origem')
      $('#agenda-viagem-origem').val(valueParam).attr('readonly', true);

    if (nameParam === 'destino')
      $('#agenda-viagem-destino').val(valueParam).attr('readonly', true);

    if (nameParam === 'preco')
      $('#agenda-viagem-preco').val(valueParam).attr('readonly', true);

      if (nameParam === 'placesReserve')
      $('#agenda-viagem-placesReserved').val(valueParam).attr('readonly', true);

  }
}

function consult() {
  const consultTravelBtn = $("#travelConsult"),
    searchResultTable = $("#searchResultTbl");

  consultTravelBtn.on("click", travelConsult);

  // Agend Travel Submition
  $("#form_consultar").on("submit", travelConsult);

  function travelConsult(event) {
    event.preventDefault();

    console.log("---Serialize: ", $(this).serialize());

    let optionSelected = $("#valueToConsult").val();
    let typeConsult = $("#travelConsult").val();
    
    if(typeConsult == 'contact'){
      $.ajax({
        type: "GET",
        url: `http://192.168.40.32:6800/client/travel/${optionSelected}`,
        data: {},
        dataType: "json",
        success: function (response) {
          console.log("Success: ", response, response.data);

          const { data } = response;

          searchResultTable.find("tr").remove();

          const {
            id,
            placesReserve,
            personalCodeAgend,
            userAgendCode,
            phoneNumber,
            status,
          } = data;

          searchResultTable.html(`    <tr>
                                          <td data-title="id">${id}</td>
                                          <td data-title="toplace">${placesReserve}</td>
                                          <td data-title="agenCode">${userAgendCode}</td>
                                          <td data-title="phone">${phoneNumber}</td>
                                          <td data-title="status">${status}</td>
                                          <td data-title="code">${personalCodeAgend}</td>
                                          <td data-title="Agendar Viagem">
                                          <button type="reset" class="btn btn-primary"><i class="bi bi-trash"></i></button>
                                          </td>    
                                      </tr>`);
        },
        error: function (response) {
          //  To do:Retornar uma mensagem de Não Temos Essa Viagem Agendada.
          console.log("Error: ", response);
        },
      });
    }else if( typeConsult == 'codeReserve'){
      $.ajax({
        type: "GET",
        url: `http://192.168.40.32:6800/client/travel/personalCode/${optionSelected}`,
        data: {},
        dataType: "json",
        success: function (response) {
          console.log("Success: ", response, response.data);

          const { data } = response;

          searchResultTable.find("tr").remove();

          const {
            id,
            placesReserve,
            personalCodeAgend,
            userAgendCode,
            phoneNumber,
            status,
          } = data;

          searchResultTable.html(`    <tr>
                                          <td data-title="id">${id}</td>
                                          <td data-title="toplace">${placesReserve}</td>
                                          <td data-title="agenCode">${userAgendCode}</td>
                                          <td data-title="phone">${phoneNumber}</td>
                                          <td data-title="status">${status}</td>
                                          <td data-title="code">${personalCodeAgend}</td>
                                          <td data-title="Agendar Viagem">
                                          <button type="reset" class="btn btn-primary"><i class="bi bi-trash"></i></button>
                                          </td>
                                      </tr>`);
        },
        error: function (response) {
          //  To do:Retornar uma mensagem de Não Temos Essa Viagem Agendada.
          console.log("Error: ", response);
        },
      });
    }
  }
}(jQuery);

function verifySelectedTravel() {
  getFromParamsTravelData()
}

// Invoke functions
appendCountryList();
verifySelectedTravel();
consult();
guardarTravel();








