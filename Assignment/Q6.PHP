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

    for ($i=0; $i<5; $i++)
          { 
    
            for ($j=0; $j<=5; $j++) 
                { 
                    if ($j == 1 or (($i == 0 or $i == 4) and ($j > 1 and $j < 6)) or ($j>1 and $j<2)) 
                    echo "*";  
                } 
       
             echo "<br>";
         }
        
    ?>
        
        <script src="" async defer></script>
    </body>
</html>