(function () {
  const consultTravelBtn = $("#travelConsult"),
    searchResultTable = $("#searchResultTbl");

  consultTravelBtn.on("click", travelConsult);

  // Agend Travel Submition
  $("#form_consultar").on("submit", travelConsult);

  function travelConsult(event) {
    event.preventDefault();

    console.log("---Serialize: ", $(this).serialize());

    let contact = $("#contact").val();

    $.ajax({
      type: "GET",
      url: `http://192.168.40.32:6800/client/travel/${contact}`,
      data: {},
      dataType: "json",
      success: function (response) {
        console.log("Success: ", response, response.data);

        const { data } = response;

        searchResultTable.find("tr").remove();

        const {
          id,
          travelId: {
            originProvince: { provinceName: originProvinceName },
            destinyProvince: { provinceName: destinyProvinceName },
            transportId: { transportNumber: transNumber },
            price,
            departureDate,
            returnDate,
            timeToGoTo,
            timeToArrival,
          },
          placesReserve,
          personalCodeAgend,
          userAgendCode,
          phoneNumber,
          status,
          spotId: { spotName: spotNameAgend }
        } = data;

        searchResultTable.html(`    <tr data-id="${id}">
                                        <td data-title="originProvinceName">${originProvinceName}</td>
                                        <td data-title="destinyProvinceName">${destinyProvinceName}</td>
                                        <td data-title="time"> Partida: ${timeToGoTo} | Chegada: ${timeToArrival}</td>
                                        <td data-title="dates"> Partida: ${departureDate} | Regresso: ${returnDate}</td>
                                        <td data-title="toplace">${placesReserve}</td>
                                        <td data-title="price">${price}</td>
                                        <td data-title="agenCode">${userAgendCode}</td>
                                        <td data-title="spot">${spotNameAgend}</td>
                                        <td data-title="transNumber">${transNumber}</td>
                                        <td data-title="phone">${phoneNumber}</td>
                                        <td data-title="status">${status}</td>
                                        <td data-title="code">${personalCodeAgend}</td>
                                        <td data-title="Marcar Viagem">
                                        <a href="agendar.php?travel=${id}&origem=${originProvinceName}&destino=${destinyProvinceName}&preco=${price}" 
                                            class="btn btn-primary btn-t-2 text-center"
                                            id="agendarViagemBtn"
                                            data-originProvince="${originProvinceName}"
                                            data-destinyProvince="${destinyProvinceName}"
                                            data-time="${timeToGoTo},${timeToArrival}"
                                            data-date="${departureDate},${returnDate}"
                                            data-price="${price}"
                                        >
                                            Agendar
                                        </a>
                                        </td>
                                    </tr>`);
      },
      error: function (response) {
        //  To do:Retornar uma mensagem de Não Temos Essa Viagem Agendada.
        console.log("Error: ", response);
      },
    });
  }
})(jQuery);
