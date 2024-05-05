<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $gcash_number = $_POST['gcash_number'];
    $amount = $_POST['amount'];
    $reference_number = $_POST['reference_number'];

    // Save the form data to the database (assuming you have a MySQL database set up)
    // Replace 'localhost', 'username', 'password', and 'database_name' with your actual database credentials
    $conn = new mysqli('localhost', 'username', 'password', 'database_name');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO donations (fullname, gcash_number, amount, reference_number) VALUES ('$fullname', '$gcash_number', '$amount', '$reference_number')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // Redirect to a thank you page
        header("Location: thank_you.blade.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
