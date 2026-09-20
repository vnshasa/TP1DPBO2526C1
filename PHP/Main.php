<?php
require_once __DIR__ . '/Film.php';
session_start();

if (!isset($_SESSION['movies'])) $_SESSION['movies'] = [];
$error = '';

$temp_add = ['id' => '', 'judul' => '', 'genre' => '', 'durasi' => '', 'gambar' => ''];

if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: Main.php");
    exit();
}

if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $durasi = $_POST['durasi'];

    $temp_add = [
        'id' => $id, 
        'judul' => $_POST['judul'], 
        'genre' => $_POST['genre'], 
        'durasi' => $durasi, 
        'gambar' => $_POST['gambar']
    ];

    if (isset($_SESSION['movies'][$id])) {
        $error = "Error: ID sudah dipakai!";
    } elseif (!is_numeric($durasi) || $durasi < 0) {
        $error = "Error: Durasi harus berupa angka dan tidak boleh negatif!";
    } else {
        $film = new Film($id, $_POST['judul'], $_POST['genre'], (int)$durasi, $_POST['gambar']);
        $_SESSION['movies'][$id] = $film;
        $temp_add = ['id' => '', 'judul' => '', 'genre' => '', 'durasi' => '', 'gambar' => ''];
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    if (isset($_SESSION['movies'][$id])) unset($_SESSION['movies'][$id]);
    header("Location: Main.php");
    exit();
}

if (isset($_POST['update'])) {
    $id_lama = $_POST['id_lama'];
    $id_baru = trim($_POST['id_baru']);
    $durasi = $_POST['durasi'];

    if (isset($_SESSION['movies'][$id_lama])) {
        $film = $_SESSION['movies'][$id_lama];
        $update_sukses = true;

        if ($id_baru !== '' && $id_baru !== $id_lama) {
            if (isset($_SESSION['movies'][$id_baru])) {
                $error = "Error: Update ID gagal, ID sudah dipakai!";
                $update_sukses = false;
            } else {
                $film_baru = new Film($id_baru, $film->getJudul(), $film->getGenre(), $film->getDurasi(), $film->getGambar());
                unset($_SESSION['movies'][$id_lama]);
                $_SESSION['movies'][$id_baru] = $film_baru;
                $film = $_SESSION['movies'][$id_baru];
            }
        }

        if ($update_sukses) {
            if (trim($durasi) !== '') {
                if (!is_numeric($durasi) || $durasi < 0) {
                    $error = "Error: Durasi update harus angka positif. Data lain tetap terupdate.";
                } else {
                    $film->setDurasi((int)$durasi);
                }
            }

            if (trim($_POST['judul']) !== '') $film->setJudul($_POST['judul']);
            if (trim($_POST['genre']) !== '') $film->setGenre($_POST['genre']);
            if (trim($_POST['gambar']) !== '') $film->setGambar($_POST['gambar']);
            
            if (empty($error)) {
                header("Location: Main.php");
                exit();
            } else {
                $target_edit = ($id_baru !== '') ? $id_baru : $id_lama;
                header("Location: Main.php?edit=" . urlencode($target_edit) . "&err=" . urlencode($error));
                exit();
            }
        }
    }
}

if (isset($_GET['err'])) {
    $error = $_GET['err'];
}

$searchResult = null;
if (isset($_GET['search_id']) && $_GET['search_id'] !== '') {
    $id = $_GET['search_id'];
    if (isset($_SESSION['movies'][$id])) {
        $searchResult = $_SESSION['movies'][$id];
    }
}

