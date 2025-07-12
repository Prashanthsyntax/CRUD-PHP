<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Students</title>
    <link rel="stylesheet" href="view.css">
</head>

<body>

    <h1>Registered Students</h1>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM registration");

    if ($result->num_rows > 0) {
        echo "<table>
            <tr><th>Name</th><th>Email</th><th>Age</th><th>Actions</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
        <td data-label='Name'>" . htmlspecialchars($row['name']) . "</td>
        <td data-label='Email'>" . htmlspecialchars($row['email']) . "</td>
        <td data-label='Age'>" . htmlspecialchars($row['age']) . "</td>
        <td data-label='Actions'>
          <a href='edit.php?id=" . $row['id'] . "' class='btn update'>Edit</a>
          <a href='delete.php?id=" . $row['id'] . "' class='btn delete' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
        </td>
      </tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='text-align:center;'>No students found.</p>";
    }

    $conn->close();
    ?>

</body>

</html>