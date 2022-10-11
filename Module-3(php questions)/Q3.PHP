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


    $largest=0;
    
    $a=10;
    $b=20;
    $c=30;

  $largest = ($a > $b)? (($a > $c)? $a : $c) : (($b > $c)? $b : $c);
  
  echo "largest number is $largest";



?>

        <script src="" async defer></script>
    </body>
</html>