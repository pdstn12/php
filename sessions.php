<?php
// Start the session
session_start();
// Set session variables
$_SESSION["id"] = "1";

echo "Session variables are set.";

echo $_SESSION["id"];
