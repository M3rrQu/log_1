<?php

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "logg";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Cannot connect with data base: " . $conn->connect_error);
    }

    // Obsługa formularza rejestracji
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // Wstawienie danych użytkownika do tabeli
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $email);
        
        if ($stmt->execute()) {
            echo "Registration complete.";
        } else {
            echo "Error while registration: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="zad.css">
</head>
<body>
    <div class="mid">
    <h2>Registration</h2>
    <form method="post" action="register.php">
        <label>User:</label>
        <input type="text" name="username" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <input class="prz1" type="submit" name="register" value="register">
        <button class="prz1" type="button" onclick="document.location='index.html'">Home</button>
    </form>
</div>
</body>
</html>
