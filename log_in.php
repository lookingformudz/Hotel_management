<?php
    include('db.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // Prepare the SQL query using PDO
        $sql = "SELECT * FROM users WHERE Email = :email AND PasswordHash = :password";
        $stmt = $conn->prepare($sql);
        
        // Bind the parameters to prevent SQL injection
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        
        // Execute the query
        $stmt->execute();

        // Use rowCount() instead of num_rows for PDO
        if ($stmt->rowCount() === 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['userID'] = $user['UserID'];
            $_SESSION['role'] = $user['Role'];
            $_SESSION['name'] = $user['Name'];
            
            // Redirect based on user role
            if ($user['Role'] === 'Admin') {
                header('Location: admin_dashboard.php');
            } else {
                header('Location: user_dashboard.php');
            }
            exit();
        } else {
            echo "Invalid email or password.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        .register-link {
            margin-top: 10px;
            display: block;
            text-align: center;
            color: #007BFF;
            text-decoration: none;
        }
        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h1>Login</h1>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit" name="login">Login</button>
        <a href="register.php" class="register-link">Register</a>
    </form>
</body>
</html>
