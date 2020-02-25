<?php
include _DIR_ . '/../server.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="dist/app.css">
    <title>dischi</title>
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
      <div class="jumbo">

        <?php foreach ($database as $value) {?>
          <div class="cd">
            <img class="poster"src="<?php echo $value['poster'] ?>" alt="">
            <ul class="descrizione">
              <li>
                <h3 class="title">
                  <?php echo $value['title'];?>
                </h3>
              </li>
              <li>
                <p class="author">
                  <?php echo $value['author'];?>
                </p>
              </li>
              <li>
                <h6 class="year">
                  <?php echo $value['year'];?>
                </h6>
              </li>
            </ul>
          </div>
        <?php } ?>


      </div>
    </main>

  </body>
</html>
