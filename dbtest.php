<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 25/11/2016
 * Time: 12:14
 */


define('DB_SERVER','us-cdbr-azure-southcentral-f.cloudapp.net');
define('DB_USERNAME','b113c9725aa456');
define('DB_PASSWORD','8ee13182');
define('DB_DATABASE','db77');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// test if connection was established, and print any errors
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// create a SQL query as a string
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%l aser%' ";
// execute the SQL query
$result = $db->query($sql_query);
// iterate over $resul t obj ect one $row at a time
// use fetch_array() to return an associative array
while($row = $result->fetch_array()){
 // print out fields from row of data
 echo "<p>".$row['superheroName']."</p>";
}
$result->close();
 // cl ose connection to database
 $db->close();

 ?>