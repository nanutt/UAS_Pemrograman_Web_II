<html>

<head>
<link href="<?= base_url('css/stylefix.css') ?>" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="logo-container">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1107e6ae3e0c4ffc75a966ee66cb08b8c2211ec669962e10fe7c3aa7d7a9c2ff?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&" alt="University Logo" class="logo">
          <div class="logo-text">
            <span class="university-name">Fakultas Teknik</span>
            <span class="faculty-name">Universitas Lambung Mangkurat</span>
          </div>
        </div>
        <div class="search-bar">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/413e5cc496fa41cde703fccff3798ef6d2b9e7d8ba3cf4d88385979ad6375060?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&" alt="Search Icon" class="search-icon">
          <span>Cari Layanan...</span>
        </div>
        <div class="user-info">
          <div class="notification-icon">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/25771309cdb260988e61996623d886458102f7e2ab6fed10a0fa21be1c7f4a0a?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&" alt="Notification Icon" class="menu-icon">
          </div>
          <div class="user-profile">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/853bbc0819994faa9a2050eb7ed7e58b892a6642457e2d21275bcb5e0a032bc5?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&" alt="User Avatar" class="user-avatar">
            <span><?= session()->get('nama') ?></span>
          </div>
        </div>
      </header>
    <div class="flex-container">
        <aside>
            <nav class="sidebar-content">
                <h2 class="menu-header">Menu</h2>
                <a href="#" class="menu-item menu-item-active">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/23004516897fd89185417a24df5acd2efde7ada021f51aab905ec7013a0973b6?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Dashboard</span>
                </a>
                <h3 class="menu-header">Layanan</h3>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/909303d04b13c4acdfb2bb01bbaaedf0e71d42d4e2bf6ab9ed92b70d463a1b58?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Services</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/54841956b91c3a2b13b141b520d2691772abcb6dec3811da97999e14199b6753?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Command Center</span>
                </a>
                <a href="<?= base_url('response') ?>" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/318e321b6fd55843b33e1681cc0913c190905de5a4bdb7991de9c9cf1ef7fd3c?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Response</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a964d722666545a042baf2f0b0397bead9636984f60422d7df7814e82b361c7f?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Commerce</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d671927639c5ee40b4c7229ed2cb85fd3a37cb9e9b36cedbcaa9f595e0d40bff?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Office</span>
                </a>
                <h3 class="menu-header">Other</h3>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b12d8c8eb208bff01c27d17403c7a6bb41a6c6727d2b5d13ec0e2237152d88c?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Kuisioner</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/422190efdeea378ad4c6fca0dbda3a8481c2f22eae302e129275831406912fea?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">FAQ</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/dd53464b406c2f4142d4492ebedc4cce680b02e10192833514de60977148dae1?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Profile</span>
                </a>
                <a href="<?= base_url('login') ?>" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9cb424fbc848abd359c1a5e087aa8b264a3f19718a8ba4e083fb1568891b35df?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Logout</span>
                </a>
            </nav>
        </aside>
        <main>
            <div class="content">
                <div class="dashboard-header">
                    <div class="dashboard-icon">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/38d7d61c4c53b54ffd62628902a19dd42f50dd17f912b65bc9414110d133452a?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                            alt="Dashboard Icon" class="dashboard-icon-img" />
                    </div>
                    <div class="dashboard-title">
                        <h1 class="dashboard-heading">Dashboard</h1>
                        <p class="dashboard-subtitle">Akses menu dan informasi penting lainnya di sini</p>
                    </div>
                </div>
                <div class="notification">
                    <div class="notification-content">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/76f9dc116067f4aad8a024d365a263a415c9096adb80f044d73cb5d6d177bd57?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                            alt="Notification Icon" class="notification-icon" />
                        <div class="notification-text">
                            <p class="notification-message">Kamu belum mengisi kuisioner pada periode semester ini,
                                Silahkan isi Kuisioner</p>
                            <a href="#" class="notification-link">Disini</a>
                        </div>
                    </div>
                    <p class="notification-details">Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi
                        kuisioner. Oleh karena itu, kami mengharapkan agar setiap mahasiswa mengisi kuisioner pada awal
                        setiap semester sebagai bagian dari proses yang diperlukan untuk memberikan pelayanan yang
                        terbaik dan peningkatan kualitas serta evaluasi layanan FT ULM.</p>
                </div>
                <div class="welcome-banner">
                    <div class="welcome-content">
                        <div class="welcome-text">
                            <h2 class="welcome-heading">Selamat Datang  <?= session()->get('nama') ?>!</h2>
                            <p class="welcome-message">Di website ini kamu dapat mengajukan layanan dan mengecek status
                                pengajuannya</p>
                        </div>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2bbf9e5c40755883c24dd2ad3201d4818cbeead958ea3e312ada3e930663d0e3?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                            alt="Welcome Image" class="welcome-image" />
                    </div>
                </div>
                <h3 class="summary-title">Ringkasan</h3>
                <div class="summary-cards">
                    <div class="summary-card">
                        <span class="summary-number">4</span>
                        <span class="summary-label">Layanan diajukan</span>
                    </div>
                    <div class="summary-card">
                        <span class="summary-number">2</span>
                        <span class="summary-label">Menunggu persetujuan</span>
                    </div>
                    <div class="summary-card">
                        <span class="summary-number">1</span>
                        <span class="summary-label">Layanan disetujui</span>
                    </div>
                    <div class="summary-card">
                        <span class="summary-number">1</span>
                        <span class="summary-label">Layanan ditolak</span>
                    </div>
                </div>
                <h3 class="services-title">Mungkin yang kamu butuhkan</h3>
                <div class="services-grid">
                    <div class="services-row">
                        <article class="service-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a9b538ee6f63c8c2d56796702ee6bdda03036dcbdb2f8bc977e0455144c634fa?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                                alt="Surat Keterangan Lulus" class="service-image" />
                            <div class="service-content">
                                <h4 class="service-title">Surat Keterangan Lulus</h4>
                                <p class="service-description">Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan
                                    Pengajuan Surat Keterangan Lulus Kami.</p>
                            </div>
                        </article>
                        <article class="service-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/600fe76bbb60eafbe0d67bf36506ff736561a5a6e21f461b3fca91d180a343ff?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                                alt="Surat Pengantar Izin PKL" class="service-image" />
                            <div class="service-content">
                                <h4 class="service-title">Surat Pengantar Izin PKL</h4>
                                <p class="service-description">Bersiaplah untuk Pengalaman Belajar di Dunia Nyata,
                                    manfaatkan Layanan Pengajuan Surat Pengantar Izin PKL kami</p>
                            </div>
                        </article>
                        <article class="service-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4036aa6852a81769bcd14c7b7b77d45ea475d090fa12dede163f425da234d0e0?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                                alt="Surat Pengantar Izin Penelitian" class="service-image" />
                            <div class="service-content">
                                <h4 class="service-title">Surat Pengantar Izin Penelitian</h4>
                                <p class="service-description">Manfaatkan layanan kami untuk mempercepat proses
                                    pengajuan Surat Pengantar Izin Penelitian dan fokuslah pada penelitianmu</p>
                            </div>
                        </article>
                    </div>
                    <div class="services-row">
                        <article class="service-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9faa2855d906c22eb269dd7c5b452a3c9003a7e9c0baeab74e1a01e11bb9cf22?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                                alt="Permintaan Data MK/PKL/TA" class="service-image" />
                            <div class="service-content">
                                <h4 class="service-title">Permintaan Data MK/PKL/TA</h4>
                                <p class="service-description">Pengajuan Surat Permintaan Data Mata Kuliah / Prakter
                                    Kerja Lapangan / Tugas Akhir Mahasiswa FT ULM</p>
                            </div>
                        </article>
                        <article class="service-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1a70721ed58364dc803f94a4316191e557cc34c7a4bfbbc2bfde268133228a81?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                                alt="Surat Tugas PKL/TA" class="service-image" />
                            <div class="service-content">
                                <h4 class="service-title">Surat Tugas PKL/TA</h4>
                                <p class="service-description">Pengajuan Surat Tugas untuk Kerja Praktek / Tugas Akhir
                                    Mahasiswa Fakultas Teknik Universitas Lambung Mangkurat</p>
                            </div>
                        </article>
                        <article class="service-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/56b1ab03db54ffd65eda45021eee13395025e7a5931559c981afb865176ab075?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                                alt="MBKM FT ULM" class="service-image" />
                            <div class="service-content">
                                <h4 class="service-title">MBKM FT ULM</h4>
                                <p class="service-description">Layanan ini digunakan untuk pendataan dan penerbitan
                                    Surat Tugas pelaksanaan program MBKM FT ULM</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </main>
    </div>
</body>

</html>