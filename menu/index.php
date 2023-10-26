<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT id_menu,harga,nama,stok,jenis,id_penjualDESC");
?>


<html>

<head>
  <title>Homepage</title>
</head>

<body>
  <a href="add.php">Tambahmenu</a><br /><br />

  <table width='50%' border=1>

    <tr>
      <th>id_menu</th>
      <th>harga</th>
      <th>nama</th>
      <th>stok</th>
      <th>jenis</th>
      <th>id_penjual</th>
      
    </tr>
    <?php
    while ($user_data = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $user_data['id_menu'] . "</td>";
      echo "<td>" . $user_data['harga'] . "</td>";
      echo "<td>" . $user_data['nama'] . "</td>";
      echo "<td>" . $user_data['stok'] . "</td>";
      echo "<td>" . $user_data['jenis'] . "</td>";
      echo "<td>" . $user_data['id_penjual'] . "</td>";
      echo "<td><a href='edit.php?id_menu=$user_data[id_menu]'>Edit</a> | <a href='delete.php?id_menu=$user_data[id_menu]'>Delete</a></td></tr>";
    }
    ?>

  </table>
</body>

</html>