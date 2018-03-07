<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "cars");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$make = mysqli_real_escape_string($link, $_GET['make']);
$model = mysqli_real_escape_string($link, $_GET['model']);
$year = mysqli_real_escape_string($link, $_GET['year']);
$color = mysqli_real_escape_string($link, $_GET['color']);
 
// attempt insert query execution
$sql = "INSERT INTO cars (make, model, year, color) VALUES ('$make', '$model', '$year', '$color')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
