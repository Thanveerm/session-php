<?php
//session.
session_start();
if (isset($_SESSION['username'])) {
    header("Location: loginpage.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login1.css">
</head>
<body>
<nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="reg1.php">Registrtion</a></li>
      <li><a href="loginpage.php">Login</a></li>
    </ul>
  </nav>
</body>
</html>
<?php
/**
 * File name: reg.php
 * PHP script that register data adding into the reg.json file.
 * PHP version: 8.2
 *
 * @category PHP
 * @package  MyProject\reg
 * @author   Thanveer.m <thanveer.m@codilar.com>
 */
session_start();
if (isset($_SESSION['username'])) {
    header("Location: loginpage.php");
    exit;
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $usname = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $password;
    $users = json_decode(file_get_contents('reg.json'), true);
    if (is_array($users)) {
        foreach ($users as $i) {
            if ($i['usname'] == $usname) {
                echo "this is already taken";
                header("Location: reg.html");
                exit();
            }
        }
    } else {
        $users = array();
    }
    $new_user = array(
        'name' => $name,
        'usname' => $usname,
        'email' => $email,
        'number' => $number,
        'password' => $password
        );
    $users[] = $new_user;
    file_put_contents('reg.json', json_encode($users, JSON_PRETTY_PRINT));
    echo "Registration successful.";
}
