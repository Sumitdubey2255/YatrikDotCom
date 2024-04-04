<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    // Add more fields as per your requirement

    // Insert user data into the database (you can replace this with a database query)
    // ...

    // Redirect to home page or any other page after successful registration
    header("Location: headers.php");
    exit();
}
?>
