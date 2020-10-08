require('./bootstrap');
window.$ = require ('jquery');

$(document).ready(init);

function init() {
  addPriceBestListener()
  getData(false);
}

function addPriceBestListener() {

  var target = $("#price_best");
  target.change(priceBestToogle);
}

function priceBestToogle() {
  var check = $(this);
  var isChecked = check.is(":checked");

  getData(isChecked);
}

function getData(price_best) {

  var url ='/api/televisions/all';

  if (price_best) {
    url = '/api/televisions/price_best';
  }

  $.ajax({

    url: url,
    method: "GET",
    success: function(televisions) {

      var target = $("#televisions");
      target.html("");
      
      for (var i = 0; i < televisions.length; i++) {
        var television = televisions[i];
        var html = "<li>" + television['name'] + ": " + television['price']
                  + "</li>";
        target.append(html);
      }
    },
    error: function(err) {

      console.log("error", err);

    }
  });
}
