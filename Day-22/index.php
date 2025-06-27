<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Register Student</h2>
    <form method="POST" action="">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" required><br><br>

        <input type="submit" name="submit" value="Register">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $course = $conn->real_escape_string($_POST['course']);

        $sql = "INSERT INTO students (name, email, course)
                VALUES ('$name', '$email', '$course')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Student registered successfully!</p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }
    ?>
</body>
</html>
