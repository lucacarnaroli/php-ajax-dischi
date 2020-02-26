const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/server-ajax.php",
    method: "GET",
    success: function (data) {
      console.log(data);
      printCds(data);
    },
    error: function (richiesta, stato, error) {
      alert("E' avvenuto un errore. " + error);
    }
   }
  );
});

function printCds(cd) {

  for (var i = 0; i < cd.length; i++) {
    var printCd = cd[i];

    var source = $('#entry-template').html();;
    var template = Handlebars.compile(source);
    var html = template(printCd);
    $('.jumbo').append(html);
  }

}
