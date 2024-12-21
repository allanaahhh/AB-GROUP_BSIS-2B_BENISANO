<?php
// Database connection
$servername = "localhost";
$database = "crafttique";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize form data
    $firstname = htmlspecialchars(trim($_POST['first-name']));
    $lastname = htmlspecialchars(trim($_POST['last-name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm-password']));
    $contact = htmlspecialchars(trim($_POST['contact']));
    $address = htmlspecialchars(trim($_POST['address']));
    $age = (int)$_POST['age'];
    $birthdate = $_POST['birthday'];

    // Validate passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO signup (firstname, lastname, email, password, contactno, address, age, birthdate) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssis", $firstname, $lastname, $email, $hashed_password, $contact, $address, $age, $birthdate);

    // Execute the statement
    if ($stmt->execute()) {
        // Display success message with design
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Registration Success</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #fffae6;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }
                .container {
                    background-color: #ffd1dc;
                    padding: 30px 50px;
                    border-radius: 15px;
                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                    text-align: center;
                }
                h1 {
                    color: #333;
                    font-size: 24px;
                    margin-bottom: 10px;
                }
                p {
                    color: #555;
                    font-size: 18px;
                    margin-bottom: 20px;
                }
                a {
                    text-decoration: none;
                    color: white;
                    background-color: #ff69b4;
                    padding: 10px 20px;
                    border-radius: 25px;
                    font-size: 16px;
                    transition: background-color 0.3s ease;
                }
                a:hover {
                    background-color: #ff4d94;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1>Registration Successful!</h1>
                <p>Thank you, $firstname $lastname, for registering!</p>
                <a href='loginpage.php'>Login Here</a>
            </div>
        </body>
        </html>";
    } else {
        echo "Error: " . $stmt->error;
    }


    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
