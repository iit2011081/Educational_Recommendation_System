
<?php

// Inialize session
session_start();

// Include database connection settings
include('config.inc');

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT username FROM user_details WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string(($_POST['password'])) . "')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
        // Set username session variable
        $_SESSION['username'] = $_POST['username'];
        // Jump to secured page
        header('Location: http://localhost/ERS/success_login.php');
}
else {
        // Jump to login page
		        header('Location: http://localhost/ERS/index3.php');
		
}

?>
