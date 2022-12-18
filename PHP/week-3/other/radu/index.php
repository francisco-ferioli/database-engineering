<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title> Assignment 1</title>
    </head>
    <body>
    <form method="post">
    <label for="number_guest">How many guests would you like to have</label>
    <?php
    $guests=filter_input(INPUT_POST,"number_guest",FILTER_VALIDATE_INT);
    ?>
    <input type="text" name="number_guest" id="number_guest" placeholder="Write number of guests" value="<?php  echo $guests>0 ? $guests : ''?>">
    <?php
    if ($guests>0)
        $_SESSION["guests"]=$guests;
    else if (isset($_POST["submit"]))
        echo "<br>Please provide a number<br>";
    
        if (isset($_SESSION["guests"]) && $_SESSION["guests"]>0)
            include("alergies.php");
       // var_dump($_SESSION);
    ?>
    <?php include("details.php");
    ?>
    <input type="submit" id="submit" value="Confirm reservation">
    </form>
    </body>


</html>

