<?php
include 'db.php'; // Sertakan file koneksi database

$sql = "SELECT * FROM pengaduan ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li><strong>" . htmlspecialchars($row['nama']) . "</strong>: " . nl2br(htmlspecialchars($row['pengaduan'])) . " <em>(" . $row['created_at'] . ")</em></li>";
    }
} else {
    echo "Belum ada pengaduan yang diajukan.";
}

$conn->close();
?>