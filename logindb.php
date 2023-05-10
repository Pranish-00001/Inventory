<?php
$host = 'localhost';
$username = "root";
$password = ""; 
$database = "conection";

$conn = mysqli_connect($host, $username, $password, $database);

$email = $_POST['email'];
$password = $_POST['password'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database to get the user with the matching email
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    

    $a = $row['PASSWORD'];
    if (password_verify($password,$a)) {
        echo "Login successful!";
        header('Location: Form.php');
    } else {
        echo "Incorrect password!";
    }
} else {
    // Email not found
    echo "Email not found!";
}

// Close the database connection
mysqli_close($conn);
?>
