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

$weekday = "4";

switch ($weekday) {
    case "1":
        echo "It's Monday";
        break;
    case "2":
        echo "It's Tuesday";
        break;
    case "3":
        echo "It's Wednesday";
        break;
	case "4":
        echo "It's Thursday";
        break;
    case "5":
        echo "It's Friday";
        break;
    case "6":
        echo "It's Saturday";
        break;
	case "7":
        echo "It's Sunday";
        break;
    default:
        echo "Invalid Input";
}
    ?>
        
        <script src="" async defer></script>
    </body>
</html>