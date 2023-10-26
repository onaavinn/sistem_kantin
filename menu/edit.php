<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {


    $id_menu = $_POST['id_penjual'];
    $pemebeli = $_POST['nama'];
    $pemesanan = $_POST['alamat'];
    $penjual = $_POST['no_hp'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE penjual SET name='$'id_penjual','$'Id_penjual='$'nama='$'nama'$'alamat='alamat'$'no_hp='no_hp' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id_penjual'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_penjual WHERE id_penjual= $id_penjual");

while ($user_data = mysqli_fetch_array($result)) {
    $id_menu = $user_data['id_penjual'];
    $pembeli = $user_data['nama'];
    $pemesanan = $user_data['alamat'];
    $penjual = $user_data['no_hp'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>id_penjual</td>
                <td><input type="text" name="id_menu" value=<?php echo $id_penjual; ?>></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="pembeli" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="mobile" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>no_hp</td>
                <td><input type="text" name="mobile" value=<?php echo $no_hp; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_penjual" value=<?php echo $_GET['id_penjual']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>