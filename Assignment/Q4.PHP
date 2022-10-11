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
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>Fibonacci series for first 10 numbers: </h3> <br>";  
echo $n1.' '.$n2.' ';  
while ($num <=7 )  
{  
    $n3 = $n2 + $n1;  
    echo "$n3  ";  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
?> 
        <script src="" async defer></script>
    </body>
</html>