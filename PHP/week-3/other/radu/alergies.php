<?php
    echo "<form method='post'>";
    $_SESSION["allergies"]=array();
    for($i=1; $i<=$_SESSION["guests"]; $i++)
    {
        echo "<br>";
        array_splice($_SESSION["allergies"],$i-1,0,filter_input(INPUT_POST,"allergy$i",FILTER_SANITIZE_SPECIAL_CHARS));
        
        if (isset( $_SESSION["allergies"][$i-1]))
        {
            $value=$_SESSION["allergies"][$i-1];
        }
        else 
            $value='';
        echo "<input type='text' name='allergy$i' id='allergy$i' placeholder='type allergy' value='$value'>"; 
        
        
    }
    echo "<br><input type='submit' id='submit' value='confirm allergies'>
    </form>";
?>