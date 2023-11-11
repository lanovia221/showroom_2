<?php 
include '../auth/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve input values
	$customerId = $_POST["customerId"];
	$vehicleId = $_POST["vehicleId"];
	$totalAmount = $_POST["totalAmount"];

	// Insert data into the vehicle table
	$sql = "INSERT INTO vehicle (customerId, vehicleId, totalAmount) VALUES ('$customerId', '$vehicleId', '$totalAmount')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>


    <h2>Enter Vehicle Information</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="customerId">Customer ID:</label>
        <input type="text" id="customerId" name="customerId" required><br>

        <label for="vehicleId">Vehicle ID:</label>
        <input type="text" id="vehicleId" name="vehicleId" required><br>

        <label for="totalAmount">Total Amount:</label>
        <input type="text" id="totalAmount" name="totalAmount" required><br>

        <input type="submit" value="Submit">
    </form>

</body>
