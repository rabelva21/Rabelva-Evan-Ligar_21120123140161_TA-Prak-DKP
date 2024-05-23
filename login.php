<?php
session_start();

function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);

    // Lakukan pengecekan username dan password di sini
    // Misalnya, dengan memeriksa data di database
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Username atau password salah.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class= "image-container">
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMV7CzEVHF-c7nWKNcysHcZaF--bqvB4IzwyS2bleKPA&s">
        <h2>Login</h2>
        <?php if (isset($error)) { echo '<p class="error">' . $error . '</p>'; } ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
</body>
</html>