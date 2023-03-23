<?php
//session checking.
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: loginpage.php");
}
if (isset($_SESSION['username'])) {
    echo "User name is {$_SESSION['username']}.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="login1.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="reg1.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
  </body>
</html>
<?php
/**
 * File name: successpage.php
 * PHP script that checking the user name and password valid or not .
 * PHP version: 8.2
 *
 * @category PHP
 * @package  MyProject\successpage
 * @author   Thanveer.m <thanveer.m@codilar.com>
 */
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];
    if (!file_exists('reg.json')) {
        echo "Error: User registry file not found.";
        exit();
    }
    $users = json_decode(file_get_contents('reg.json'), true);
    $authenticated = false;
    foreach ($users as $user) {
        if ($name == $user['usname'] && $password == $user['password']) {
            $_SESSION['username'] = $name;
            $_SESSION['password'] = $password;
            $authenticated = true;
            echo "Login successful.<br>";
            echo "User name is {$_SESSION['username']}.";
            break;
        }
    }
    if (!$authenticated) {
        echo "Invalid username or password.<br>";
    }
}
?>