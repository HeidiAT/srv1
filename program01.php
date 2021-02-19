<?php
// input dialog pada web
// metoge GET
// metode POST

  $guestName = $_GET['guest'];
  $today = date('l');
  $todaysDate = date('l, F jS Y');

  $color = $_GET['color'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body bgcolor= <?= $color; ?>>
    <h1>Program 01</h1>
    today is: <?= $todaysDate; ?>
    <hr>

    <h2>Hello, <?php echo $guestName; ?></h2>
    <h3>Happy <?php echo $today; ?></h3>
  </body>
</html>
