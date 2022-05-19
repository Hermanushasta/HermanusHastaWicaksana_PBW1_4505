<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pbwminggu10";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT id, firstname, lastname FROM myguests LIMIT 3";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Id : " . $row["id"] . "<br>";
        echo "Name : " . $row["firstname"] . " " . $row["lastname"]. "<br><br>";
    }
}else {
    echo"table is empty.";
}

echo"<br><br>";

$query = "SELECT id, firstname, lastname FROM myguests LIMIT 3, 5";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Id : " . $row["id"] . "<br>";
        echo "Name : " . $row["firstname"] . " " . $row["lastname"]. "<br><br>";
    }
}else {
    echo"table is empty.";
}

echo"<br><br>";


?>