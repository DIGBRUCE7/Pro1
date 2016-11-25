<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 25/11/2016
 * Time: 12:14
 */

$DB_SERVER ='us-cdbr-azure-southcentral-f.cloudapp.net';
$DB_USERNAME ='b113c9725aa456';
$DB_PASSWORD ='8ee13182';
$DB_DATABASE = 'db77';

// Create connection
$db = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// create a SQL query as a string
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%l aser%' ";
// execute the SQL query
$result = $db->query($sql_query);
// iterate over $resul t obj ect one $row at a time
// use fetch_array() to return an associ ative array
while($row = $result->fetch_array()){
    // print out fiel ds from row of data
    echo "<p>" . $row['superheroName' ] . "</p>";
}
$result->close();
 // close connection to database
$db->close();
?>