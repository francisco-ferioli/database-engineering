<?php
$msgs = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $limitTime = time()+600;

    $nameBackgroundColor = "BackgroundColor";
    if(!$valueBackgroundColor = filter_input(INPUT_POST, "BackgroundColor", FILTER_SANITIZE_SPECIAL_CHARS)){
        $msgs[] = "No Background Color";
    }    
    
    $nameFontFamily = "FontFamily";
    if(!$valueFontFamily = filter_input(INPUT_POST, "FontFamily", FILTER_SANITIZE_SPECIAL_CHARS)){
        $msgs[] = "No Font Family";
    }

    $nameFontSize = "FontSize";
    if($valueFontSize = filter_input(INPUT_POST, "FontSize", FILTER_SANITIZE_SPECIAL_CHARS)){
        $msgs[] = "No Font Size";
    }

    if(count($msgs) == 0){
        setcookie($nameBackgroundColor, $valueBackgroundColor, $limitTime);
        setcookie($nameFontFamily, $valueFontFamily, $limitTime);
        setcookie($nameFontSize, $valueFontSize, $limitTime);
    }  
}


//header("Location: settings.php");
//filter_input(INPUT_COOKIE, "BackgroundColor", FILTER_SANITIZE_SPECIAL_CHARS)
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>cookie_settings</title>
        <style type="text/css">
            body{
                background-color: <?= $valueBackgroundColor?>;
                font-family: <?= $valueFontFamily?>;
                font-size: <?= $valueFontSize?>;
            }
        </style>
    </head>
    <body>
        <h1>Cookie settings</h1>
        <form action="" method="POST">
        <p><b>Background Color setting</b></p>
            <input type="radio" name="BackgroundColor" id="BackgroundColor" value="#DDA0DD">Plum
            <input type="radio" name="BackgroundColor" id="BackgroundColor" value="#FFDAB9">PeachPuff
            <input type="radio" name="BackgroundColor" id="BackgroundColor" value="#FFEFD5">PapayaWhip
            <br><br>
        <p><b>Font Family setting</b></p>
            <input type="radio" name="FontFamily" id="FontFamily" value="Verdana">Verdana
            <input type="radio" name="FontFamily" id="FontFamily" value="Helvetica">Helvetica
            <input type="radio" name="FontFamily" id="FontFamily" value="Sans-Serif">Sans-Serif
            <br><br>
        <p><b>Font Size setting</b></p>
            <input type="radio" name="FontSize" id="FontSize" value="2em">Size 2
            <input type="radio" name="FontSize" id="FontSize" value="5em">Size 5
            <input type="radio" name="FontSize" id="FontSize" value="10em">Size 10
            <br><br>
            <input type="submit" name="send">
        </form>
        <br><br><br>

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            if(!isset($_COOKIE[$nameBackgroundColor])){
                echo "Background Color is set as " . $valueBackgroundColor . "<br>";
            }
            if(!isset($_COOKIE[$nameFontFamily])){
                echo "Font Family is set as " . $valueFontFamily . "<br>";
            }
            if(!isset($_COOKIE[$nameFontSize])){
                echo "Font Size is set as " . $valueFontSize . "<br>";
            }
        }
        ?>
    </body>
</html>