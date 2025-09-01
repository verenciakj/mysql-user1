<?php
include '../connection/connection.php';

$id = $_GET['id_user'] ?? null;

if ($id) {
    $id = intval($id);
    $stmt = $conn->prepare("DELETE FROM user WHERE id_user = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('User berhasil dihapus'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location.href='index.php';</script>";
}
?>
