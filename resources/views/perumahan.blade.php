<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perumahan &amp; Stok Unit PIK2 | Agung Sedayu Group</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@600;700&display=swap" rel="stylesheet">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Perumahan &amp; Stok Unit PIK2 | Agung Sedayu Group</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@600;700&display=swap" rel="stylesheet">
</head>
</head>
<body class="portal-body">

    <!-- Navbar -->
    <header class="asg-navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="asg-logo">
                <span class="logo-top">AGUNG SEDAYU</span>
                <span class="logo-bottom">GROUP</span>
            </a>

            <nav class="asg-menu">
                <ul>
                    <li><a href="{{ url('/') }}">← Kembali ke Halaman PIK2</a></li>
                    <li>
                        @if(session('is_manager'))
                            <span id="roleStatusBadge" class="user-badge" style="background:#e6f4ea; color:#1e7e34;">
                                Mode Manager (Akses Edit Aktif)
                            </span>
                        @else
                            <span id="roleStatusBadge" class="user-badge">
                                Mode Pembeli (Lihat Stok)
                            </span>
                        @endif
                    </li>
                    <li>
                        @if(session('is_manager'))
                            <form action="{{ url('/logout-manager') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" id="btnLogoutManager" class="btn-logout">Logout Manager</button>
                            </form>
                        @else
                            <button id="btnOpenLogin" onclick="bukaModalLogin()" class="nav-portal-btn" style="cursor:pointer;">🔐 Login Manager</button>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Header Portal -->
    <section class="portal-header">
        <div class="container">
            <span class="hero-pill" id="portalGoldLabel">KATALOG UNIT &amp; KETERSEDIAAN — PIK2</span>
            <h1 id="portalMainHeading">Data Cluster &amp; Stok Perumahan</h1>
            <p id="portalSubHeading">
                @if(session('is_manager'))
                    Anda masuk sebagai Manager. Anda dapat menambah unit baru, mengubah stok, atau menghapus data.
                @else
                    Informasi ketersediaan unit rumah, cluster, dan lokasi jalan terkini untuk calon pembeli PIK2.
                @endif
            </p>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="container portal-main">

        <!-- Notifikasi Sukses / Error -->
        @if(session('success'))
            <div style="background:#e6f4ea; color:#1e7e34; border:1px solid #b7dfbf; padding:14px 18px; border-radius:8px; margin-bottom:20px; font-weight:600; font-size:0.88rem;">
                ✅ {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div style="background:#f8d7da; color:#721c24; border:1px solid #f1aeb5; padding:14px 18px; border-radius:8px; margin-bottom:20px; font-weight:600; font-size:0.88rem;">
                ⚠️ {{ session('error') }}
            </div>
        @endif

        <!-- 3 Kartu Ringkasan Statistik Stok -->
        <div class="stats-summary-grid">
            <div class="stat-box">
                <div class="stat-icon navy">🏘️</div>
                <div>
                    <span class="stat-label">Total Tipe / Blok</span>
                    <h3 id="statTotalBlok">{{ $daftarRumah->count() }}</h3>
                </div>
            </div>
            <div class="stat-box">
                <div class="stat-icon gold">🔑</div>
                <div>
                    <span class="stat-label">Total Stok Unit Tersedia</span>
                    <h3 id="statTotalStok">{{ $daftarRumah->sum('stok_rumah') }} Unit</h3>
                </div>
            </div>
            <div class="stat-box">
                <div class="stat-icon green">✨</div>
                <div>
                    <span class="stat-label">Cluster Aktif Dipasarkan</span>
                    <h3 id="statTotalCluster">{{ $daftarRumah->pluck('cluster')->unique()->count() }} Cluster</h3>
                </div>
            </div>
        </div>

        <div class="portal-grid" id="perumahanGridLayout" style="grid-template-columns: {{ session('is_manager') ? '350px 1fr' : '1fr' }};">

            <!-- Kolom Kiri: Form Tambah / Edit Data Perumahan (HANYA MUNCUL JIKA MANAGER LOGIN) -->
            @if(session('is_manager'))
            <div class="portal-card form-card" id="managerFormSection">
                <span class="gold-label">PANEL MANAJEMEN STOK</span>
                <h2 id="formTitle">Tambah Data Unit Rumah</h2>
                <div class="gold-divider"></div>

                <form id="perumahanForm" action="{{ url('/perumahan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="formMethod" value="POST">

                    <div class="form-group">
                        <label for="cluster">Nama Cluster</label>
                        <select id="cluster" name="cluster" required>
                            <option value="">-- Pilih Cluster PIK2 --</option>
                            <option value="Cluster Atlanta">Cluster Atlanta</option>
                            <option value="Cluster California">Cluster California</option>
                            <option value="Cluster Florida">Cluster Florida</option>
                            <option value="Cluster San Antonio">Cluster San Antonio</option>
                            <option value="Cluster Pasadena">Cluster Pasadena</option>
                            <option value="Cluster Scarlett">Cluster Scarlett</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kodeUnit">Nomor / Kode Unit</label>
                        <input type="text" id="kodeUnit" name="kode_unit" placeholder="Contoh: Blok A2 / No. 15" required>
                    </div>

                    <div class="form-group">
                        <label for="namaJalan">Lokasi Jalan</label>
                        <input type="text" id="namaJalan" name="nama_jalan" placeholder="Contoh: Jl. Boulevard Utama PIK2" required>
                    </div>

                    <div class="form-group">
                        <label for="tipeRumah">Tipe Rumah</label>
                        <select id="tipeRumah" name="tipe_rumah" required>
                            <option value="">-- Pilih Tipe Rumah --</option>
                            <option value="Type Brown (4.5x10)">Type Brown (4.5x10)</option>
                            <option value="Type Jade (6x10)">Type Jade (6x10)</option>
                            <option value="Type Olive (8x10)">Type Olive (8x10)</option>
                            <option value="Type Sapphire (8x12.5)">Type Sapphire (8x12.5)</option>
                            <option value="Type Emerald (10x15)">Type Emerald (10x15)</option>
                            <option value="Type Diamond (12x20)">Type Diamond (12x20)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="stokRumah">Stok Rumah (Unit)</label>
                        <input type="number" id="stokRumah" name="stok_rumah" min="0" placeholder="Contoh: 5" required>
                    </div>

                    <div class="form-actions">
                        <button type="submit" id="btnSimpan" class="btn-asg-gold full-btn">Simpan Data Rumah</button>
                        <button type="button" id="btnBatal" class="btn-cancel full-btn" style="display:none;" onclick="batalEdit()">Batal Edit</button>
                    </div>
                </form>
            </div>
            @endif

            <!-- Kolom Kanan: Tabel Daftar Cluster & Stok Rumah -->
            <div class="portal-card table-card">
                <div class="table-top-bar">
                    <div>
                        <h2>Daftar Unit &amp; Stok Tersedia</h2>
                        <span class="badge-count">Menampilkan <strong id="totalData">{{ $daftarRumah->count() }}</strong> data unit perumahan</span>
                    </div>
                    <div class="search-wrapper">
                        <span class="search-icon">🔍</span>
                        <input type="text" id="searchInput" class="search-box" placeholder="Cari Cluster, Unit, Jalan, atau Tipe..." onkeyup="cariPerumahan()">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="asg-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Cluster</th>
                                <th>Unit</th>
                                <th>Lokasi Jalan</th>
                                <th>Tipe Rumah</th>
                                <th>Status Stok</th>
                                @if(session('is_manager'))
                                    <th>Aksi Manager</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody id="tabelPerumahanBody">
                            @forelse($daftarRumah as $idx => $rumah)
                                <tr class="data-row">
                                    <td>{{ $idx + 1 }}</td>
                                    <td><strong>{{ $rumah->cluster }}</strong></td>
                                    <td>{{ $rumah->kode_unit }}</td>
                                    <td>{{ $rumah->nama_jalan }}</td>
                                    <td>{{ $rumah->tipe_rumah }}</td>
                                    <td>
                                        @if($rumah->stok_rumah == 0)
                                            <span class="stok-badge stok-habis">Sold Out (0)</span>
                                        @elseif($rumah->stok_rumah <= 3)
                                            <span class="stok-badge stok-menipis">Terbatas ({{ $rumah->stok_rumah }} Unit)</span>
                                        @else
                                            <span class="stok-badge stok-aman">{{ $rumah->stok_rumah }} Unit Tersedia</span>
                                        @endif
                                    </td>
                                    @if(session('is_manager'))
                                        <td>
                                            <button type="button" class="btn-edit"
                                                onclick="editPerumahan({{ $rumah->id }}, '{{ addslashes($rumah->cluster) }}', '{{ addslashes($rumah->kode_unit) }}', '{{ addslashes($rumah->nama_jalan) }}', '{{ addslashes($rumah->tipe_rumah) }}', {{ $rumah->stok_rumah }})">
                                                Edit Stok
                                            </button>
                                            <form action="{{ url('/perumahan/' . $rumah->id) }}" method="POST" style="display:inline;"
                                                onsubmit="return confirm('Yakin ingin menghapus data &quot;{{ addslashes($rumah->cluster) }} - {{ addslashes($rumah->kode_unit) }}&quot;?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-delete">Hapus</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ session('is_manager') ? 7 : 6 }}" style="text-align:center; color:#888; padding:24px;">
                                        Data unit perumahan belum tersedia di database.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <!-- Modal Popup Login Manager -->
    <div id="loginManagerModal" class="modal-overlay" onclick="tutupModalLogin(event)">
        <div class="login-modal-card">
            <button type="button" class="login-close-btn" onclick="tutupModalLoginBtn()">&times;</button>

            <div class="login-modal-header">
                <div class="login-lock-circle">🔐</div>
                <span class="gold-label" style="color:#e3c78a;">OTORISASI INTERNAL</span>
                <h3>Portal Manager PIK2</h3>
                <p>Masuk untuk mengelola ketersediaan unit &amp; memperbarui stok perumahan</p>
            </div>

            <div class="login-modal-body">
                <form id="managerLoginForm" action="{{ url('/login-manager') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="mgrUsername">Username Manager</label>
                        <div class="input-with-icon">
                            <span>👤</span>
                            <input type="text" id="mgrUsername" name="username" placeholder="Masukkan username manager" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mgrPassword">Password</label>
                        <div class="input-with-icon">
                            <span>🔑</span>
                            <input type="password" id="mgrPassword" name="password" placeholder="Masukkan password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-asg-gold full-btn" style="padding: 13px; font-size: 0.9rem; letter-spacing: 0.5px;">
                        Masuk ke Dashboard Manager →
                    </button>

                    <div class="demo-info-box">
                        <strong>💡 Kredensial Demo Manager:</strong><br>
                        Username: <code>manager</code> &nbsp;|&nbsp; Password: <code>admin123</code>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="asg-footer" style="padding-top: 25px; margin-top: 60px;">
        <div class="footer-bottom" style="border-top: none;">
            <div class="container" style="text-align: center;">
                <p>Copyright Agung Sedayu Group 2026 — Katalog Data Perumahan &amp; Stok Unit PIK2</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

    @if(session('is_manager'))
    <script>
        let sedangSubmitForm = false;

        // Tandai jika Manager sedang menekan tombol Simpan, Update, atau Hapus
        document.querySelectorAll('form').forEach(function (form) {
            form.addEventListener('submit', function (e) {
                if (!e.defaultPrevented) {
                    sedangSubmitForm = true;
                }
            });
        });

        // Otomatis logout jika menutup tab, refresh, atau berpindah ke halaman lain
        window.addEventListener('pagehide', function () {
            if (!sedangSubmitForm) {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const formData = new FormData();
                formData.append('_token', csrfToken);
                navigator.sendBeacon("{{ url('/logout-manager') }}", formData);
            }
        });
    </script>
    @endif
</body>
</html>
</body>
</html>