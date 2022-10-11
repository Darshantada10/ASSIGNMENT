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
        
        $Cars_Owned= array ("Darshan"=> "Ferrari","Nitya" => "BMW", "divyesh"=> "Urus","hardev" =>"Mercedeas",
        "Nisarg"=> "Audi","Naruto"=> "Volvo","Darshan"=> "Rolls Royce" );

            echo"<h3>using array_rand</h3>";
            $rand_keys= array_rand($Cars_Owned, 5);
             echo $Cars_Owned[$rand_keys[0]]."<br>";
             echo $Cars_Owned[$rand_keys[1]]."<br>";

             echo"<h3>using shuffle</h3>";
       
             shuffle($Cars_Owned);
                echo $Cars_Owned[0]."<br>";
                echo $Cars_Owned[1]."<br>";
                echo $Cars_Owned[4]."<br>";
        
        ?>
        <script src="" async defer></script>
    </body>
</html>