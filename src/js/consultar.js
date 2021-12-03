(function () {
  const consultTravelBtn = $("#travelConsult"),
    searchResultTable = $("#searchResultTbl");

  consultTravelBtn.on("click", travelConsult);

  // Agend Travel Submition
  $("#form_consultar").on("submit", travelConsult);

  function travelConsult(event) {
    event.preventDefault();

    console.log("---Serialize: ", $(this).serialize());

    let reference = $("#contact").val();

    $.ajax({
      type: "GET",
      url: `http://localhost:6800/client/travel/${reference}`,
      data: {},
      dataType: "json",
      success: function (response) {
        console.log("Success: ", response, response.data);

        const { data } = response;

        searchResultTable.find("tr").remove();

        const {
          id,
          travel: {
            originProvince: { provinceName: originProvince },
            destinyProvince: { provinceName: destinyProvince },
            transport: { transportNumber: transportNumber },
            spot: { spotName: spotName, province: { provinceName: provinceName } },
            departureDate,
            returnDate,
            timeToGoTo,
            timeToArrival,
            price
          },
          placesReserve,
          personalCodeAgend,
          userAgendCode,
          phoneNumber,
          status,
        } = data;

        searchResultTable.html(`<tr>
                                        <td data-title="originProvinceName">${originProvince}</td>
                                        <td data-title="destinyProvinceName">${destinyProvince}</td>
                                        <td data-title="time"> Partida: ${timeToGoTo} </br> Chegada: ${timeToArrival}</td>
                                        <td data-title="dates"> Partida: ${departureDate} </br> Regresso: ${returnDate}</td>
                                        <td data-title="spotName">${spotName}, ${provinceName}</td>
                                        <td data-title="transportNumber">${transportNumber}</td>
                                        <td data-title="price">${price}</td>
                                        <td data-title="toplace">${placesReserve}</td>
                                        <td data-title="agenCode">${userAgendCode}</td>
                                        <td data-title="phone">${phoneNumber}</td>
                                        <td data-title="status">${status}</td>
                                        <td data-title="code">${personalCodeAgend}</td>
                                    </tr>`);
      },
      error: function (response) {
        //  To do:Retornar uma mensagem de Não Temos Essa Viagem Agendada.
        console.log("Error: ", response);
      },
    });
  }
})(jQuery);
