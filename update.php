<!DOCTYPE html>
<html>
<head>
    <title>Perbarui User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #666;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 22px); /* Lebar input dikurangi dengan padding */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Perbarui User</h2>
    <?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM clients WHERE id=$id";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
    <form action="simpanperubahan.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"><br>
        
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"><br>
        
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>"><br>
        
        <label for="address">Alamat:</label><br>
        <textarea id="address" name="address"><?php echo $row['address']; ?></textarea><br><br>
        
        <input type="submit" value="Simpan Perubahan">
    </form>
    <?php
    } else {
        echo "User tidak ditemukan";
    }
    $koneksi->close();
    ?>
</body>
</html>
