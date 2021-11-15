// Selecionar a consulta com Id 
const consultTravelBtn = $("#consultTravel"),
  searchResultTable = $("#searchResultTbl"),
  countryList = $("#country"),
  provinceListSource = $("#source"),
  provinceListDestination = $("#destination");

// Bind events 
consultTravelBtn.on("click", handleConsultTravel);
countryList.on('change', handleCountryListChange);

// Agend Travel Submition
$('#agendTravelForm').on('submit', createNewTravel);

function createNewTravel(event) {
  event.preventDefault();

  $.ajax({
    type: "POST",
    url: "http://192.168.4.97:6800/client/travel/agend",
    // url: "http://localhost:3000/senddata.php",
    data: $(this).serialize(),
    dataType: "JSON",
    processData: false,
    success: function (response) {

      const { message } = response;
      
      const [ seats, route, departureDate, price, reservationCode ] = message.split('.');
      
      window.open(
        `http://localhost:3000/generatepdf.php?seats=${seats}&route=${route}&departureDate=${departureDate}&price=${price}&reservationCode=${reservationCode}`,
        '_blank'
      )

    },
    error: function (response) {
      console.log("Error: ", response);
    },
  });
}

function handleConsultTravel(event) {
  event.preventDefault();

  let source = $("#source option:selected").val(),
      destination = $("#destination option:selected").val(),
      departureDate = $("#departureDate").val(),
      returnDate = $("#returnDate").val();

  let returnDateExists = returnDate != null ? returnDate : '';

  $.ajax({
    type: "GET",
    url: `http://192.168.4.97:6800/travels/${source}/${destination}/${departureDate}/${returnDateExists}`,
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
        price,
        timeToArrival,
        timeToGoTo,
        departureDate,
        returnDate
      }) => {
        
      searchResultTable.append(`<tr data-id="${id}">
            <td data-title="originProvinceName">${originProvinceName}</td>
            <td data-title="destinyProvinceName">${destinyProvinceName}</td>
            <td data-title="time"> Partida: ${timeToGoTo} | Chegada: ${timeToArrival}</td>
            <td data-title="dates"> Partida: ${departureDate} | Regresso: ${returnDate}</td>
            <td data-title="price">${price}</td>
            <td data-title="Marcar Viagem">
            <a href="pesquisa.php?travel=${id}&origem=${originProvinceName}&destino=${destinyProvinceName}&preco=${price}" 
              class="btn btn-primary btn-t-2 text-center"
              id="agendarViagemBtn"
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
    },
  });
}

function appendCountryList() {
  $.ajax({
      type: "GET",
      url: "http://192.168.4.97:6800/countries/list",
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
        url: `http://192.168.4.97:6800/provinces/list/${country_id}`,
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

  }
}

function verifySelectedTravel() {
  getFromParamsTravelData()
}

// Invoke functions
appendCountryList();
verifySelectedTravel();













// $("#search").click(function(event){

//   //EVITAR QUE O FORMULÁRIO SEJA SUBMETIDO ANTES DO ENVIO PARA A API
//   event.preventDefault();

//   //ENVIA PARA A API
//   $.ajax ({
//     type: "POST",
//         url: "http://192.168.4.97:6800/",
//         data:$("#form_1").serialize(),
//         dataType: "json",
//         success: function(){
//           //SUBMETE O FORMULÁRIO PARA A ACTION DEFINIDA NO CABEÇALHO
//           $("#form_1").submit();


//         }


//   })
// })



