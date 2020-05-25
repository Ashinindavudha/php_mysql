<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Multiple Data To DB</title>
</head>
<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (firstname, lastname, email, phone, address)
VALUES ('Ashin', 'Obasa', 'ashinobasa@example.com', '092546578', 'Yangon');";
$sql .= "INSERT INTO users (firstname, lastname, email, phone, address)
VALUES ('Mary', 'Moe', 'mary@example.com', '0695847754', 'PyinOoLwin');";
$sql .= "INSERT INTO users (firstname, lastname, email, phone, address)
VALUES ('Julie', 'Dooley', 'julie@example.com', '022214568', 'Naypyidaw')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>