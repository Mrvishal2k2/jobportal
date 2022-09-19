<!-- 
  Copyright 2022
  Vishal R
  @MrVishal2k2 
  mrvishal2k2@pm.me
 -->
 
 <?php
// Initialize the session
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: index.php");
exit;
?>