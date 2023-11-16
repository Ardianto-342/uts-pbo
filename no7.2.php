<?php
include 'koneksi.php';
// index php
// Ambil data dari tabel pengguna
$query = "SELECT * FROM pengguna";
$result = $koneksi->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Sederhana</title>
</head>
<body>
    <h2>Daftar Pengguna</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php
        // Tampilkan data pengguna
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>