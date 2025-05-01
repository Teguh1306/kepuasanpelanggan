<?php
session_start();
require 'fuction.php';

// Fungsi Tambah Produk
if (isset($_POST['tambahbarang'])) {
    $namaproduk = $_POST['namaproduk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $insert = mysqli_query($conn, "INSERT INTO produk (namaproduk, deskripsi, harga) VALUES ('$namaproduk','$deskripsi','$harga')");
    if ($insert) {
        header('Location: produk.php');
        exit;
    }
}

// Fungsi Edit Produk
if (isset($_POST['editbarang'])) {
    $idproduk = $_POST['idproduk'];
    $namaproduk = $_POST['namaproduk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $update = mysqli_query($conn, "UPDATE produk SET namaproduk='$namaproduk', deskripsi='$deskripsi', harga='$harga' WHERE idproduk='$idproduk'");
    if ($update) {
        header('Location: produk.php');
        exit;
    }
}

// Fungsi Hapus Produk
if (isset($_POST['hapusbarang'])) {
    $idproduk = $_POST['idproduk'];

    // Query untuk menghapus produk
    $delete = mysqli_query($conn, "DELETE FROM produk WHERE idproduk='$idproduk'");
    if ($delete) {
        header('Location: produk.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include 'navbar.php'; ?>
    <div id="layoutSidenav">
        <?php include 'sidebar.php'; ?>
        <div id="layoutSidenav_content">
            <main class="container-fluid px-4">
                <h1 class="mt-4">Barang Yang Tersedia Di Toko Barokah</h1>

                <button class="btn btn-warning mb-4" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Barang Baru</button>

                <!-- Modal Tambah -->

                <?php if (isset($_SESSION['login'])): ?>
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form method="post" class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">Tambah Barang Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="namaproduk" class="form-control" placeholder="Nama produk" required>
                                    <input type="text" name="deskripsi" class="form-control mt-2" placeholder="Deskripsi" required>
                                    <input type="number" name="harga" class="form-control mt-2" placeholder="Harga" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="tambahbarang">Submit</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Tabel Produk -->
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table me-1"></i>Daftar Produk</div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $get = mysqli_query($conn, "SELECT * FROM produk");
                                $i = 1;
                                $modals = ''; // Penampung semua modal
                                while ($produk = mysqli_fetch_array($get)) {
                                    $idproduk = $produk['idproduk'];
                                    $namaproduk = $produk['namaproduk'];
                                    $deskripsi = $produk['deskripsi'];
                                    $harga = $produk['harga'];
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $namaproduk; ?></td>
                                        <td><?= $deskripsi; ?></td>
                                        <td>Rp <?= number_format($harga, 0, ',', '.'); ?></td>
                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $idproduk; ?>">Edit</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $idproduk; ?>">Hapus</button>
                                        </td>
                                    </tr>

                                <?php
                                    // Modal Edit
                                    $modals .= '
                                <div class="modal fade" id="edit' . $idproduk . '" tabindex="-1" aria-labelledby="editModalLabel' . $idproduk . '" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="post" class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel' . $idproduk . '">Edit Barang</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="idproduk" value="' . $idproduk . '">
                                                <input type="text" name="namaproduk" class="form-control" value="' . htmlspecialchars($namaproduk) . '" required>
                                                <input type="text" name="deskripsi" class="form-control mt-2" value="' . htmlspecialchars($deskripsi) . '" required>
                                                <input type="number" name="harga" class="form-control mt-2" value="' . $harga . '" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" name="editbarang">Simpan Perubahan</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>';

                                    // Modal Hapus
                                    $modals .= '
                                <div class="modal fade" id="delete' . $idproduk . '" tabindex="-1" aria-labelledby="deleteModalLabel' . $idproduk . '" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="post" class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel' . $idproduk . '">Konfirmasi Hapus Barang</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda yakin ingin menghapus barang ' . $namaproduk . '?</p>
                                                <input type="hidden" name="idproduk" value="' . $idproduk . '">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" name="hapusbarang">Hapus</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>';
                                }
                                ?>
                            </tbody>
                        </table>

                        <!-- CETAK SEMUA MODAL DI SINI -->
                        <?php if (isset($_SESSION['login'])): ?>
                            <?= $modals; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </main>

            <?php include 'footer.php'; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>