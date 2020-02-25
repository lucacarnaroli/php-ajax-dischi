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
        <img src="" alt="">
      </div>
    </header>
    <main>
      <div class="jumbo">
        <div class="cd">
        <?php foreach ($database as $value) {?>
          <img class="poster"src="<?php echo $value['poster'] ?>" alt="">
          <?php foreach ($value as $k => $dati){ ?>
            <div class="info-album">
                <?php echo $k?>
                <?php echo $dati?>
            </div>

          <?php } ?>
        <?php } ?>
          </div>

      </div>
    </main>

  </body>
</html>
