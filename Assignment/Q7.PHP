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
    

print'<h3>What will be the values of $a and $b after the code below is executed?<br>
Explain your answer.<br></h3>

<h4>$a = "1";<br>
$b = &$a;<br>
$b = "2$b";</h4>';
echo "<h3>Answer:</h3>";
echo'<h4>$a is a varible and it has a value of 1 
<br>and since we are pointing the $b variable to the address of $a
<br>so the change will occour in the original value of $a aswell 
<br>and hence the value of both will change
<br>Well,the last outcome would be "21"</h4>';


    
    ?>
        
        <script src="" async defer></script>
    </body>
</html>