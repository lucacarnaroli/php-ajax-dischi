const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/server-ajax.php",
    method: "GET",
    success: function (data) {
    console.log(data);
    },
    error: function (richiesta, stato, error) { alert("E' avvenuto un errore. " + error);
    }
   }
  );
});
