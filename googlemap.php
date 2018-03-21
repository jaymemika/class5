<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "googlemap");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_GET['id']);
$address = mysqli_real_escape_string($link, $_GET['address']);
$lat = mysqli_real_escape_string($link, $_GET['lat']);
$lng = mysqli_real_escape_string($link, $_GET['lng']);
$type = mysqli_real_escape_string($link, $_GET['type']);
 
// attempt insert query execution
$sql = "INSERT INTO markers (id, address, lat, lng, type) VALUES ('$id', '$address', '$lat', '$lng', '$type')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
