<?php
// Quick Activity 1: Display full name and today's date
$name = "Juan Dela Cruz";
echo "Name: " . $name . "<br>";
echo "Today is: " . date("F j, Y") . "<br><br>";

// Quick Activity 2: Variables & Expressions
$username = "admin";
$role = "admin";
$loginAttempts = 2;

echo "Username: " . $username . "<br>";
echo "Role: " . $role . "<br>";
echo "Login Attempts: " . $loginAttempts . "<br>";

if ($loginAttempts < 3) {
    echo "Access allowed<br><br>";
} else {
    echo "Access blocked<br><br>";
}

// Quick Activity 3: Loops
for ($i = 1; $i <= 3; $i++) {
    echo "Login attempt #" . $i . "<br>";
}
echo "<br>";

// Quick Activity 4: Arrays (User Data)
$user = array(
    "username" => "admin",
    "role" => "admin",
    "status" => "active"
);

echo "Username: " . $user["username"] . "<br>";
echo "Role: " . $user["role"] . "<br>";
echo "Status: " . $user["status"] . "<br><br>";

// Quick Activity 5: Array + Condition
if ($user["status"] == "active") {
    echo "User can login<br><br>";
} else {
    echo "User is blocked<br><br>";
}

// Quick Activity 6: Array + Loop (User List)
$users = array(
    array("username" => "admin", "role" => "admin"),
    array("username" => "ana", "role" => "user"),
    array("username" => "ben", "role" => "user")
);

foreach ($users as $user) {
    // Bonus: Add condition inside the loop
    if ($user["role"] == "admin") {
        echo "User: " . $user["username"] . " (ADMIN ACCESS)<br>";
    } else {
        echo "User: " . $user["username"] . " (USER)<br>";
    }
}
?>