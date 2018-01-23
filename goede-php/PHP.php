<?php
    date_default_timezone_set("Europe/amsterdam");
    $tijd = date('H:i');

    if ($tijd >= 6 && ($tijd < 12)){
        echo "Goede morgen, het is $tijd uur";
        echo '<link rel="stylesheet" type="text/css" href="CSS.css">';
    }
    elseif ($tijd > 12 && ($tijd < 18)){
        echo "Goede middag, het is $tijd uur";
        echo '<link rel="stylesheet" type="text/css" href="CSS2.css">';
    }
    elseif ($tijd > 18 && ($tijd < 0)){
        echo "Goede avond, het is $tijd uur";
        echo '<link rel="stylesheet" type="text/css" href="CSS3.css">';
    }
    elseif ($tijd > 0 && ($tijd < 6)){
        echo "Goede nacht, het is $tijd uur";
        echo '<link rel="stylesheet" type="text/css" href="CSS4.css">';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>