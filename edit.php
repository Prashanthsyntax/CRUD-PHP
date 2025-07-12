<?php
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = (int)$_GET['id'];
$result = $conn->query("SELECT * FROM registration WHERE id = $id");
$student = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Student</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h1>Edit Student</h1>
    <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?= $student['id'] ?>">
      
      <label for="name">Name:</label>
      <input type="text" name="name" value="<?= htmlspecialchars($student['name']) ?>" required>
      
      <label for="email">Email:</label>
      <input type="email" name="email" value="<?= htmlspecialchars($student['email']) ?>" required>
      
      <label for="age">Age:</label>
      <input type="number" name="age" value="<?= htmlspecialchars($student['age']) ?>" required>
      
      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>

<?php $conn->close(); ?>
