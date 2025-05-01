<?php
include 'fuction.php'; // koneksi $conn

// Aktifkan error reporting MySQL
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Ambil data dari form dan bersihkan input
    $nama = htmlspecialchars($_POST['nama']);
    $pengalaman_belanja = htmlspecialchars($_POST['pengalaman_belanja']);
    $kepuasan_produk = htmlspecialchars($_POST['kepuasan_produk']);
    $pelayanan = htmlspecialchars($_POST['pelayanan']);
    $suasana = htmlspecialchars($_POST['suasana']);
    $harga = htmlspecialchars($_POST['harga']);
    $kualitas_produk = htmlspecialchars($_POST['kualitas_produk']);
    $kebersihan_toko = htmlspecialchars($_POST['kebersihan_toko']);
    $kecepatan_dan_keramahan = htmlspecialchars($_POST['kecepatan_dan_keramahan']);
    $ketersediaan_produk = htmlspecialchars($_POST['ketersediaan_produk']);
    $waktu = htmlspecialchars($_POST['waktu']);
    $penyelesaian_masalah = htmlspecialchars($_POST['penyelesaian_masalah']);
    $kemudahan_menemukan_produk = htmlspecialchars($_POST['kemudahan_menemukan_produk']);
    $keinginan_berbelanja_kembali = htmlspecialchars($_POST['keinginan_berbelanja_kembali']);
    $promosi = htmlspecialchars($_POST['promosi']);
    $kenyamanan_berbelanja = htmlspecialchars($_POST['kenyamanan_berbelanja']);

    // Query simpan data
    $sql = "INSERT INTO survei (
                nama, pengalaman_belanja, kepuasan_produk, pelayanan, suasana, harga, 
                kualitas_produk, kebersihan_toko, kecepatan_dan_keramahan, 
                ketersediaan_produk, waktu, penyelesaian_masalah, 
                kemudahan_menemukan_produk, keinginan_berbelanja_kembali, 
                promosi, kenyamanan_berbelanja
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Siapkan statement dan bind parameter
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "ssssssssssssssss",
        $nama,
        $pengalaman_belanja,
        $kepuasan_produk,
        $pelayanan,
        $suasana,
        $harga,
        $kualitas_produk,
        $kebersihan_toko,
        $kecepatan_dan_keramahan,
        $ketersediaan_produk,
        $waktu,
        $penyelesaian_masalah,
        $kemudahan_menemukan_produk,
        $keinginan_berbelanja_kembali,
        $promosi,
        $kenyamanan_berbelanja
    );

    // Eksekusi
    mysqli_stmt_execute($stmt);

    // Redirect dengan alert
    echo "<script>
        alert('Terima kasih atas partisipasi Anda!');
        window.location.href = 'survei.php';
    </script>";
} catch (Exception $e) {
    echo "Terjadi kesalahan saat menyimpan data: " . $e->getMessage();
}
