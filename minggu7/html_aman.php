<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
echo '<div>' . htmlspecialchars($input, ENT_QUOTES, 'UTF-8') . '</div>';
echo $input;

// Memeriksa apakah input adalah email yang valid
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Lanjutkan dengan pengolahan email yang aman
    echo "Email valid!";
} else {
    // Tangani input yang tidak valid
    echo "Email tidak valid!";
}
