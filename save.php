<?php
include 'koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO clients (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

if ($koneksi->query($sql) === TRUE) {
    // Data berhasil disimpan
    $message = "Data berhasil ditambahkan!";
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
