<?php
session_start();
?>

<!DOCTYPE html>
<head>

<title>my website</title>
</head>
<body>
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="bloglist.php">Blogs</a>
    <a href="contact.php">Contact Us</a>
</body>
</html>

<?php

$cookie_name = "username" ;
$cookie_value = "Alina Rai" ;

setcookie($cookie_name, $cookie_value, time() + (86400*30));
$_SESSION['user_id'] = "alinarai477@gmail.com";
?>
