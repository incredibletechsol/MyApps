<?php
$servername = "localhost";
$username = "dkkkpmba_kasturi";
$password = "Kasturi254@#$";
$dbName = "dkkkpmba_monitor";


// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbName);
echo "Connected";
/*

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT * FROM tbl_friends where id='100'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "- Mobile No " . $row["mobileno"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
$conn->close();

?>