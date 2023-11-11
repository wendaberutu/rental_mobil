<!DOCTYPE html>
<html lang="en">

<head>
    <title>Responsive Sidebar</title>
    <!-- Link Styles -->
    <link rel="stylesheet" href="css/style1.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <div class="sidebar">
        <div class="logo_details">
            <div class="logo_name">Kedan & Tour</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search..." />
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Beranda</span>
                </a>
                <span class="tooltip">Beranda</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-car"></i>
                    <span class="link_name">Lihat Mobil</span>
                </a>
                <span class="tooltip">Lihat Mobil</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cart"></i>
                    <span class="link_name">Transaksi</span>
                </a>
                <span class="tooltip">Transaksi</span>
            </li>
            <li class="profile">
                <div class="profile_details">
                    <img src="Profile.png" alt="profile image" />
                    <div class="profile_content">
                        <div class="name">Kalebb2</div>
                        <div class="designation">Pelanggan1</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Beranda</div>
    </section>
    <!-- Scripts -->
    <script src="js/script1.js"></script>
</body>

</html>
