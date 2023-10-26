<html>

<head>
    <title>Add Menu</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>id_menu</td>
                <td><input type="text" name="id_menu"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr>
                <td>jenis</td>
                <td>
                    <select name="jenis" id="jenis">
                        <option value="makanan">makanan</option>
                        <option value="minuman">minuman</option>
                    </select>
            </tr>
            </td>
            <td>id_penjual</td>
            <td><input type="text" name="id_penjual"></td>
            <tr>
            <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['submit'])) {
        $id_menu = $_POST['id_menu'];
        $harga = $_POST['harga'];
        $nama = $_POST['nama'];
        $stok = $_POST['stok'];
        $jenis = $_POST['jenis'];
        $id_penjual = $_POST['id_penjual'];

        // include database connection file
        include_once("config.php");
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penjual(id_menu,harga,nama,stok,jenis,id_penjual) VALUES('$id_menu','$harga','$nama','$stok','$jenis','$id_penjual')");


        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>

</html>