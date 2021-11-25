$(document).ready(function () {
  $("#form_1").validate({
    rules: {
      country: {
        required: true,
        country: true,
      },
      source: {
        required: true,
        source: true,
      },
      destination: {
        required: true,
        destination: true,
      },
      departureDate: {
        required: true,
      },
      returnDate: {
        required: true,
      },
    },
  });
});
