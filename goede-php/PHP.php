<?php
    date_default_timezone_set("Europe/amsterdam");
    $tijd = date('H:i');

    $plane = "<div id='plane'> <img id='plane' src='plane.png'> </div>";
    $ufo = "<div id='plane'> <img id='plane' src='ufo.png'> </div>";

    if ($tijd >= 6 && ($tijd < 12)){
        echo "Goede morgen, het is $tijd uur";
        echo "<div class='morning'></div>";
        echo $plane;
    }
    elseif ($tijd >= 12 && ($tijd < 18)){
        echo "Goede middag, het is $tijd uur";
        echo "<div class='afternoon'></div>";
        echo $plane;
    }
    elseif ($tijd >= 18 && ($tijd < 24)){
        echo "Goede avond, het is $tijd uur";
        echo "<div class='evening'></div>";
        echo $plane;
    }
    elseif ($tijd >= 0 && ($tijd < 6)){
        echo "Goede nacht, het is $tijd uur";
        echo "<div class='night'></div>";
        echo "<img id='plane' src='ufo.png'>";
        echo $ufo;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<body>

</body>
</html>
