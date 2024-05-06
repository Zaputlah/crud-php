<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border-radius: 3px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Daftar User</h2>
    <a href="create.php" style="margin-left: 20px;">Tambah User Baru</a>
    <table>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM clients";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>";
                echo "<a href='update.php?id=".$row['id']."'>Ubah</a> | ";
                echo "<a href='hapus.php?id=".$row['id']."' onclick='return confirm(\"Apakah Anda yakin ingin menghapus?\")'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
        }
        $koneksi->close();
        ?>
    </table>
</body>
</html>
