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


$Biology = 99;
$Chemistry = 80;
$Physics = 63;
$Mathematics = 33;
$Computer = 90;
$Grade=0;
$Total = $Biology+ $Chemistry+ $Physics+ $Mathematics+ $Computer;
$Percentage = $Total / 5;

if ($Percentage >= 90 && $Percentage<=100)
    $Grade = "A+";
    else if ($Percentage >= 80 && $Percentage < 90)
    $Grade = "A";
    else if ($Percentage >= 70 && $Percentage < 80)
    $Grade = "B+";
    else if ($Percentage >= 60 && $Percentage < 70)
    $Grade = "B";
    else if ($Percentage >= 50 && $Percentage < 60)
    $Grade = "C";
    else if ($Percentage >= 40 && $Percentage < 50)
    $Grade = "D";
    else if ($Percentage >= 33 && $Percentage < 40)
    $Grade = "E";
    else 
    $Grade = "FAIL";


echo '<pre>';
echo "The Percentage = $Percentage <br>";
echo "The Grade = $Grade";

        ?>
        <script src="" async defer></script>
    </body>
</html>