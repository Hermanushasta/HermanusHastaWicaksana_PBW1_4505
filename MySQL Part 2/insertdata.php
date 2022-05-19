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

$sql = "INSERT INTO myguests (firstname, lastname, email)VALUES 
('John', 'Doe', 'john@example.com'),
('Billy', 'Saputra', 'billy@example.com'), 
('Raffi', 'Ahmad', 'raffi@example.com'),
('Tom', 'Delonge', 'tom@example.com'),
('Travis', 'Barker', 'travis@example.com'), 
('Mark', 'Hoppus', 'mark@example.com'), 
('Matt', 'Shadow', 'matt@example.com'),
('Lil', 'Pump', 'lil@example.com'), 
('Oliver', 'Sykes', 'oliver@example.com'),
('Justin', 'Bieber', 'justin@example.com')"; 

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>