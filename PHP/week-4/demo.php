<?php
//PHP database demo

//Connecting to a database
$dbHandler = new PDO("mysql:host=<location>;dbname=<databsaename>;charset=utf8", <username>, <password>);

//Closing the connection
$dbHandler = null;

//You can use try-catch to catch any errors
try{

}catch(Exception $ex){
    echo $ex;
}

//Preparing a statement and returning it
//You can only use this when you actualy have a dbHandler!
$stmt = $dbHandler->prepare(<sql_query>);

//You can use parameters in the sql queries by adding :<paramname>
$artistName = "The Village People";
//We bind the sql param "artistName" in the query to the varable $artistName in PHP. We also specify that this is a string
$stmt->bindParam("artistName", $artistName, PDO::PARAM_STR);
//Execute the statement to get results
$stmt->execute();
//To see how many rows were affected after execution, we can use rowCount() on the statement
$stmt->rowCount();


//To gather data from a select statement, we can use fetch, fetchall or fetch and bind
//Fetch
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){//We fetch every record one by one as an assoc array
    var_dump($result);
}
//Fetch all
$results = $stmt->fetchall(PDO::FETCH_ASSOC); //Fetch all the results from the statement in an assoc array
foreach($results as $result){//And print them
    var_dump($result);
}
//Fetch and bind
$stmt->bindColumn("id", $identification); //We bind the column "id" to the variable $id
$stmt->bindColumn("name", $somename); //We bind the column "name" to the variable $name
//We can also bind by column number. Note, this starts counting at 1
$stmt->bindColumn(1, $identification);
$stmt->bindColumn(2, $somename);

while($result = $stmt->fetch()){//We can again fetch every record one by one after execution
    echo "ID {$identification} is: {$somename}<br>"; //But this time we print by using the "nicely bound" variables instead of an array
}


