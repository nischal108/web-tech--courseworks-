<?php
require 'db.php';

$name = $_POST['name'];
$age = $_POST['age'];
$grade = $_POST['grade'];

$sql = "INSERT INTO students (name, age, grade) VALUES ('$name', '$age', '$grade')";

if ($conn->query($sql) === TRUE) {
    $message = "New student added successfully";
} else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        p {
            margin-bottom: 20px;
            color: #555;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Student Result</h2>
        <p><?php echo $message; ?></p>
        <a href="add_student.php" class="button">Add Another Student</a>
        <a href="view_students.php" class="button">View Students</a>
    </div>
</body>
</html>
