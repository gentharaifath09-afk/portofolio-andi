<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDI - Antrian Digital UNSAP</title>
    <link rel="stylesheet" href="andi/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navigasi -->
    <nav id="navbar">
        <div class="nav-container">
            <h1 class="logo">ANDI<span>.</span></h1>
            <ul class="nav-links">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#fitur">Fitur Utama</a></li>
                <li><a href="#desain-ui">Desain UI/UX</a></li>
                <li><a href="#tim">Tim Kami</a></li>
            </ul>
            <a href="#desain-ui" class="btn-primary">Lihat Desain</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="beranda" class="hero">
        <div class="hero-content">
            <h1>Selamat Tinggal Antrean Panjang & Tidak Pasti!</h1>
            <p><strong>ANDI (Antrian Digital)</strong> hadir untuk merevolusi sistem administrasi dan pembayaran di UNSAP. Cukup Scan QR, pantau antrean secara real-time dari smartphone Anda, dan gunakan waktu Anda untuk hal yang lebih produktif.</p>
            <div class="hero-buttons">
                <a href="#desain-ui" class="btn-primary">Lihat Prototipe</a>
                <a href="#fitur" class="btn-secondary">Pelajari Fitur</a>
            </div>
        </div>
    </header>

    <!-- Tentang & Masalah Section -->
    <section id="tentang" class="section">
        <div class="container text-center">
            <h2>Mengapa Memilih ANDI?</h2>
            <p class="subtitle">Berangkat dari keluhan mahasiswa tentang antrean fisik yang tidak teratur.</p>
            
            <div class="grid-3">
                <div class="card">
                    <h3>❌ Masalah Saat Ini</h3>
                    <p>Mahasiswa sering menunggu lama tanpa kepastian, ruang tunggu penuh, dan rawan terjadi penyerobotan antrean karena ketiadaan sistem yang mengatur urutan.</p>
                </div>
                <div class="card highlight">
                    <h3>✅ Solusi ANDI</h3>
                    <p>Menerapkan sistem First-In-First-Out (FIFO) dengan tiket full digital. Memberikan kepastian waktu dan nomor urut secara transparan.</p>
                </div>
                <div class="card">
                    <h3>📈 Dampak Positif</h3>
                    <p>Mempersingkat waktu tunggu, mengurai kerumunan di ruang administrasi, dan mencegah human error dari petugas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur Section -->
    <section id="fitur" class="section bg-light">
        <div class="container">
            <h2 class="text-center">Fitur Unggulan ANDI</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="icon">📱</div>
                    <h4>Akses Instan via QR Code</h4>
                    <p>Tidak perlu mengunduh aplikasi. Cukup scan QR Code di ruang administrasi untuk langsung masuk ke sistem.</p>
                </div>
                <div class="feature-item">
                    <div class="icon">⏱️</div>
                    <h4>Pemantauan Real-Time</h4>
                    <p>Lihat nomor antrean yang sedang dilayani saat ini dan nomor Anda selanjutnya langsung dari layar HP.</p>
                </div>
                <div class="feature-item">
                    <div class="icon">🔄</div>
                    <h4>Input Manual (Backup)</h4>
                    <p>Browser tertutup tidak sengaja? Jangan panik! Anda bisa memasukkan nomor antrean secara manual untuk memulihkan sesi Anda.</p>
                </div>
                <div class="feature-item">
                    <div class="icon">👤</div>
                    <h4>Fleksibilitas Akun</h4>
                    <p>Masuk menggunakan Akun Mahasiswa untuk menyimpan riwayat, atau gunakan mode Akun Tamu untuk akses super cepat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Desain UI/UX Section (Menggantikan Live Demo) -->
    <section id="desain-ui" class="section bg-primary text-white text-center">
        <div class="container">
            <h2>Rancangan Antarmuka (Wireframe)</h2>
            <p class="subtitle" style="color: #e0e0e0;">Berikut adalah prototipe low-fidelity dari sistem ANDI yang berfokus pada kemudahan pengguna (mahasiswa & tamu).</p>
            
            <div class="wireframe-grid">
                <!-- Card 1 -->
                <div class="wireframe-card">
                    <img src="login.png" alt="Sistem Login dan Registrasi">
                    <h4>1. Akses & Login</h4>
                    <p>Sistem otentikasi awal yang fleksibel. Pengguna dapat melakukan Registrasi, Log in, atau memilih "Tamu saja" untuk akses instan tanpa daftar.</p>
                </div>
                <!-- Card 2 -->
                <div class="wireframe-card">
                    <img src="tiket.png" alt="Sistem Pemilihan Layanan dan Tiket">
                    <h4>2. Tiket Real-Time</h4>
                    <p>Pilih layanan spesifik (Pembayaran, Pendaftaran, dll). Pantau nomor yang 'Saat ini' dilayani, nomor 'Nanti', dan 'Nomor antrean anda'. Dilengkapi fitur Input Manual jika sesi terputus.</p>
                </div>
                <!-- Card 3 -->
                <div class="wireframe-card">
                    <img src="riwayat.png" alt="Sistem Riwayat">
                    <h4>3. Riwayat (History)</h4>
                    <p>Halaman khusus bagi pengguna terdaftar untuk melihat kembali rekam jejak atau riwayat layanan yang pernah diselesaikan sebelumnya.</p>
                </div>
                <!-- Card 4 -->
                <div class="wireframe-card">
                    <img src="rating.png" alt="Sistem Penilaian">
                    <h4>4. Feedback Bintang</h4>
                    <p>Setelah menekan tombol 'sudah', pengguna diarahkan ke sistem ulasan untuk memberikan rating kepuasan layanan dari Bintang 1 hingga 5.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tim Kami -->
    <section id="tim" class="section">
        <div class="container text-center">
            <h2>Tim SYDIGIT (Kelompok 1)</h2>
            <p class="subtitle">Informatika IF-5D - Universitas Sebelas April</p>
            <ul class="team-list">
                <li>Gentha Raifath Hidayatullah</li>
                <li>Ginandjar Wijaya</li>
                <li>Malik Fadillah</li>
                <li>Mochamad Rilfa Ramadhan</li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 ANDI (Antrian Digital) - Project Kolaboratif UI/UX Semester 5.</p>
    </footer>

    <script src="andi/script.js"></script>
</body>
</html>