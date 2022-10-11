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
    
    


 for($year =1901;$year<=2022;$year++)
 {
    if($year %4 == 0)
    {
        if($year %100 == 0)
        {
            if($year %400 == 0)
            {
                echo "$year is a leap year <br>";
            }  
                else  
                {  
                    echo "$year is not a Leap Year<br>";    
                }
    }    
    else {
        echo"$year is a leap year<br>";
    }
}
        else
        {
            echo"$year is not a leap year<br>";
        }
        
           
 }
    ?>
        <script src="" async defer></script>
    </body>
</html>