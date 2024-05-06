<?php
// delete.php
include 'koneksi.php';

$message = "";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM clients WHERE id=$id";

    if ($koneksi->query($sql) === TRUE) {
        $message = "Data berhasil dihapus";
    } else {
        $message = "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    $message = "ID tidak ditemukan";
}

$koneksi->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Notification</title>
    <script>
        function redirectToIndex() {
            window.location.href = "index.php";
        }
    </script>
</head>
<body onload="alert('<?php echo $message; ?>'); redirectToIndex();">
    <!-- Script PHP akan menentukan pesan yang akan ditampilkan di pop-up -->
    <!-- Saat halaman dimuat, pop-up akan muncul dengan pesan -->
    <!-- Setelah itu, pengguna akan dialihkan kembali ke index.php secara otomatis -->
</body>
</html>
