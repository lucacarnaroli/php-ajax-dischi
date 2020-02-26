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
        <div class="entry">
          <h1>{{title}}</h1>
          <div class="body">
            {{body}}
          </div>
        </div>
</script>

    </main>
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
