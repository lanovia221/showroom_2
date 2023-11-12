<?php
include '../auth/koneksi.php';
include 'home.php';

// Get the customerId from the URL parameter
$customerId = isset($_GET['customerId']) ? $_GET['customerId'] : null;

// Check if customerId is provided
if (!$customerId) {
    // If customerId is not provided, fetch all orders
    $query = mysqli_query($mysqli, "SELECT orders.*, customer.name as customer_name, vehicle.model,
                                    (SELECT SUM(totalAmount) FROM order-s o WHERE o.customerId = customer.customerId) as total_amount
                                    FROM orders
                                    JOIN customer ON orders.customerId = customer.customerId
                                    JOIN vehicle ON orders.vechicleId = vehicle.vehicleId");
} else {
    // If customerId is provided, fetch orders for the specific customer
    $query = mysqli_query($mysqli, "SELECT orders.*, customer.name as customer_name, vehicle.model,
                                    (SELECT SUM(totalAmount) FROM orders o WHERE o.customerId = customer.customerId) as total_amount
                                    FROM orders
                                    JOIN customer ON orders.customerId = customer.customerId
                                    JOIN vehicle ON orders.vechicleId = vehicle.vehicleId
                                    WHERE orders.customerId = $customerId");
}

$numb = 0; // Initialize the variable outside of the loop
?>--

<center>
    <h2>Order</h2>
    <table class="table table-bordered table-responsive" width="100%">
        <thead class="bg-warning">
            <tr>
                <th>No</th><th>customer id</th><th>name customer</th><th>vechicle id</th><th>order mobil</th><th>total amount</th><th>Total Amount for Customer</th>
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
                <td><?php echo $result['total_amount']; ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</center>
