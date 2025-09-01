<?php include '../connection/connection.php'?>
<!-- Perlu diingat nama nama kolom tabel, kalau error kemungkinan besar
kolomnya salah 
-->
<html>

<head>
    <title>Tambah User</title>
</head>
<body>
    <form action="" method="POST">
        <label>Masukkan Nama Lengkap :</label>
        <input type="text" name="nama_lengkap" required/><br>

        <label>Masukkan alamat :</label>
        <input type="text" name="alamat" ><br>

        <label>Masukkan Email :</label>
        <input type="text" name="email" ><br>

        <label>Masukkan Password :</label>
        <input type="text" name="password" required/><br>

        <label>Masukkan Username :</label>
        <input type="text" name="username" required/><br>
        
        <!-- tag, alt -->
        <input type="submit" name="submit" value="Tambah User" />
    </form>
    <?php 
        if (isset ($_POST['submit'])){
            $nama_lengkap = $_POST['nama_lengkap'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $password= $_POST['password'];
            $username = $_POST['username'];
           

            $sql = "INSERT INTO user(nama_lengkap, alamat, email, password, username) VALUES('$nama_lengkap', '$alamat', '$email', '$password', '$username')";
            if ($conn ->query($sql)===TRUE){
                echo "User berhasil ditambahkan";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    
    ?>
</body>
</html>
