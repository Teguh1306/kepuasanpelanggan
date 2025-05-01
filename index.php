<?php
include 'fuction.php';

// Hitung total responden dari seluruh survei
$queryTotal = "SELECT COUNT(*) AS total FROM survei";
$resultTotal = mysqli_query($conn, $queryTotal);
$rowTotal = mysqli_fetch_assoc($resultTotal);
$totalResponden = $rowTotal['total'];


// Ambil data pengalaman belanja
$query1 = "SELECT pengalaman_belanja, COUNT(*) as jumlah FROM survei GROUP BY pengalaman_belanja";
$result1 = mysqli_query($conn, $query1);
$label1 = $data1 = [];
while ($row = mysqli_fetch_assoc($result1)) {
    $label1[] = $row['pengalaman_belanja'];
    $data1[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data kepuasan produk
$query2 = "SELECT kepuasan_produk, COUNT(*) as jumlah FROM survei GROUP BY kepuasan_produk";
$result2 = mysqli_query($conn, $query2);
$label2 = $data2 = [];
while ($row = mysqli_fetch_assoc($result2)) {
    $label2[] = $row['kepuasan_produk'];
    $data2[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data pelayanan
$query3 = "SELECT pelayanan, COUNT(*) as jumlah FROM survei GROUP BY pelayanan";
$result3 = mysqli_query($conn, $query3);
$label3 = $data3 = [];
while ($row = mysqli_fetch_assoc($result3)) {
    $label3[] = $row['pelayanan'];
    $data3[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data suasana
$query4 = "SELECT suasana, COUNT(*) as jumlah FROM survei GROUP BY suasana";
$result4 = mysqli_query($conn, $query4);
$label4 = $data4 = [];
while ($row = mysqli_fetch_assoc($result4)) {
    $label4[] = $row['suasana'];
    $data4[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data harga
$query5 = "SELECT harga, COUNT(*) as jumlah FROM survei GROUP BY harga";
$result5 = mysqli_query($conn, $query5);
$label5 = $data5 = [];
while ($row = mysqli_fetch_assoc($result5)) {
    $label5[] = $row['harga'];
    $data5[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data kualitas produk
$query6 = "SELECT kualitas_produk, COUNT(*) as jumlah FROM survei GROUP BY kualitas_produk";
$result6 = mysqli_query($conn, $query6);
$label6 = $data6 = [];
while ($row = mysqli_fetch_assoc($result6)) {
    $label6[] = $row['kualitas_produk'];
    $data6[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data kebersihan toko
$query7 = "SELECT kebersihan_toko, COUNT(*) as jumlah FROM survei GROUP BY kebersihan_toko";
$result7 = mysqli_query($conn, $query7);
$label7 = $data7 = [];
while ($row = mysqli_fetch_assoc($result7)) {
    $label7[] = $row['kebersihan_toko'];
    $data7[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data kecepatan dan keramahan
$query8 = "SELECT kecepatan_dan_keramahan, COUNT(*) as jumlah FROM survei GROUP BY kecepatan_dan_keramahan";
$result8 = mysqli_query($conn, $query8);
$label8 = $data8 = [];
while ($row = mysqli_fetch_assoc($result8)) {
    $label8[] = $row['kecepatan_dan_keramahan'];
    $data8[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data ketersediaan produk
$query9 = "SELECT ketersediaan_produk, COUNT(*) as jumlah FROM survei GROUP BY ketersediaan_produk";
$result9 = mysqli_query($conn, $query9);
$label9 = $data9 = [];
while ($row = mysqli_fetch_assoc($result9)) {
    $label9[] = $row['ketersediaan_produk'];
    $data9[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data waktu buka dan tutup
$query10 = "SELECT waktu, COUNT(*) as jumlah FROM survei GROUP BY waktu";
$result10 = mysqli_query($conn, $query10);
$label10 = $data10 = [];
while ($row = mysqli_fetch_assoc($result10)) {
    $label10[] = $row['waktu'];
    $data10[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data penyelesaian masalah
$query11 = "SELECT penyelesaian_masalah, COUNT(*) as jumlah FROM survei GROUP BY penyelesaian_masalah";
$result11 = mysqli_query($conn, $query11);
$label11 = $data11 = [];
while ($row = mysqli_fetch_assoc($result11)) {
    $label11[] = $row['penyelesaian_masalah'];
    $data11[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data kemudahan menemukan produk
$query12 = "SELECT kemudahan_menemukan_produk, COUNT(*) as jumlah FROM survei GROUP BY kemudahan_menemukan_produk";
$result12 = mysqli_query($conn, $query12);
$label12 = $data12 = [];
while ($row = mysqli_fetch_assoc($result12)) {
    $label12[] = $row['kemudahan_menemukan_produk'];
    $data12[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data terhadap keinginan berbelanja kembali
$query13 = "SELECT keinginan_berbelanja_kembali, COUNT(*) as jumlah FROM survei GROUP BY keinginan_berbelanja_kembali";
$result13 = mysqli_query($conn, $query13);
$label13 = $data13 = [];
while ($row = mysqli_fetch_assoc($result13)) {
    $label13[] = $row['keinginan_berbelanja_kembali'];
    $data13[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data promosi
$query14 = "SELECT promosi, COUNT(*) as jumlah FROM survei GROUP BY promosi";
$result14 = mysqli_query($conn, $query14);
$label14 = $data14 = [];
while ($row = mysqli_fetch_assoc($result14)) {
    $label14[] = $row['promosi'];
    $data14[] = ($row['jumlah'] / $totalResponden) * 100;;
}

// Ambil data kenyamanan berbelanja
$query15 = "SELECT kenyamanan_berbelanja, COUNT(*) as jumlah FROM survei GROUP BY kenyamanan_berbelanja";
$result15 = mysqli_query($conn, $query15);
$label15 = $data15 = [];
while ($row = mysqli_fetch_assoc($result15)) {
    $label15[] = $row['kenyamanan_berbelanja'];
    $data15[] = ($row['jumlah'] / $totalResponden) * 100;;
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
    .pie-chart-canvas {
        width: 200%;
        max-width: 600px;
        height: auto;
        aspect-ratio: 1/1;
        margin: auto;
    }

    .chart-info {
        margin-top: 20px;
        font-size: 14px;
        color: #333;
    }

    .chart-info p {
        margin: 5px 0;
    }
</style>

<head>
    <meta charset="utf-8" />
    <title>Dashboard - Tingkat Kepuasan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4"></script>


</head>

<body class="sb-nav-fixed">

    <!-- Memanggil Navbar -->
    <?php include 'navbar.php'; ?>

    <div id="layoutSidenav">
        <!-- Memanggil Sidebar -->
        <?php include 'sidebar.php'; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <p><strong>Total Responden Keseluruhan:</strong> <?= $totalResponden; ?></p>

                    <!-- Diagram Pengalaman Belanja -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Pengalaman Belanja</div>
                        <div class="card-body"><canvas id="chart1" class="pie-chart-canvas"></canvas></div>
                    </div>
                    <!-- Diagram Kualitas Produk -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Kepuasan Produk</div>
                        <div class="card-body"><canvas id="chart2" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram Pelayanan -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Pelayanan</div>
                        <div class="card-body"><canvas id="chart3" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram Suasana -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Suasana</div>
                        <div class="card-body"><canvas id="chart4" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram harga -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Harga</div>
                        <div class="card-body"><canvas id="chart5" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram kualitas produk -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Kualitas Produk</div>
                        <div class="card-body"><canvas id="chart6" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram kebersihan dilingkungan toko -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Kebersihan dilingkungan toko</div>
                        <div class="card-body"><canvas id="chart7" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram kecepatan dan keramahan -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Kecepatan dan keramahan</div>
                        <div class="card-body"><canvas id="chart8" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram ketersediaan produk-->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Ketersediaan produk</div>
                        <div class="card-body"><canvas id="chart9" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram waktu buka dan tutup -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Buka tutup</div>
                        <div class="card-body"><canvas id="chart10" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram penyelesaian masalah -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Penyelesaian masalah</div>
                        <div class="card-body"><canvas id="chart11" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram kemudahan menemukan produk-->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Kemudahan menemukan produk</div>
                        <div class="card-body"><canvas id="chart12" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram keinginan belanja kembali -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Keinginan belanja kembali</div>
                        <div class="card-body"><canvas id="chart13" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram merekomendasikan -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Merekomendasikan</div>
                        <div class="card-body"><canvas id="chart14" class="pie-chart-canvas"></canvas></div>
                    </div>

                    <!-- Diagram kenyamanan belanja -->
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-bar me-1"></i>Kenyamanan belanja</div>
                        <div class="card-body"><canvas id="chart15" class="pie-chart-canvas"></canvas></div>
                    </div>

                </div>
            </main>

            <!-- Memanggil Footer -->
            <?php include 'footer.php'; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script>
        function buatPieChart(id, labels, data, warna) {
            var chart = new Chart(document.getElementById(id), {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: warna,
                        borderColor: 'rgba(255,255,255,0.8)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'bottom'
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem, chartData) {
                                var dataset = chartData.datasets[tooltipItem.datasetIndex];
                                var currentValue = dataset.data[tooltipItem.index];
                                var percentage = currentValue;
                                percentage = percentage % 1 === 0 ? percentage.toFixed(0) : percentage.toFixed(1);
                                return chartData.labels[tooltipItem.index] + ': ' + percentage + '%';
                            }
                        }
                    },
                    animation: {
                        animateScale: true
                    }
                }
            });

            // Tambahkan informasi jumlah responden dan persentase di samping chart
            var chartContainer = document.getElementById(id).parentElement;
            var infoContainer = document.createElement('div');
            infoContainer.classList.add('chart-info');

            labels.forEach((label, index) => {
                var percentage = data[index];
                percentage = percentage % 1 === 0 ? percentage.toFixed(0) : percentage.toFixed(1);
                var info = document.createElement('p');
                info.innerHTML = `${label}: ${percentage}%`;
                infoContainer.appendChild(info);
            });

            chartContainer.appendChild(infoContainer);
        }

        // Warna acak untuk tiap chart
        function generateWarna(jumlah) {
            let warna = [];
            for (let i = 0; i < jumlah; i++) {
                warna.push('hsl(' + (i * 360 / jumlah) + ', 70%, 60%)');
            }
            return warna;
        }

        // Pemanggilan semua chart
        buatPieChart("chart1", <?= json_encode($label1); ?>, <?= json_encode($data1); ?>, generateWarna(<?= count($data1); ?>));
        buatPieChart("chart2", <?= json_encode($label2); ?>, <?= json_encode($data2); ?>, generateWarna(<?= count($data2); ?>));
        buatPieChart("chart3", <?= json_encode($label3); ?>, <?= json_encode($data3); ?>, generateWarna(<?= count($data3); ?>));
        buatPieChart("chart4", <?= json_encode($label4); ?>, <?= json_encode($data4); ?>, generateWarna(<?= count($data4); ?>));
        buatPieChart("chart5", <?= json_encode($label5); ?>, <?= json_encode($data5); ?>, generateWarna(<?= count($data5); ?>));
        buatPieChart("chart6", <?= json_encode($label6); ?>, <?= json_encode($data6); ?>, generateWarna(<?= count($data6); ?>));
        buatPieChart("chart7", <?= json_encode($label7); ?>, <?= json_encode($data7); ?>, generateWarna(<?= count($data7); ?>));
        buatPieChart("chart8", <?= json_encode($label8); ?>, <?= json_encode($data8); ?>, generateWarna(<?= count($data8); ?>));
        buatPieChart("chart9", <?= json_encode($label9); ?>, <?= json_encode($data9); ?>, generateWarna(<?= count($data9); ?>));
        buatPieChart("chart10", <?= json_encode($label10); ?>, <?= json_encode($data10); ?>, generateWarna(<?= count($data10); ?>));
        buatPieChart("chart11", <?= json_encode($label11); ?>, <?= json_encode($data11); ?>, generateWarna(<?= count($data11); ?>));
        buatPieChart("chart12", <?= json_encode($label12); ?>, <?= json_encode($data12); ?>, generateWarna(<?= count($data12); ?>));
        buatPieChart("chart13", <?= json_encode($label13); ?>, <?= json_encode($data13); ?>, generateWarna(<?= count($data13); ?>));
        buatPieChart("chart14", <?= json_encode($label14); ?>, <?= json_encode($data14); ?>, generateWarna(<?= count($data14); ?>));
        buatPieChart("chart15", <?= json_encode($label15); ?>, <?= json_encode($data15); ?>, generateWarna(<?= count($data15); ?>));
    </script>



</body>

</html>