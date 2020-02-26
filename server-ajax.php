<?php
  include 'database.php';


  $author = $_GET['author'];

  if (empty($author)) {
    header('Content-Type: application/json');
    echo json_encode($database);
  } else {
    $boxCd = [];
    foreach ($database as $cd) {
      if ($cd['author'] === $author) {
        $boxCd[] = $cd;
      }
    }
    header('Content-Type: application/json');
    echo json_encode($boxCd );
  }


?>
