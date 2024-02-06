<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ttlab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if(isset($_GET['save'])) {
    // Retrieve form data
    $first_name = $_GET['firstname'];
    $last_name = $_GET['lastname'];
    $gender = $_GET['gender'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];

    // Insert data into database
    $sql = "INSERT INTO std (firstname, lastname, gender, email, phonenumber)
            VALUES ('$first_name', '$last_name', '$gender', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>