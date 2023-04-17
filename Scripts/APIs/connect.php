<?php
function mySqlConnect(){
    $servername = 'mysql.eecs.ku.edu';
    $username = 'm813m329';
    $password = 'qfv_fhy@ejd7UNT4ehb';
    $database = 'm813m329';
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connection_error) {
        die("Connection failed: " . $conn->connection_error);
      }
    return $conn;
}
?>
