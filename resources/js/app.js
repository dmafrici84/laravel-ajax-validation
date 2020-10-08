require('./bootstrap');
window.$ = require ('jquery');

$(document).ready(init);

function init() {
  getData();
}

function getData() {

  $.ajax({

    url:"http://127.0.0.1:8000/api/televisions/all",
    method: "GET",
    success: function(data) {

      console.log("data", data);

    },
    error: function(err) {

      console.log("error", err);

    }
  });
}
