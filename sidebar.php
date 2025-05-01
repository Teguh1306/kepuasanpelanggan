<?php

?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="produk.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                    Produk
                </a>

                <!-- Cek session, jika sudah login, jangan tampilkan link survei -->
                <?php if (!isset($_SESSION['user'])): ?>
                    <a class="nav-link" href="survei.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                        Survei
                    </a>
                <?php endif; ?>

                <a class="nav-link" href="about.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                    About me
                </a>
            </div>
        </div>
    </nav>
</div>