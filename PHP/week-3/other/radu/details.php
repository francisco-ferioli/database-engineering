<form method="post">
<?php
$option=filter_input(INPUT_POST,"time",FILTER_SANITIZE_SPECIAL_CHARS);
if (isset($option))
    $_SESSION["time"]=$option;
else if (isset ($_POST["submit"]))
    echo "please make a choice";
echo "<br>";
$email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

?>
<input type="radio" name="time" id="breakfast" value="breakfast" <?php echo ($option=="breakfast" ?"checked" : ""); ?> >
<label for="breakfast">Breakfast</label>
<input type="radio" name="time" id="lunch" value="lunch" <?php echo( $option=="lunch" ?"checked" : ""); ?> >
<label for="lunch">Lunch</label>
<input type="radio" name="time" id="dinner" value="dinner" <?php echo( $option=="dinner" ?"checked" : ""); ?> >
<label for="dinner">Dinner</label>
<br>
<?php
    if ($email!=FALSE)
        $_SESSION["email"]=$email;
    else if (isset($_POST["submit"]))
        echo "please provide a valid mail";
?>
<input type="text" name="email" id="email" placeholder="Write your email">
<input type= "submit" id="submit" value="confirm details">



</form>