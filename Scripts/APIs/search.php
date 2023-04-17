<?php
require_once('./connect.php');

$SQLConnection = mySqlConnect();

// Send SQL query
$query = "SELECT * FROM CRUISE";
if(!$result = $SQLConnection->query($query)){
    echo "BROKY";
}

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        foreach($row as $row_value){
            echo $row_value;
            echo "<br>";
        }
    }
}
$SQLConnection->close();

?>