<?php
include_once 'db_conn.php';

$title = $_POST['titlee'];
$content = $_POST['contentt'];

$insertsql = "INSERT INTO blog (title, detail) VALUES('$title', '$content');";
mysqli_query($conn, $insertsql);

header("location: ../bloglist.php");
