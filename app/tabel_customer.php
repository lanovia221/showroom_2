<?php
include '../auth/koneksi.php';
include 'home.php';

$query = mysqli_query($mysqli, "SELECT * FROM customer ");
$numb = 0; // Initialize the variable outside of the loop
?>

<center>
    <h2>Showroom UC</h2>
    <a href='tambah-data.php'class='btn btn-sm btn-primary' style='float:left;'>Add Data</a>
    <table class="table table-bordered table-responsive" width="100%">
        <thead class="bg-warning">
            <tr>
                <th>No</th><th>Nama</th><th>Alamat</th><th>Nomer Telp</th><th>Id Card</th><th>customer Id</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($result = mysqli_fetch_array($query)) {
            $numb++;
        ?>
            <tr>
                <td><?php echo $numb; ?></td>
                <td><a href='tabel_order_vec.php?customerId=<?php echo $result['customerId']; ?>'><?php echo $result['name']; ?></td>
                <td><?php echo $result['address']; ?></td>
                <td><?php echo $result['phoneNumber']; ?></td>
                <td><?php echo $result['idCard']; ?></td>
                <td><?php echo $result['customerId']; ?></td>
                <td>
                <a href='delete-data.php?customerId=<?php echo $result['customerId'];?>' class='btn btn-sm btn-danger'>Delete</a>
                <a href='form-edit.php?customerId=<?php echo $result['customerId'];?>&&page=edit' class='btn btn-sm btn-warning'>Edit</a>
                <a href='form-edit-order.php?customerId=<?php echo $result['customerId'];?>&&page=edit' class='btn btn-sm btn-success'>Buy</a>
                </td>
                
            </tr>
        <?php } ?>
        </tbody>
    </table>
</center>
