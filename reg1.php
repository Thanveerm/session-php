<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
  <link rel="stylesheet" href="style.css">
</head>
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
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
}

h1 {
  text-align: center;
  margin-top: 50px;
}

form {
  background-color: #fff;
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

button {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 10px;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #3e8e41;
}

.button-group {
  text-align: center;
}
</style>
<body>
  <nav>
    <ul>
      <li><a href="reg.html">Home</a></li>
      <li><a href="reg1.php">Registrtion</a></li>
      <li><a href="loginpage.php">Login</a></li>
    </ul>
  </nav>
  <title>Registration Form</title>
<body>
  <h1>Registration Form</h1>
  <form method="POST" action="reg.php">
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" required>
    </div>
    <div>
      <label for="username">Username:</label>
      <input type="text" name="username" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" name="email" required>
    </div>
    <div>
      <label for="number">Phone:</label>
      <input type="number" name="number" required>
    </div>
    <div>
      <label for="psw">Password:</label>
      <input type="password" name="password" required>
    </div>
    <div class="button-group">
      <button type="submit" name="submit">Submit</button>
      <button type="reset" name="reset">Reset</button>
    </div>
  </form>
</body>
</html>


