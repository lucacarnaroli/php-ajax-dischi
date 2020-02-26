const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {
  var query = $('.input').val();
  callCds(query);
  $('.input').change(function() {
    var option = $(this).val();
    callAuthor(option);
  })

});

// FUNZIONI
function printCds(cd) {
  $('.jumbo').html('');
  for (var i = 0; i < cd.length; i++) {
    var printCd = cd[i];
    var source = $('#entry-template').html();;
    var template = Handlebars.compile(source);
    var html = template(printCd);
    $('.jumbo').append(html);
  }
}


// CHIAMATE AJAX
function callCds(cd) {
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/server-ajax.php",
    method: "GET",
    success: function (data) {
      // console.log(data);
      printCds(data);
    },
    error: function (richiesta, stato, error) {
      alert("E' avvenuto un errore. " + error);
    }
   }
  );
}

function callAuthor(author) {
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/server-ajax.php",
    method: "GET",
    data: {
      author: author,
    },
    success: function (data) {
      // console.log(data);
      printCds(data);
    },
    error: function (richiesta, stato, error) {
      alert("E' avvenuto un errore. " + error);
    }
   }
  );
}
