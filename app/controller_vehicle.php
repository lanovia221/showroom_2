<?php
class VehicleManager {
    protected $mysqli;

    public function __construct() {
        // Initialize the database connection (you may need to include your connection logic here)
        include '../auth/koneksi.php';
        $this->mysqli = $mysqli;
    }

    public function deleteVehicle($vehicleId) {
        $query = mysqli_query($this->mysqli, "DELETE FROM vehicle WHERE vehicleId='$vehicleId'");
        return $query;
    }

    public function insertVehicle($model, $year, $passengers, $manufactur, $price) {
        $query = mysqli_query($this->mysqli, "INSERT INTO vehicle (model, year, passengers, manufactur, price) 
            VALUES ('$model', '$year', '$passengers', '$manufactur', '$price')");
        return $query;
    }
}

// Create an instance of the VehicleManager class
$vehicleManager = new VehicleManager();

// Check if vehicleId or other parameters are provided in the URL
$vehicleId = isset($_GET['vehicleId']) ? $_GET['vehicleId'] : null;

// Delete vehicle if vehicleId is provided
if ($vehicleId !== null) {
    $deleteResult = $vehicleManager->deleteVehicle($vehicleId);

    if ($deleteResult) {
        echo "Vehicle with ID $vehicleId deleted successfully.";
    } else {
        echo "Failed to delete vehicle. Error: " . mysqli_error($mysqli);
    }
}

// Add vehicle if the "Add Data" button is clicked
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['tambahDataVeh'])) {
    // Sample data (you can customize this)
    $model = '';  // Leave these variables empty to insert blank data
    $year = '';
    $passengers = '';
    $manufactur = '';
    $price = '';

    // Insert the vehicle
    $insertResult = $vehicleManager->insertVehicle($model, $year, $passengers, $manufactur, $price);

    if ($insertResult) {
        echo "Vehicle added successfully.";
    } else {
        echo "Failed to add vehicle. Error: " . mysqli_error($mysqli);
    }
}

header("location:tabel_order.php");
?>