$editData = null;
if (isset($_GET['edit'])) {
    $idEdit = $_GET['edit'];
    if (isset($_SESSION['movies'][$idEdit])) {
        $editData = $_SESSION['movies'][$idEdit];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Manajemen Bioskop</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; color: #333; padding: 30px 50px; margin: 0; }
        h2 { text-align: center; color: #2c3e50; font-size: 2.5em; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 2px; }
        h3 { color: #2980b9; border-bottom: 2px solid #3498db; padding-bottom: 5px; margin-top: 0; }
        .container { display: flex; justify-content: center; margin-top: 20px; }
        .form-card { background: #ffffff; padding: 25px; width: 60%; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); box-sizing: border-box; }
        .form-group { margin-bottom: 15px; }
        input[type="text"] { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; font-size: 14px; transition: border-color 0.3s; }
        input[type="text"]:focus { border-color: #3498db; outline: none; }
        button { padding: 12px 20px; border: none; border-radius: 6px; background-color: #3498db; color: white; cursor: pointer; font-weight: bold; font-size: 14px; transition: background 0.3s; }
        button:hover { background-color: #2980b9; }
        .btn-reset { background-color: #e74c3c; margin-top: 20px; display: block; width: 100%; text-align: center; text-decoration: none; padding: 12px 0; border-radius: 6px; color: white; font-weight: bold; }
        .btn-reset:hover { background-color: #c0392b; }
        .btn-search { background-color: #2ecc71; }
        .btn-search:hover { background-color: #27ae60; }
        .btn-show { background-color: #95a5a6; color: white; text-decoration: none; padding: 12px 20px; border-radius: 6px; font-size: 14px; font-weight: bold; display: inline-block; box-sizing: border-box;}
        .btn-show:hover { background-color: #7f8c8d; }
        table { border-collapse: collapse; width: 100%; margin-top: 30px; background: #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 10px; overflow: hidden; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
        th { background-color: #2c3e50; color: white; text-transform: uppercase; font-size: 14px; letter-spacing: 1px; }
        tr:hover { background-color: #f9f9f9; }
        a.action-link { text-decoration: none; font-weight: bold; margin: 0 8px; }
        a.action-link:hover { text-decoration: underline; }
        .link-edit { color: #f39c12; }
        .link-delete { color: #e74c3c; }
        .error { background-color: #ffeaea; color: #e74c3c; padding: 15px; border-radius: 6px; font-weight: bold; margin-bottom: 20px; text-align: center; border: 1px solid #ffb3b3; }
        .search-box { display: flex; gap: 10px; align-items: center; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h2>Manajemen Data Bioskop</h2>

    <?php if ($error !== ''): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <div class="form-card" style="width: 100%; margin-bottom: 20px;">
        <form method="GET" action="Main.php" class="search-box">
            <input type="text" name="search_id" placeholder="Cari berdasarkan ID Film..." style="width: 300px;">
            <button type="submit" class="btn-search">Cari Data</button>
            <a href="Main.php" class="btn-show">Tampilkan Semua</a>
        </form>
        <?php if ($searchResult): ?>
            <h3 style="margin-top: 20px;">Hasil Pencarian:</h3>
            <p><strong>ID:</strong> <?= htmlspecialchars($searchResult->getId()) ?> &nbsp;|&nbsp; 
               <strong>Judul:</strong> <?= htmlspecialchars($searchResult->getJudul()) ?> &nbsp;|&nbsp; 
               <strong>Genre:</strong> <?= htmlspecialchars($searchResult->getGenre()) ?></p>
        <?php endif; ?>
    </div>

    <div class="container">
        <?php if ($editData): ?>
            <!-- Form Update (Sekarang sudah ada placeholdernya dan tidak required) -->
            <div class="form-card" id="form-update">
                <h3>Update Data Film</h3>
                <form method="POST" action="Main.php">
                    <div class="form-group">
                        <input type="text" name="id_lama" value="<?= htmlspecialchars($editData->getId()) ?>" readonly style="background-color: #eee; cursor: not-allowed; color: #7f8c8d;">
                    </div>
                    <div class="form-group"><input type="text" name="id_baru" placeholder="ID Baru (Isi jika ingin ubah ID)"></div>
                    
                    <!-- Hapus atribut required dan tambah placeholder -->
                    <div class="form-group"><input type="text" name="judul" placeholder="Judul Baru (Kosongkan jika tak ingin diubah)" value="<?= htmlspecialchars($editData->getJudul()) ?>"></div>
                    <div class="form-group"><input type="text" name="genre" placeholder="Genre Baru (Kosongkan jika tak ingin diubah)" value="<?= htmlspecialchars($editData->getGenre()) ?>"></div>
                    <div class="form-group"><input type="text" name="durasi" placeholder="Durasi Baru (Kosongkan jika tak ingin diubah)" value="<?= htmlspecialchars($editData->getDurasi()) ?>"></div>
                    <div class="form-group"><input type="text" name="gambar" placeholder="Path Gambar Baru (Kosongkan jika tak ingin diubah)" value="<?= htmlspecialchars($editData->getGambar()) ?>"></div>
                    
                    <div style="display: flex; gap: 10px;">
                        <button type="submit" name="update" style="width: 75%; background-color: #f39c12;">✎ Simpan Perubahan</button>
                        <a href="Main.php" class="btn-show" style="width: 25%; text-align: center; margin: 0;">Batal</a>
                    </div>
                </form>
            </div>
        <?php else: ?>
            <div class="form-card">
                <h3>Tambah Film Baru</h3>
                <form method="POST" action="Main.php">
                    <div class="form-group"><input type="text" name="id" placeholder="ID Film (Wajib)" value="<?= htmlspecialchars($temp_add['id']) ?>" required></div>
                    <div class="form-group"><input type="text" name="judul" placeholder="Judul Film (Wajib)" value="<?= htmlspecialchars($temp_add['judul']) ?>" required></div>
                    <div class="form-group"><input type="text" name="genre" placeholder="Genre (Wajib)" value="<?= htmlspecialchars($temp_add['genre']) ?>" required></div>
                    <div class="form-group"><input type="text" name="durasi" placeholder="Durasi (menit)" value="<?= htmlspecialchars($temp_add['durasi']) ?>" required></div>
                    <div class="form-group"><input type="text" name="gambar" placeholder="Path Gambar (contoh: images/1.jpg)" value="<?= htmlspecialchars($temp_add['gambar']) ?>" required></div>
                    <button type="submit" name="add" style="width: 100%;">+ Tambah Data</button>
                </form>
            </div>
        <?php endif; ?>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Durasi</th>
            <th>Path Gambar</th>
            <th style="text-align: center;">Aksi</th>
        </tr>
        <?php foreach ($_SESSION['movies'] as $id => $film): ?>
        <tr>
            <td><strong><?= htmlspecialchars($film->getId()) ?></strong></td>
            <td><?= htmlspecialchars($film->getJudul()) ?></td>
            <td><?= htmlspecialchars($film->getGenre()) ?></td>
            <td><?= htmlspecialchars($film->getDurasi()) ?> mnt</td>
            <td style="color: #7f8c8d;"><i><?= htmlspecialchars($film->getGambar()) ?></i></td>
            <td style="text-align: center;">
                <a href="?edit=<?= urlencode($id) ?>#form-update" class="action-link link-edit">Update</a> | 
                <a href="?delete=<?= urlencode($id) ?>" class="action-link link-delete">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="?reset=true" class="btn-reset">⚠ Reset Semua Data (Hapus Session)</a>

</body>
</html>