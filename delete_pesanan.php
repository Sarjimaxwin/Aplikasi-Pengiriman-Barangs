<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    if (!empty($id)) {
        // Siapkan query untuk menghapus data berdasarkan ID
        $query = "DELETE FROM tb_pesanan WHERE id = ?";
        if ($stmt = $conn->prepare($query)) {
            // Bind parameter ID ke query
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                echo "Pesanan berhasil dihapus.";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "ID tidak valid.";
    }
}

$conn->close();
?>
// Function to delete pesanan
window.deletePesanan = function(id) {
    if (confirm('Apakah Anda yakin ingin menghapus pesanan ini?')) {
        $.ajax({
            url: 'delete_pesanan.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function(response) {
                alert(response);
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
};
