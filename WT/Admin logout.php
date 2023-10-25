<?php
// Initialize the session
session_start();
 
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location:Admin login.php");
exit;
?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Admin login.php");
    exit;
}
 
// Include config file
require_once "connection.php";
 
    // Close connection
    mysqli_close($link);

?>
 
