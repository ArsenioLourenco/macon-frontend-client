const idTravel = document.querySelector('#idTravel')

const consultTravelBtn = document.querySelector('#consultTravel');

consultTravelBtn.addEventListener('click', (event) => {
    event.preventDefault();

    console.log('Consult Btn click event ');
});

// const showData = (result) => {
//     for(const camp in result)
// }

// idTravel.addEventListener("blur", (event) => {

//     const option = {
//         method: "GET",
//         mode: "cors",
//         cached: 'default'

//     }

//     fetch(``)
//    .then(response =>{ response.json() 
//     .then( data => console.log(data))
// })
//    .catch() 
   
// })


function consultTravel() {
    $.ajax({
        type: "GET",
        url: "http://192.168.4.97:6800/users/login",
        data: {
            email: "testeteste@gmail.com",
            password: "testeeeeeeee"
        },
        dataType: "json",
        success: function (response) {
            console.log('Success: ', response);
        },
        error: function (response) {
            console.log('Error: ', response);
        }
    });
}
