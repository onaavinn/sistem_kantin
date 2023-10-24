<?php
// Create database connection using config file
include_once("../config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY id_penjual DESC");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <a href="add.php">Penambahan</a><br /><br />

    <table width='80%' border=1>

        <tr>
            <th>id_menu</th>
            <th>pembeli</th>
            <th>pemesanan</th>
            <th>penjual</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['id_menu'] . "</td>";
            echo "<td>" . $user_data['pembeli'] . "</td>";
            echo "<td>" . $user_data['pemesanan'] . "</td>";
            echo "<td>" . $user_data['penjual'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>

    </table>
</body>

</html>