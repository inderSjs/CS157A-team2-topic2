<?php ob_start(); //predefined function that will turn on output buffering, useful for redirection
session_start();// creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
include ("db.php");
include ("functions.php");
?>
