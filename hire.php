<?php
require("dbconnect.php");

// Define an array of available cars
$cars = array(
    "Lamborghini Aventador",
    "Ferrari 488 Spider",
    "Porsche 911 Turbo S"
);

// Check if a car is selected
if(isset($_GET['car']) && in_array($_GET['car'], $cars)) {
    $selectedCar = $_GET['car'];
} else {
    // Display a popup message if no valid car is selected
    echo "<script>alert('Error: Please select a valid car first.'); window.history.back();</script>";
    exit();
}

// Simulate rental prices for demonstration purposes
$rentalPrices = array(
    "Lamborghini Aventador" => 1000,
    "Ferrari 488 Spider" => 800,
    "Porsche 911 Turbo S" => 600
);

// Get rental price for the selected car
$rentalPrice = $rentalPrices[$selectedCar];

// Handle rental confirmation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the rental confirmation
    // For demonstration purposes, let's just display a confirmation message
    $confirmationMessage = "Thank you for renting the $selectedCar. Your rental is confirmed!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire <?php echo $selectedCar; ?> - Supercar Hire Townsville</title>
    <link rel="stylesheet" href="styles/mainstyles.css">\
    
</head>
<body>
    <?php include("inc_header.php"); ?>
    <?php include("inc_nav.php"); ?>

    <div class="container">
    <h2>Hire <?php echo $selectedCar; ?></h2>
    <div class="content">
        <!-- Display the selected car information -->
        <h3>Selected Car:</h3>
        <p><?php echo $selectedCar; ?></p>
        <p>Rental Price: $<?php echo $rentalPrice; ?> per day</p>
        <!-- Display the image of the selected car -->

        <!-- If Else Statement -->
        <?php 
            $imagePath = "images/" . $selectedCar . ".jpg";
            if (file_exists($imagePath)) {
                echo '<img src="' . $imagePath . '" alt="' . $selectedCar . '" width="300">';
            } else {
                echo '<p>Image not found: ' . $imagePath . '</p>';
            }
        ?>
            <!-- Rental confirmation form -->
<h3>Rental Confirmation</h3>
<?php if(isset($confirmationMessage)) : ?>
    <div class="confirmation-message"><?php echo $confirmationMessage; ?></div>
<?php else : ?>
    <form id="rental-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="car" value="<?php echo $selectedCar; ?>">
        <label for="rental-duration">Rental Duration (days):</label>
        <input type="number" id="rental-duration" name="rental-duration" required>
        <button type="submit" onclick="showCongratulations()">Confirm Rental</button>
    </form>
<?php endif; ?>


<!-- Function -->

<script>
    function showCongratulations() {
        alert('Congratulations! Your rental is confirmed.');
    }
</script>


    <?php include("inc_footer.php"); ?>
</body>
</html>
