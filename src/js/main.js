const idTravel = document.querySelector("#idTravel");

const consultTravelBtn = document.querySelector("#consultTravel"),
  searchResultTable = $("#searchResultTbl");
  provinceListSource = $("#idTravel");

consultTravelBtn.addEventListener("click", (event) => {
  event.preventDefault();

  $.ajax({
    type: "GET",
    url: "http://192.168.4.97:6800/provinces/list",
    data: {},
    dataType: "json",
    success: function (response) {
      console.log("Success: ", response);

      const {
        data: [{ id, provinceName }],
      } = response;

      // const searchResultTable = $('#searchResultTbl');

      console.log(searchResultTable);

    

      searchResultTable.html(`<tr>
                    <td data-title="Destino">${provinceName}</td>
                    <td data-title="Destino">${provinceName}</td>
                    <td data-title="Destino">${provinceName}</td>
                    <td data-title="Destino">${provinceName}</td>
                    <td data-title="Destino">${provinceName}</td>
                    <td data-title="Marcar Viagem"><button id="btn-marcar" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Marcar</button></td>
                </tr>`);
    },
    error: function (response) {
      console.log("Error: ", response);
    },
  });
});






function consultTravel() {
  $.ajax({
    type: "GET",
    url: "http://192.168.4.97:6800/provinces/",
    data: {},
    dataType: "json",
    success: function (response) {
      console.log("Success: ", response);
    },
    error: function (response) {
      console.log("Error: ", response);
    },
  });
}


function appendProvinceList() {
    $.ajax({
        type: "GET",
        url: "http://192.168.4.97:6800/provinces/list",
        data: {},
        dataType: "json",
        success: function (response) {
        //   console.log("Success: ", response);
          const { data } = response;

          data.map(({id, provinceName }) => {
                // Add provinces to select box
                provinceListSource.append(`<option value="${id}">${provinceName}</option>`);
          });
        },
        error: function (response) {
          console.log("Error: ", response);
        },
      });
}

appendProvinceList();



/**
     * 
     * <tr>
            <td data-title="Partida">000522</td>
            <td data-title="Destino">00547</td>
            <td data-title="Horário">10:45</td>
            <td data-title="Data">18:55</td>
            <td data-title="Preço">Benfica</td>
            <td data-title="Marcar Viagem"><button id="btn-marcar" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Marcar</button></td>
          </tr>
     */
