<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['user'])) {
    // Jika sudah login, hentikan dan tidak tampilkan halaman survei
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Survei</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include 'navbar.php'; ?>

    <div id="layoutSidenav">
        <?php include 'sidebar.php'; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">Selamat Datang Di Halaman Survei Tingkat Kepuasan Pelanggan</h1>
                    <div class="row text-center">
                        <h2>Form Survei Kepuasan</h2>
                        <form action="simpan.php" method="post">
                            <label>Nama:</label><br>
                            <input type="text" name="nama" required><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan pengalaman berbelanja di toko kami?</h5>
                            </label><br>
                            <select name="pengalaman_belanja">
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan produk tersedia di toko kami?</h5>
                            </label><br>
                            <select name="kepuasan_produk">
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan pelayanan yang diberikan oleh toko kami?</h5>
                            </label><br>
                            <select name="pelayanan">
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan suasana dan dekorasi toko kami?</h5>
                            </label><br>
                            <select name="suasana">
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan harga yang ditawarkan di toko kami?</h5>
                            </label><br>
                            <select name="harga"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan kualitas produk yang kami tawarkan?</h5>
                            </label><br>
                            <select name="kualitas_produk"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan kebersihan dilingkungan toko kami?</h5>
                            </label><br>
                            <select name="kebersihan_toko"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan kecepatan dan keramahan penjaga di toko kami?</h5>
                            </label><br>
                            <select name="kecepatan_dan_keramahan"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan ketersedian produk yang ada di toko kami?</h5>
                            </label><br>
                            <select name="ketersediaan_produk"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan waktu buka dan tutup di toko kami?</h5>
                            </label><br>
                            <select name="waktu"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan penyelesain masalah di toko kami?</h5>
                            </label><br>
                            <select name="penyelesaian_masalah"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan kemudahan menemukan produk di toko kami?</h5>
                            </label><br>
                            <select name="kemudahan_menemukan_produk"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda terhadap keinginan berbelanja kembali di toko kami?</h5>
                            </label><br>
                            <select name="keinginan_berbelanja_kembali"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda terhadap kemungkinan merekomendasikan toko ini kepada orang lain?</h5>
                            </label><br>
                            <select name="promosi"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <label>
                                <h5>Seberapa puas Anda dengan kenyamanan berbelanja di toko kami?</h5>
                            </label><br>
                            <select name="kenyamanan_berbelanja"> <!-- Sudah diperbaiki -->
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select><br><br>

                            <input type="submit" value="Kirim">
                        </form>
                    </div>
                </div>
            </main>

            <?php include 'footer.php'; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>