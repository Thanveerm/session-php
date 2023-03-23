<?php
//session
session_start();
if (isset($_SESSION['username'])) {
    header("Location: successpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      nav {
        background-color: #333;
        overflow: hidden;
      }

      nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
      }

      nav li {
        float: left;
      }

      nav li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      nav li a:hover {
        background-color: #111;
      }
      body {
        background-color: #f2f2f2;
      }

      .container {
        background-color: #fff;
        max-width: 500px;
        margin: 0 auto;
        padding: 50px 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        margin-top: 60px;
      }

      h2 {
        text-align: center;
        font-size: 36px;
        color: #555;
        margin-bottom: 30px;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        background-color: #f2f2f2;
        font-size: 16px;
        color: #555;
      }

      button[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 14px 20px;
        margin-top: 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
        font-size: 16px;
        letter-spacing: 1px;
        font-weight: 600;
      }

      button[type="submit"]:hover {
        background-color: #3e8e41;
      }

      label {
        display: block;
        font-size: 16px;
        color: #555;
        margin-bottom: 5px;
      }

      .forgot-password {
        text-align: right;
        font-size: 14px;
        color: #555;
        margin-top: 10px;
        margin-bottom: 30px;
      }

      .forgot-password a {
        color: #4caf50;
        text-decoration: none;
      }

      .register {
        text-align: center;
        font-size: 14px;
        color: #555;
        margin-top: 30px;
      }

      .register a {
        color: #4caf50;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="reg1.php">Registrtion</a></li>
      </ul>
    </nav>
    <div class="container">
      <h2>Login</h2>
      <form method="POST" action="successpage.php">
        <label>Username:</label>
        <input type="text" name="username"  id=usname required />
        <label>Password:</label>
        <input type="password" name="password" required />
        <div class="forgot-password">
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit" name="submit">Login</button>
      </form>
    </div>
  </body>
</html>
