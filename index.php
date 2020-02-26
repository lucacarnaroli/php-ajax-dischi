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
      <select class="input" name="">
        <option value="">All</option>
        <option value="Bon Jovi">Bon Jovi</option>
        <option value="Pink Floyd">Pink Floyd</option>
        <option value="Metallica">Metallica</option>
        <option value="Iggy pop">Iggy pop</option>
        <option value="U2">U2</option>
        <option value="Ne-Yo">Ne-Yo</option>
        <option value="RHCP">RHCP</option>
        <option value="Drake">Drake</option>
        <option value="Aretha Franklin">Aretha Franklin</option>
      </select>

      <div class="jumbo">

      </div>

      <script id="entry-template" type="text/x-handlebars-template">
      <div class="cd">
        <img class="poster"src={{poster}} alt="">
        <ul class="descrizione">
          <li>
            <h3 class="title">{{title}}</h3>
          </li>
          <li>
            <p class="author">{{author}}</p>
          </li>
          <li>
            <h6 class="year">{{year}}</h6>
          </li>
        </ul>
      </div>

      </script>

    </main>
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
