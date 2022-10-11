<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <?php
   $balances = array(
    "Row1" => array ("CO1" => 10.0,"CO2" => 20.0,"CO3" => 29.0,"CO4" => 5.0,"CO5" => 49.0),
    "Row2" => array ("CO1" => 0.01,"CO2" => 8.8,"CO3" => 9.9,"CO4" => 10.10,"CO5" => 11.11),
    "Row3" => array ("CO1" => 23.45,"CO2" => 12.5,"CO3" => 13.5,"CO4" => 14.5,"CO5" => 15.5)
     
    );


    
  /*  for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo $balances;
        }
        echo "</ul>";
      }*/
      print_r ($balances);
      
        ?>
          <script src="" async defer></script>
    </body>
</html>