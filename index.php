<?php
    session_start();

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";   
    $dbName = "logg";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Cannot connect with data base: " . $conn->connect_error);
    }
    
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if ($password === $row['password']) {
                echo "Valid login details. User logged in.";
                $_SESSION['username'] = $username;
                $_SESSION['userId'] = $row['id'];
                header("Location: calendar.php");

            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "Incorrect user name.";
        }
    
        $stmt->close();
    }
    
    $conn->close();
?>
    
<!DOCTYPE html>
<html>
<head>
    <title>Login form</title>
    <link rel="stylesheet" href="zad.css">
</head>
<body>
    <div class="sr">
        <h2 style="text-align: center;">Login</h2>
        <form method="post" action="login.php">
            <label>User:</label>
            <input type="text" name="username" required><br>
        
            <label>Password:</label>
            <input type="password" name="password" required><br>
        
            <input class="prz1" type="submit" name="login" value="Login">
            <button class="prz1" type="button" onclick="document.location='register.php'">Registration</button>
        </form>
    </div>
</body>
</html> 