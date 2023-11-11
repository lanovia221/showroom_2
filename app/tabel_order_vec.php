<?php
include '../auth/koneksi.php';
include 'home.php';

// Get the customerId from the URL parameter
$customerId = isset($_GET['customerId']) ? $_GET['customerId'] : null;

// Check if customerId is provided
if (!$customerId) {
    echo "Customer Id not provided.";
    exit();
}

$query = mysqli_query($mysqli, "SELECT orders.*, customer.name as customer_name, vehicle.model
                                FROM orders
                                JOIN customer ON orders.customerId = customer.customerId
                                JOIN vehicle ON orders.vechicleId = vehicle.vehicleId
                                WHERE orders.customerId = $customerId");

$numb = 0; // Initialize the variable outside of the loop
?>

<center>
    <h2>Order</h2>
    <table class="table table-bordered table-responsive" width="100%">
        <thead class="bg-warning">
            <tr>
                <th>No</th><th>customer id</th><th>name customer</th><th>vechicle id</th><th>order mobil</th><th>total amount</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($result = mysqli_fetch_array($query)) {
            $numb++;
        ?>
            <tr>
                <td><?php echo $numb; ?></td>
                <td><?php echo $result['customerId']; ?></td>
                <td><?php echo $result['customer_name']; ?></td>
                <td><?php echo $result['vechicleId']; ?></td>
                <td><?php echo $result['model']; ?></td>
                <td><?php echo $result['totalAmount']; ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</center>
