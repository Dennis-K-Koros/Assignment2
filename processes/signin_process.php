<?php
require_once "../classlib.php";

$dbConnection = new DbConnection();
$pdo = $dbConnection->getPdo();

session_start();
unset($_SESSION["data"]);

if (isset($_POST["signIn"])) {
    $entered_email = $_POST["email"];
    $entered_password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
    $stmt->execute([$entered_email]);  // Use $entered_email in the query
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        $error_message = "Incorrect username";
        header("Location: ../signin.php?error=" . urlencode($error_message));
        exit();
    } else {
        $stored_password = $user["password"];
        if (password_verify($entered_password, $stored_password)) {
            $_SESSION["data"] = $user;
            header("Location: ../index.php");
            exit();
        } else {
            $error_message = "Incorrect password";
            header("Location: ../signin.php?error=" . urlencode($error_message));
            exit();
        }
    }

    $stmt = null;
} else {
    header("Location: ../signin.php");
    exit();
}
?>
