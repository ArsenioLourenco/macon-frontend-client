(function () {
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
                                          <td data-title="Marcar Viagem">
                                        
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
                                          <td data-title="Marcar Viagem">
                                        
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
})(jQuery);







// if (typeConsult == "contact") {
//   $.ajax({
//     type: "GET",
//     url: `http://192.168.40.32:6800/client/travel/${contact}`,
//     data: {},
//     dataType: "json",
//     success: function (response) {
//       console.log("Success: ", response, response.data);

//       const { data } = response;

//       searchResultTable.find("tr").remove();

//       const {
//         id,
//         placesReserve,
//         personalCodeAgend,
//         userAgendCode,
//         phoneNumber,
//         status,
//       } = data;

//       searchResultTable.html(`    <tr>
//                                       <td data-title="id">${id}</td>
//                                       <td data-title="toplace">${placesReserve}</td>
//                                       <td data-title="agenCode">${userAgendCode}</td>
//                                       <td data-title="phone">${phoneNumber}</td>
//                                       <td data-title="status">${status}</td>
//                                       <td data-title="code">${personalCodeAgend}</td>
//                                       <td data-title="Marcar Viagem">
                                    
//                                       </td>
//                                   </tr>`);
//     },
//     error: function (response) {
//       //  To do:Retornar uma mensagem de Não Temos Essa Viagem Agendada.
//       console.log("Error: ", response);
//     },
//   });
// } else if (typeConsult == "contact") {
//   $.ajax({
//     type: "GET",
//     url: `http://192.168.40.32:6800/client/travel/phoneTravel${contact}`,
//     data: {},
//     dataType: "json",
//     success: function (response) {
//       console.log("Success: ", response, response.data);

//       const { data } = response;

//       searchResultTable.find("tr").remove();

//       const {
//         id,
//         placesReserve,
//         personalCodeAgend,
//         userAgendCode,
//         phoneNumber,
//         status,
//       } = data;

//       searchResultTable.html(`    <tr>
//                                       <td data-title="id">${id}</td>
//                                       <td data-title="toplace">${placesReserve}</td>
//                                       <td data-title="agenCode">${userAgendCode}</td>
//                                       <td data-title="phone">${phoneNumber}</td>
//                                       <td data-title="status">${status}</td>
//                                       <td data-title="code">${personalCodeAgend}</td>
//                                       <td data-title="Marcar Viagem">
                                    
//                                       </td>
//                                   </tr>`);
//     },
//     error: function (response) {
//       //  To do:Retornar uma mensagem de Não Temos Essa Viagem Agendada.
//       console.log("Error: ", response);
//     },
//   });
// }