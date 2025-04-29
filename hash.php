<?php
$password = 'admin123'; // Change this to your actual password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

echo "Hashed Password: " . $hashed_password;
?>