<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'php1';

$conn = mysqli_connect($serverName, $username, $password, $dbname);
if (!$conn) {
    die('connection failed: ' . mysqli_connect_error());
}
mysqli_select_db($conn, 'php1');
$mark = $_GET['mark'];
$insertQuery = "insert into mark(mark) values('$mark')";

if (!mysqli_query($conn, $insertQuery)) {
    die('ERROR: ' . mysqli_error($conn));
}else
mysqli_close($conn);
header('Location: ' . $_SERVER['HTTP_REFERER']);

