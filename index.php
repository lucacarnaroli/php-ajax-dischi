<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>dischi-ajax</title>
  </head>
  <body>
    <header>
      <div class="header-box">
        <div class="logo">
          <img src="img/spotify.png" alt="">
        </div>
      </div>
    </header>
    <main>
      <script id="entry-template" type="text/x-handlebars-template">
      <div class="cds">
        <img class="poster"src={{poster}} alt="">
        <ul class="descrizione">
          <li>
            <h3>{{title}}</h3>
          </li>
          <li>
            <p>{{author}}</p>
          </li>
          <li>
            <h6>{{year}}</h6>
          </li>
        </ul>
      </div>
      
      </script>

    </main>
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
