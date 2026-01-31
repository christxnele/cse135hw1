<?php
header("Cache-Control: no-cache");
header("Content-Type: text/html; charset=utf-8");

$cookie = "hw2_state_php";

// Save value
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    setcookie($cookie, $_POST["message"] ?? "", time() + 3600, "/");
    header("Location: state-view-php.php");
    exit;
}
?>
<!doctype html>
<html>
<head>
    <title>State Save (PHP)</title>
</head>
<body>
    <h1>State Demo (PHP) – Save</h1>

    <form method="POST">
        <label>Message
        <input type="text" name="message" required>
        </label>
        <button type="submit">Save</button>
    </form>

    <p><a href="state-view-php.php">View saved data</a></p>
</body>
</html>
