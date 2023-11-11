<?php
include '../auth/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $cargoSize = isset($_POST['cargoSize']) ? mysqli_real_escape_string($mysqli, $_POST['cargoSize']) : '';
    $fuelCapacity = isset($_POST['fuelCapacity']) ? mysqli_real_escape_string($mysqli, $_POST['fuelCapacity']) : '';

    // Check if both cargoSize and fuelCapacity are provided
    if (!empty($cargoSize) && !empty($fuelCapacity)) {
        // Use prepared statement to prevent SQL injection
        $stmt = $mysqli->prepare("INSERT INTO motor (cargoSize, fuelCapacity) VALUES (?, ?)");
        
        // Bind parameters
        $stmt->bind_param("ss", $cargoSize, $fuelCapacity);
        
        // Execute the statement
        $result = $stmt->execute();

        // Check if the query was successful
        if ($result) {
            // Redirect to the desired page after successful insertion
            header("Location: ../edit/edit_motor.php?vehicleId=$vehicleId");
            exit();
        } else {
            // Handle the case where the query failed
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Handle the case where cargoSize or fuelCapacity is empty
        echo "Cargo Size and Fuel Capacity are required.";
    }
} else {
    // Handle the case where the request method is not POST
    echo "Invalid request method.";
}
?>
