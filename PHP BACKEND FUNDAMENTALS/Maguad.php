<?php

$user = array(
    "username" => "admin",
    "role" => "admin",
    "loginAttempts" => 2
);

echo "Username: " . $user["username"] . "<br>";
echo "Role: " . $user["role"] . "<br>";
echo "Login Attempts: " . $user["loginAttempts"] . "<br>";

// Condition: Check login attempts
if ($user["loginAttempts"] < 3) {
    echo "Access allowed";
} else {
    echo "Access blocked";
}
?>