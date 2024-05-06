<?php
// simpan_perubahan.php
include 'koneksi.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE clients SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";
if ($koneksi->query($sql) === TRUE) {
    $message = "Data berhasil diperbarui!";
} else {
    $message = "Error: " . $sql . "<br>" . $koneksi->error;
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
