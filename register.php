<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize inputs
    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $password = $_POST['password'];
    $dob = $_POST['dob']; // Format: YYYY-MM-DD
    $nationality = htmlspecialchars($_POST['nationality']);

    // Validate inputs
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($dob) || empty($nationality)) {
        echo "All required fields must be filled out.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL query
    $sql = "INSERT INTO guest (FirstName, LastName, Email, Phone, Address, PasswordHash, DOB, Nationality) 
            VALUES (:firstname, :lastname, :email, :phone, :address, :passwordHash, :dob, :nationality)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':firstname', $firstName);
    $stmt->bindParam(':lastname', $lastName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':passwordHash', $hashedPassword);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':nationality', $nationality);

    // Execute query
    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: log_in.php");
        exit();
    } else {
        echo "An error occurred while processing your registration.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">User Registration</h1>
    <form action="register.php" method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone">

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="3"></textarea>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="nationality">Nationality:</label>
        <select id="nationality" name="nationality" required>
            <option value="">Select your nationality</option>
            <option value="American">Filipino</option>
            <option value="American">American</option>
            <option value="British">British</option>
            <option value="Canadian">Canadian</option>
            <option value="Indian">Indian</option>
            <option value="Other">Other</option>
        </select>

        <button type="submit">Register</button>
    </form>
</body>
</html>
