<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);
    
    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        $error = "Email already exists!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f8f9fa; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 300px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        .btn { background: #6c5ce7; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; width: 100%; }
        .btn:hover { background: #5a4eb0; }
        .link { text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form action="" method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Create a password" required>
            <button type="submit" class="btn">Register</button>
        </form>
        <div class="link">Already have an account? <a href="login.php">Login</a></div>
    </div>
</body>
</html>