<?php include '../connection/connection.php'; ?>

<html>
<head>
    <title>Daftar User</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #f4f4f4;
        }
        a {
            text-decoration: none;
            color: white;
            background: #e74c3c;
            padding: 5px 10px;
            border-radius: 4px;
        }
        a:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Daftar User</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Password</th>
            <th>Username</th>
            <th>Aksi</th>
           
        </tr>
        <?php
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);

        

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['id_user']."</td>
                        <td>".$row['nama_lengkap']."</td>
                        <td>".$row['alamat']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['password']."</td>
                        <td>".$row['username']."</td>
                        
                        
                        <td><a href='delete_user.php?id_user=".$row['id_user']."' onclick=\"return confirm('Yakin ingin menghapus user ini?');\">Hapus</a></td>

                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Tidak ada user</td></tr>";
        }
        ?>
    </table>
    <div style="text-align:center;">
        <a href="add_user.php">Tambah User Baru</a>
</body>
</html>
