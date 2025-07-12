<?php
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = (int)$_GET['id'];
$sql = "DELETE FROM registration WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: view.php");
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
