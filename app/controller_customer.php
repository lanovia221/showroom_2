<?php
class CustomerManager {
    protected $mysqli;

    public function __construct() {
        // Initialize the database connection (you may need to include your connection logic here)
        include '../auth/koneksi.php';
        $this->mysqli = $mysqli;
    }

    public function deleteCustomer($customerId) {
        $query = mysqli_query($this->mysqli, "DELETE FROM customer WHERE customerId='$customerId'");
        return $query;
    }

    public function insertCustomer($name, $address, $phoneNumber, $idCard) {
        $query = mysqli_query($this->mysqli, "INSERT INTO customer (name, address, phoneNumber, idCard) 
            VALUES ('$name', '$address', '$phoneNumber', '$idCard')");
        return $query;
    }
}

// Create an instance of the CustomerManager class
$customerManager = new CustomerManager();

// Check if customerId or other parameters are provided in the URL
$customerId = isset($_GET['customerId']) ? $_GET['customerId'] : null;

// Delete customer if customerId is provided
if ($customerId !== null) {
    $deleteResult = $customerManager->deleteCustomer($customerId);

    if ($deleteResult) {
        echo "Customer with ID $customerId deleted successfully.";
    } else {
        echo "Failed to delete customer. Error: " . mysqli_error($mysqli);
    }
}

// Add customer if the "Add Data" button is clicked
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['tambahData'])) {
    // Sample data (you can customize this)
    $name = '';  // Leave these variables empty to insert blank data
    $address = '';
    $phoneNumber = '';
    $idCard = '';

    // Insert the customer
    $insertResult = $customerManager->insertCustomer($name, $address, $phoneNumber, $idCard);

    if ($insertResult) {
        echo "Customer added successfully.";
    } else {
        echo "Failed to add customer. Error: " . mysqli_error($mysqli);
    }
}

header("location:tabel_customer.php")
?>
