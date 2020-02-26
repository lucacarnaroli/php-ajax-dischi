const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/server-ajax.php",
    method: "GET",
    data: {
      title: '' ,
      author: '' ,
      year: '' ,
    },
    success: function (data) {

      for (var i = 0; i < data.length; i++) {
        var cd = data[i];
        console.log(cd);
      }
    },
    error: function (richiesta, stato, error) {
      alert("E' avvenuto un errore. " + error);
    }
   }
  );
});

// function printCds(cd) {
//
//   for (var i = 0; i < cd.length; i++) {
//     var printCd = cd[i];
//
//
//     var source = $('#entry-template').html();;
//     var template = Handlebars.compile(source);
//     var context = {
//       'title': title,
//       'author': author,
//       'year': year,
//     };
//     var html = template(context);
//     $('.cds').append(html);
//   }
//
// }
