<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Toko Barokah - Produk Sembako dan Snack</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .product-card {
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #ffffff;
        }

        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-card h5 {
            margin-top: 12px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .product-card p {
            font-size: 14px;
            color: #555;
            margin-top: 8px;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .product-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product-gallery .product-card {
            width: 300px;
            margin-bottom: 30px;
        }

        .hero-banner {
            background-color: #e9f7f6;
            padding: 50px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 40px;
        }

        .hero-banner h1 {
            font-size: 40px;
            color: #2a9d8f;
            font-weight: bold;
        }

        .hero-banner p {
            font-size: 18px;
            color: #333;
        }

        .cta-section {
            background-color: #2a9d8f;
            padding: 30px;
            text-align: center;
            color: white;
            border-radius: 10px;
        }

        .cta-section h2 {
            font-size: 24px;
            font-weight: bold;
        }

        .cta-section p {
            font-size: 18px;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <?php include 'navbar.php'; ?>
    <div id="layoutSidenav">
        <?php include 'sidebar.php'; ?>
        <div id="layoutSidenav_content">
            <main class="container-fluid px-4">
                <!-- Hero Banner -->
                <section class="hero-banner">
                    <h1>Selamat Datang di Toko Barokah</h1>
                    <p>Tempatnya aneka bahan makanan berkualitas dan snack yang menggugah selera. Belanja sekarang dan nikmati kualitas terbaik!</p>
                </section>

                <!-- Product Gallery (dengan foto toko) -->
                <section class="product-gallery">
                    <div class="product-card">
                        <img src="https://tse1.mm.bing.net/th?id=OIP.WRQivaFNki1hYUshATVyqAHaHa&pid=Api&P=0&h=180" alt="Suasana Toko Barokah" />
                        <h5>Suasana Toko Barokah</h5>
                        <p>Berbelanja dengan nyaman di toko kami yang bersih dan rapi. Semua produk tersedia dengan mudah!</p>
                    </div>

                    <div class="product-card">
                        <img src="https://tse4.mm.bing.net/th?id=OIP.KuTFMYVzS7zarXLunN9KfAHaEx&pid=Api&P=0&h=180" alt="Layanan Toko Barokah" />
                        <h5>Layanan Terbaik</h5>
                        <p>Pelayanan cepat dan ramah, siap membantu Anda mencari produk yang Anda butuhkan.</p>
                    </div>

                    <div class="product-card">
                        <img src="https://tse4.mm.bing.net/th?id=OIP.V4kQqjBxqqXpPd3PE-RN8QHaGF&pid=Api&P=0&h=180" alt="Toko Barokah Penuhi Kebutuhan Anda" />
                        <h5>Kebutuhan Sehari-hari</h5>
                        <p>Semua kebutuhan sembako dan snack ada di sini. Kami pastikan kualitas terbaik!</p>
                    </div>
                </section>


                <!-- Call to Action Section -->
                <section class="cta-section">
                    <h2>Jangan Lewatkan Kesempatan Belanja Produk Berkualitas!</h2>
                    <p>Belanja sekarang di Toko Barokah dan nikmati promo menarik setiap harinya!</p>
                </section>

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