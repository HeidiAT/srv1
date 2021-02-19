<?php
$color = $_GET['color'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Struktur Algoritma</title>
  </head>
  <body bgcolor= <?= $color; ?>>
    <?php
    if (isset($_GET['k'])){
      $k = $_GET['k'];
    }
    else {
      $k = 10;
    }
    if ($k > 10){
      $k = 10;
    }
    ?>

    <h1 align="center">Tabel Perkalian</h1>
    <table border="0" cellspacing="0" cellpadding="5" align="center">
      <tr>
          <?php
            for ($c=1; $c <= $k; $c++) {
          ?>
        <td>
          <table border="1" cellspacing="0" cellpadding="5">
            <?php
              for ($i=1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td align='center'>" . $i . " x " . $c . " = " . $i * $c . "</td>";
                echo "</tr>";
              }
            ?>
          </table>
        </td>
          <?php
            }
          ?>
      </tr>
    </table>
  </body>
</html>
