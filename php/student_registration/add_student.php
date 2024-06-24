<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
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
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        h1 {
            margin-bottom: 30px;
            color: #333;
        }
        form {
            width: 100%;
        }
        label {
            display: block;
            margin-top: 15px;
            text-align: left;
            color: #555;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            padding: 12px 20px;
            border: none;
            background-color: #5cb85c;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #4cae4c;
        }
        a {
            display: block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add a New Student</h1>
        <form action="insert_student.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <label for="grade">Grade:</label>
            <input type="text" id="grade" name="grade" required>
            <button type="submit">Add Student</button>
        </form>
        <a href="view_students.php">View Students</a>
    </div>
</body>
</html>
