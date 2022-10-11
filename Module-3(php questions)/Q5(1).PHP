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

$num=153;  
$total=0;  
$a=$num;
$rem=0;  
while($a!=0)  
{  
$rem=$a%10;  
$total=$total+$rem*$rem*$rem;  
$a=$a/10;  
}  
if($num==$total)  
{  
echo "$num is an armstrong number ";  
}  
else  
{  
echo "$num is not an armstrong number";  
}  
?> 
        <script src="" async defer></script>
    </body>
</html>