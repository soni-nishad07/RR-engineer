

<?php
session_start();
include 'connect.php'; // Include your database connection file

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $conn->real_escape_string($_POST['name']);
    $phone   = $conn->real_escape_string($_POST['phone']);
    $email   = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert query
    $sql = "INSERT INTO contact_form (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

    if ($conn->query($sql) === true) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>RR Engineer</title>

<?php
    include 'link.php';
?>

</head>



<body>


<?php
    include 'nav.php';
?>


    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1>
            Experience the future of roofing <br> with RR Engineering
            </h1>
        </div>
    </div>

 
  


    <!-------footer ----- -->

    <?php
        include 'footer.php';
    ?>

</body>

</html>