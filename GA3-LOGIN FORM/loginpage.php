<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
  <form action="login_process.php" method="POST">
      <h1>LOGIN</h1>
      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="remember-forget">
        <label><input type="checkbox" name="remember"> Remember me</label>
        <a href="#">Forgot password</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="registerpage.php">Register</a></p>
      </div>
  </form>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
