<?php
// process.php
$host='localhost';
$user='root';
$pass='';
$db='portfolio';

$conn = new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}

// Sanitize
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name=='' || $email=='' || strlen($message)<5) {
  die("Please fill all fields correctly.");
}

// Prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO contacts (name,email,message) VALUES (?,?,?)");
$stmt->bind_param("sss",$name,$email,$message);

if ($stmt->execute()) {
  echo "Thanks, message received!";
} else {
  echo "Error: ".$stmt->error;
}

$stmt->close();
$conn->close();
?>
