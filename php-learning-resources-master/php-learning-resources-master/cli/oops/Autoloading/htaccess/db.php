<?php

ob_clean(); // Cleaned the output buffer of header.php

$conn = mysqli_connect($_SERVER['DB_HOST'], $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD'], $_SERVER['DB_NAME']);

// print_r($conn);

exit(); // Terminating this script to stop execution of footer.php