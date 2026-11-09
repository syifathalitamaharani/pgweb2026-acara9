
<?php
include "db.php";

$sql = "SELECT * FROM sppg";
$result = $conn->query($sql);

echo "<h2>Data Persebaran Mitra SPPG Sleman</h2>";

echo "<a href='input/index.html'>Input Data</a><br><br>";

if ($result->num_rows > 0) {

    echo "<table border='1px'>
        <tr>
            <th>ID</th>
            <th>Nama SPPG</th>
            <th>Kecamatan</th>
            <th>Kabupaten</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th colspan='2'>Aksi</th>
        </tr>";

    // Menampilkan data dari database
    while ($row = $result->fetch_assoc()) {

        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nama_sppg']."</td>
            <td>".$row['kecamatan']."</td>
            <td>".$row['kabupaten']."</td>
            <td>".$row['longitude']."</td>
            <td>".$row['latitude']."</td>
            <td>
                <a href='delete.php?id=".$row['id']."'>Hapus</a>
            </td>
            <td>
                <a href='edit/index.php?id=".$row['id']."'>Edit</a>
            </td>
        </tr>";
    }

    echo "</table>";

} else {
    echo "0 results";
}

$conn->close();
?>
