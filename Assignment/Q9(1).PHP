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

echo"<h3>How can you declare the array (all type) in PHP?</h3>";

echo"<h4>Anser:<br>
In PHP, there are three types of arrays:
<br>
Indexed arrays - Arrays with a numeric index <br>
Associative arrays - Arrays with named keys <br>
Multidimensional arrays - Arrays containing one or more arrays</h4>";

echo'<h4> Index array can be defined as:<br>
$Food = array("Manchurian","Noodles","Vadapav","Sandwich");</h4>';

echo'<h4>Associative Array can be defined as:<br>
$Cars_Owned= array ("Darshan"=> Ferrari,"Nitya" => BMW, "divyesh"=> Urus,"hardev" =>Mercedeas );
</h4>';

echo'<h4>Multidimensional array can be defined as:<br>
$Cars = array (<br>
    array("Ferrari",20,10),<br>
    array("BMW",29,5),<br>
    array("Urus",4,2),<br>
    array("Mercedeas",11,11)<br>
              );</h4>';



?>
        
        <script src="" async defer></script>
    </body>
</html>