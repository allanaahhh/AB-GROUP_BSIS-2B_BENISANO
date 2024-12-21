<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="registerpage.css">
</head>
<body>
<div class="hero">

<video autoplay loop muted plays-inline class="back-video">
  <source src="Website picture/VID_20241201185156.mp4" type="video/mp4">
</video>
</div>
    <div class="container">
    <form action="register1.php" method="POST">
        <h1>Sign Up</h1>
        <form>
            <div class="input-box">
                <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" required>
            </div>
            <div class="input-box">
                <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" required>
            </div>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Create your password" required>
            </div>
            <div class="input-box">
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
            </div>
            <div class="input-box">
                <input type="text" id="contact" name="contact" placeholder="Enter your contact number" required>
            </div>
            <div class="input-box">
                <input type="text" id="address" name="address" placeholder="Enter your address" required>
            </div>
            <div class="input-box">
                <input type="number" id="age" name="age" placeholder="Enter your age" required>
            </div>
            <div class="input-box">
                <input type="date" id="birthday" name="birthday" required>
            </div>
            <button type="submit" class="btn">Sign Up</button>
         </form>
        <div class="register-link">
            <p>Already have an account? <a href="logindraft.php">Login</a></p>
        </div>
     </form>
    </div>
</body>
</html>

