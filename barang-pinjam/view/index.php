<!-- view/index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Pinjam</title>
    <link rel="stylesheet" href="../assets/css/style.css">  <!-- Link ke file CSS -->
</head>
<body>
    <div class="container">
        <h1>Daftar Barang Pinjam</h1>

        <!-- Form untuk menambah barang -->
        <form method="POST" action="index.php?action=add">
            <label for="nama">Nama Barang:</label>
            <input type="text" name="nama" id="nama" required>
            <button type="submit">Tambah Barang</button>
        </form>

        <h2>Barang yang Tersedia</h2>
        <ul>
            <?php foreach ($barangList as $barang): ?>
                <li><?php echo htmlspecialchars($barang['nama']); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
