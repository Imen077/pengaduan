<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Pengaduan</h1>
    <form action="submit.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        
        <label for="pengaduan">Pengaduan:</label>
        <textarea id="pengaduan" name="pengaduan" required></textarea>
        
        <button type="submit">Kirim Pengaduan</button>
    </form>
    <h2>Daftar Pengaduan</h2>
    <ul>
        <?php include 'data.php'; ?>
    </ul>
</body>
</html>