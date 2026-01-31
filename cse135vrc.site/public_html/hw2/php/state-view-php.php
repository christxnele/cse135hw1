<?php
header("Cache-Control: no-cache");
header("Content-Type: text/html; charset=utf-8");

$cookie = "hw2_state_php";

// Clear when requested
if (isset($_GET["clear"]) && $_GET["clear"] === "1") {
    setcookie($cookie, "", time() - 3600, "/");
    header("Location: state-view-php.php");
    exit;
}

$value = $_COOKIE[$cookie] ?? "";
?>
<!doctype html>
<html>
<head>
    <title>State View (PHP)</title>
</head>
<body>
    <h1>State Demo (PHP) – View</h1>

    <p>
        <strong>Saved message:</strong>
        <?= $value === "" ? "<em>(none)</em>" : htmlspecialchars($value) ?>
    </p>

    <p><a href="state-php.php">Back to save</a></p>
    <p><a href="state-view-php.php?clear=1">Clear saved data</a></p>
</body>
</html>
