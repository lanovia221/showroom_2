<?php
include '../auth/koneksi.php';
include 'home.php';

// Get customer Id from button buy
$customerId = isset($_GET['customerId']) ? $_GET['customerId'] : null;
// Check if all required parameters are provided
if ($customerId !== null) {
    // Output the values (you can use these values as needed in your HTML)
    echo "Customer ID: '$customerId'<br>";
} else {
    echo "Missing parameters";
}

$query_vec= mysqli_query($mysqli, "SELECT * FROM vehicle");
$numb = 0; // Initialize the variable outside of the loop
?>
<center>
<h2>Vechicles</h2>
<table class="table table-bordered table-responsive" width="100%">
    <thead class="bg-warning">
        <tr>
            <th>No</th><th>model</th><th>year</th><th>passengers</th>
            <th>Manufacture</th><th>vechicle Id</th><th>Price</th><th>Type</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while ($result_vec= mysqli_fetch_array($query_vec)) {
        $numb++;
    ?>
        <tr>
            <td><?php echo $numb; ?></td>
            <td><?php echo $result_vec['model']; ?></td>
            <td><?php echo $result_vec['year']; ?></td>
            <td><?php echo $result_vec['passengers']; ?></td>
            <td><?php echo $result_vec['manufactur']; ?></td>
            <td><?php echo $result_vec['vehicleId']; ?></td>
            <td><?php echo $result_vec['price']; ?></td>
            <td>Type</td>
            <td>
            <a href='delete-data-order.php?vehicleId=<?php echo $result_vec['vehicleId'];?>' class='btn btn-sm btn-danger'>Delete</a>
            <a href='form-edit-order.php?vehicleId=<?php echo $result_vec['vehicleId'];?>&&page=edit' class='btn btn-sm btn-warning'>Edit</a>
            <a href='tabel_order_vec.php?vehicleId=<?php echo $result_vec['vehicleId'];?>&&page=edit' class='btn btn-sm btn-secondary' name="order">Order</a>
            </td>
        </tr>
    <?php 
    }
    // header("location: home.php");

     ?>
    </tbody>
</table>
</center>


