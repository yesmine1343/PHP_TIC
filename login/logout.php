<?php 
session_start();

// Clear all session variables
//session_unset() is identical to $_SESSION = []
$_SESSION = array();

// Destroy the session
if (session_destroy()) {
    // Redirect using PHP header (more reliable than JavaScript)
    header("Location: login.php");
    exit();
} else {
    // Handle session destruction failure
    die("Failed to log out properly. Please try again.");
}
?>
/*Use innerText when you need to display plain text without any HTML formatting, like a simple URL. Use innerHTML when you need to insert HTML elements (like links or images) and interpret HTML tags for formatting, such as making text clickable. */