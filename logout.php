<?php

 
// Unset all of the session variables

 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>