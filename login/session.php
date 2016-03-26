<?php
require_once('dbconnect.php');
session_start();

$user_check = $_SESSION['login_user'];
$username_sql = mysqli_query($connection, "SELECT username FROM users WHERE username='$user_check'");
$name_sql = mysqli_query($connection, "SELECT name FROM users WHERE username='$user_check'");
$email_sql = mysqli_query($connection, "SELECT email FROM users WHERE username='$user_check'");
$pass_sql = mysqli_query($connection, "SELECT password FROM users WHERE username='$user_check'");
$id_sql = mysqli_query($connection, "SELECT id FROM users WHERE username='$user_check'");

//$row = mysql_fetch_assoc($ses_sql);
$row_username = mysqli_fetch_assoc($username_sql);
$row_name = mysqli_fetch_assoc($name_sql);
$row_email = mysqli_fetch_assoc($email_sql);
$row_pass = mysqli_fetch_assoc($pass_sql);
$row_id = mysqli_fetch_assoc($id_sql);

$username_db = $row_username['username'];
$name_db = $row_name['name'];
$email_db = $row_email['email'];
$pass_db = $row_pass['password'];
$id_db = $row_id['id'];

$_SESSION['login_id']=$id_db;
?>