<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIK2 - The New Jakarta City | Agung Sedayu Group</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Top Navigation Bar -->
    <header class="asg-navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="asg-logo">
                <span class="logo-top">AGUNG SEDAYU</span>
                <span class="logo-bottom">GROUP</span>
            </a>

            <nav class="asg-menu">
                <ul>
                    <li><a href="#tentang" data-i18n="nav_corp">Korporasi</a></li>
                    <li><a href="#tipe-unit" class="active" data-i18n="nav_proj">Proyek</a></li>
                    <li><a href="#fasilitas" data-i18n="nav_fac">Fasilitas</a></li>
                    <li><a href="#lokasi" data-i18n="nav_loc">Lokasi</a></li>
                    <li><a href="{{ url('/perumahan') }}" class="nav-portal-btn" data-i18n="nav_portal">Data Cluster &amp; Stok</a></li>
                </ul>
            </nav>

            <!-- Tombol Switcher Bahasa ID | EN | CN -->
            <div class="lang-switch">
                <span class="lang-btn active" onclick="ubahBahasa('id', this)">ID</span>
                <span class="lang-sep">|</span>
                <span class="lang-btn" onclick="ubahBahasa('en', this)">EN</span>
                <span class="lang-sep">|</span>
                <span class="lang-btn" onclick="ubahBahasa('cn', this)">CN</span>
            </div>
        </div>
    </header>

    <!-- Hero Banner PIK2 -->
    <section class="pik-hero">
        <div class="hero-glow"></div>
        <div class="hero-split-container">
            <div class="hero-caption-box">
                <span class="hero-pill" data-i18n="hero_bread">PROYEK / KOTA &amp; KOTAPRAJA / PIK2</span>
                <h1>PIK2</h1>
                <p class="hero-tagline">The New Jakarta City</p>
                <div class="hero-cta-group">
                    <a href="{{ url('/perumahan') }}" class="btn-asg-gold" data-i18n="about_btn">Cek Data Perumahan &amp; Stok →</a>
                    <a href="#fasilitas" class="btn-asg-outline" data-i18n="nav_fac">Jelajahi Fasilitas</a>
                </div>
            </div>

            <div class="hero-photo-box" data-placeholder="assets/hero-pik2.jpg">
                <img src="{{ asset('assets/hero-pik2.jpg') }}" alt="PIK2 The New Jakarta City" onerror="this.style.display='none'">
                <div class="hero-photo-badge">± 2.650 Ha Waterfront City</div>
            </div>
        </div>
    </section>

    <!-- Deskripsi Utama PIK2 (2 Kolom: Teks Kiri + Foto Kanan) -->
    <section id="tentang" class="pik-about container">
        <div class="about-grid">
            <!-- Kolom Kiri: Paragraf Penjelasan -->
            <div class="about-desc">
                <div class="gold-divider"></div>
                <p data-i18n="about_p1"><strong>"PIK2 The New Jakarta City"</strong> merupakan mahakarya terbaru persembahan dari Agung Sedayu Group &amp; Salim Group. PIK2 adalah pengembangan besar yang menghubungkan negara Indonesia dengan seluruh dunia.</p>
                <p data-i18n="about_p2">Berlokasi hanya kurang lebih 7 menit dari Bandara Internasional Soekarno-Hatta, bahkan lebih dekat daripada PIK1, tentunya membuat PIK2 unggul dalam hal konektivitas global, ekspansi bisnis, dan berbagai peluang investasi.</p>
                <p data-i18n="about_p3">PIK2 adalah pengembangan besar-besaran yang akan mencapai sekitar <strong>2.650 hektar</strong>. PIK2 merupakan kota terpadu dengan potensi yang lebih signifikan dan dilengkapi berbagai manfaat serta fasilitas yang lebih komprehensif untuk meningkatkan kualitas hidup.</p>
            </div>

            <!-- Kolom Kanan: Box Foto -->
            <div class="about-photo-box" data-placeholder="assets/about-pik2.jpg">
                <img src="{{ asset('assets/about-pik2.jpg') }}" alt="Kawasan Kota Terpadu PIK2" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <!-- Section Tipe Unit -->
    <section id="tipe-unit" class="pik-units">
        <div class="container">
            <div class="section-heading">
                <span class="gold-label">KOLEKSI HUNIAN &amp; KOMERSIAL</span>
                <h2 data-i18n="unit_title">Tipe Unit</h2>
                <div class="gold-divider center"></div>
                <p data-i18n="unit_sub" style="margin-top:16px;">PIK2 hadir dengan berbagai macam pilihan jenis unit yang dirancang sesuai dengan kebutuhan hunian Anda seperti Rumah, Apartemen, Kavling Rumah, Kavling Komersial, Ruko, Soho, dan Gudang.</p>
            </div>

            <div class="unit-tabs">
                <button class="tab-btn active" onclick="filterUnit('all', this)" data-i18n="tab_all">Semua Unit</button>
                <button class="tab-btn" onclick="filterUnit('apartemen', this)" data-i18n="tab_apt">Apartemen</button>
                <button class="tab-btn" onclick="filterUnit('rumah', this)" data-i18n="tab_house">Rumah Milenial</button>
                <button class="tab-btn" onclick="filterUnit('komersial', this)" data-i18n="tab_comm">Komersial &amp; Gudang</button>
            </div>

            <div class="unit-grid" id="unitGrid">
                <div class="unit-card" data-category="apartemen">
                    <div class="unit-img-wrap" data-placeholder="assets/unit-tokyo.jpg">
                        <img src="{{ asset('assets/unit-tokyo.jpg') }}" alt="Tokyo Riverside Apartment Studio" onerror="this.style.display='none'">
                        <span class="unit-tag">Apartemen</span>
                    </div>
                    <div class="unit-info">
                        <h3>Tokyo Riverside Apartment Studio</h3>
                        <span class="more-link" data-i18n="card_more">Klik untuk melihat spesifikasi →</span>
                    </div>
                </div>

                <div class="unit-card" data-category="apartemen">
                    <div class="unit-img-wrap" data-placeholder="assets/unit-osaka.jpg">
                        <img src="{{ asset('assets/unit-osaka.jpg') }}" alt="Osaka Riverview Apartment 2 BR" onerror="this.style.display='none'">
                        <span class="unit-tag">Apartemen</span>
                    </div>
                    <div class="unit-info">
                        <h3>Osaka Riverview Apartment 2 BR</h3>
                        <span class="more-link" data-i18n="card_more">Klik untuk melihat spesifikasi →</span>
                    </div>
                </div>

                <div class="unit-card" data-category="rumah">
                    <div class="unit-img-wrap" data-placeholder="assets/unit-milenial.jpg">
                        <img src="{{ asset('assets/unit-milenial.jpg') }}" alt="Rumah Milenial - Type Brown (4.5x10)" onerror="this.style.display='none'">
                        <span class="unit-tag">Rumah Milenial</span>
                    </div>
                    <div class="unit-info">
                        <h3>Rumah Milenial - Type Brown (4.5x10)</h3>
                        <span class="more-link" data-i18n="card_more">Klik untuk melihat spesifikasi →</span>
                    </div>
                </div>

                <div class="unit-card" data-category="rumah">
                    <div class="unit-img-wrap" data-placeholder="assets/unit-olive.jpg">
                        <img src="{{ asset('assets/unit-olive.jpg') }}" alt="Rumah Milenial - Type Olive (8x10)" onerror="this.style.display='none'">
                        <span class="unit-tag">Rumah Milenial</span>
                    </div>
                    <div class="unit-info">
                        <h3>Rumah Milenial - Type Olive (8x10)</h3>
                        <span class="more-link" data-i18n="card_more">Klik untuk melihat spesifikasi →</span>
                    </div>
                </div>

                <div class="unit-card" data-category="komersial">
                    <div class="unit-img-wrap" data-placeholder="assets/unit-showroom.jpg">
                        <img src="{{ asset('assets/unit-showroom.jpg') }}" alt="Showroom (9x30)" onerror="this.style.display='none'">
                        <span class="unit-tag">Komersial</span>
                    </div>
                    <div class="unit-info">
                        <h3>Showroom (9x30)</h3>
                        <span class="more-link" data-i18n="card_more">Klik untuk melihat spesifikasi →</span>
                    </div>
                </div>

                <div class="unit-card" data-category="komersial">
                    <div class="unit-img-wrap" data-placeholder="assets/unit-gudang.jpg">
                        <img src="{{ asset('assets/unit-gudang.jpg') }}" alt="Gudang 3 In 1 (6x20)" onerror="this.style.display='none'">
                        <span class="unit-tag">Gudang</span>
                    </div>
                    <div class="unit-info">
                        <h3>Gudang 3 In 1 (6x20)</h3>
                        <span class="more-link" data-i18n="card_more">Klik untuk melihat spesifikasi →</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Fasilitas -->
    <section id="fasilitas" class="pik-facilities container">
        <div class="section-heading">
            <span class="gold-label">WORLD-CLASS AMENITIES</span>
            <h2 data-i18n="fac_title" style="letter-spacing: 2px; text-transform: uppercase;">FASILITAS</h2>
            <div class="gold-divider center"></div>
            <p style="margin-top:12px;">Klik pada foto fasilitas untuk memperbesar tampilan</p>
        </div>

        <div class="fac-slider-wrapper" id="facSliderWrapper">
            <button type="button" class="fac-arrow fac-prev" onclick="geserFasilitasManual(-1)" aria-label="Sebelumnya">&#10094;</button>

            <div class="fac-slide-card" onclick="bukaLightboxFasilitas()" title="Klik untuk memperbesar foto">
                <div class="fac-img-container" id="facPlaceholderBox" data-placeholder="assets/fas-transportasi.jpg">
                    <img id="facSlideImg" src="{{ asset('assets/fas-transportasi.jpg') }}" alt="Fasilitas PIK2" onerror="this.style.display='none'">
                    <div class="fac-zoom-hint">
                        <span>🔍 Klik untuk perbesar</span>
                    </div>
                </div>
                <div class="fac-progress-track">
                    <div class="fac-progress-bar" id="facProgressBar"></div>
                </div>
                <div class="fac-caption-bar" id="facSlideTitle">
                    Akses Transportasi
                </div>
            </div>

            <button type="button" class="fac-arrow fac-next" onclick="geserFasilitasManual(1)" aria-label="Berikutnya">&#10095;</button>
        </div>

        <div class="fac-dots" id="facDotsContainer"></div>

        <div class="fac-icons-grid">
            <div class="fac-icon-item">
                <svg viewBox="0 0 64 64" fill="none" stroke="#849e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 24h32l-3 30H19L16 24z"/>
                    <path d="M24 24v-6a8 8 0 0 1 16 0v6"/>
                    <path d="M28 32v8a4 4 0 0 0 8 0v-8"/>
                </svg>
                <span>Shopping<br>Center</span>
            </div>

            <div class="fac-icon-item">
                <svg viewBox="0 0 64 64" fill="none" stroke="#849e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <ellipse cx="32" cy="28" rx="22" ry="8"/>
                    <path d="M10 28v12c0 4.4 9.8 8 22 8s22-3.6 22-8V28"/>
                    <path d="M20 20v-6l5 2-5 2M32 18v-6l5 2-5 2M44 20v-6l5 2-5 2"/>
                </svg>
                <span>Stadium &amp;<br>Convention<br>Center</span>
            </div>

            <div class="fac-icon-item">
                <svg viewBox="0 0 64 64" fill="none" stroke="#849e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="24" cy="26" r="10"/>
                    <path d="M24 36v14M18 42l6-4M30 40l-6-4"/>
                    <path d="M44 20l-6 12h12l-6-12z"/>
                    <path d="M44 30l-7 12h14l-7-12z"/>
                    <path d="M44 42v8M12 50h40"/>
                </svg>
                <span>Green Belt<br>±60Ha</span>
            </div>

            <div class="fac-icon-item">
                <svg viewBox="0 0 64 64" fill="none" stroke="#849e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M24 44c0-10 4-18 8-24"/>
                    <path d="M32 20c-6-4-12-2-14 2M32 20c6-4 12-2 14 2M32 20c-4-7-10-7-13-4M32 20c4-7 10-7 13-4"/>
                    <path d="M12 44c12-4 28-4 40 0"/>
                    <path d="M16 50c8-2 16 2 24 0s8-2 12 0"/>
                </svg>
                <span>White Sand<br>Beach</span>
            </div>

            <div class="fac-icon-item">
                <svg viewBox="0 0 64 64" fill="none" stroke="#849e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="32,16 10,26 32,36 54,26"/>
                    <path d="M18 30v10c0 4 6.3 8 14 8s14-4 14-8V30"/>
                    <path d="M50 28v14"/>
                    <circle cx="50" cy="44" r="2"/>
                </svg>
                <span>Edu City</span>
            </div>

            <div class="fac-icon-item">
                <svg viewBox="0 0 64 64" fill="none" stroke="#849e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M26 22l-6 26M38 22l6 26"/>
                    <path d="M25 26h14M24 32h16M22 38h20M21 44h22"/>
                    <path d="M10 48c6-2 12 2 18 0s12-2 18 0 6 2 8 0"/>
                </svg>
                <span>Jetty</span>
            </div>

            <div class="fac-icon-item">
                <svg viewBox="0 0 64 64" fill="none" stroke="#849e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="18" y="14" width="28" height="36" rx="2"/>
                    <path d="M26 22v8c0 2 2 3 2 3v9M24 22v6M28 22v6"/>
                    <path d="M36 22v20M36 22c3 0 4 4 4 8h-4"/>
                </svg>
                <span>Culinary</span>
            </div>

            <div class="fac-icon-item">
                <svg viewBox="0 0 64 64" fill="none" stroke="#849e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 26l26-8 6 12-26 8-6-12z"/>
                    <path d="M45 24l6-2 3 6-6 2"/>
                    <path d="M28 36v10H18"/>
                    <circle cx="16" cy="46" r="3"/>
                </svg>
                <span>24hr Security</span>
            </div>
        </div>
    </section>

    <!-- Section Lokasi -->
    <section id="lokasi" class="pik-location">
        <div class="container">
            <div class="section-heading">
                <span class="gold-label">STRATEGIC CONNECTIVITY</span>
                <h2 data-i18n="loc_title">Lokasi</h2>
                <div class="gold-divider center"></div>
                <p style="margin-top:12px;">Jl. Marina Indah Raya No.1 Pantai Indah Kapuk, Jakarta Utara 14470</p>
            </div>
            <div class="map-box">
                <iframe 
                    src="https://maps.google.com/maps?q=Marketing%20Gallery%20PIK2%20Jl.%20Marina%20Indah%20Raya%20No.1&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Peta Lokasi PIK2">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Section Form Promo & Update (Simpan ke MySQL) -->
    <section id="promo" class="pik-promo">
        <div class="container promo-box">
            <span class="gold-label">EXCLUSIVE INVITATION</span>
            <h3 data-i18n="promo_title">Dapatkan informasi promo dan update terbaru</h3>
            <form id="promoForm" class="promo-form" action="{{ url('/promo') }}" method="POST">
                @csrf
                <input type="text" id="promoName" name="nama_lengkap" placeholder="Nama Lengkap" required>
                <input type="email" id="promoEmail" name="email" placeholder="Alamat Email" required>
                <input type="tel" id="promoPhone" name="no_telepon" placeholder="Nomor Telepon / WhatsApp" required>
                <button type="submit" class="btn-asg-gold" data-i18n="promo_btn">Menyerahkan</button>
            </form>
            @if(session('promo_success'))
                <p id="promoSuccess" class="promo-msg" data-i18n="promo_thanks">Terima kasih telah mengirimkan informasi Anda!</p>
            @endif
        </div>
    </section>

    <!-- Footer Korporat ASG -->
    <footer class="asg-footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <h4 data-i18n="nav_corp">Korporasi</h4>
                <ul>
                    <li><a href="https://www.agungsedayu.com/id/about#history" target="_blank" rel="noopener noreferrer">Sejarah Kami</a></li>
                    <li><a href="https://www.agungsedayu.com/id/about#vismis" target="_blank" rel="noopener noreferrer">Visi &amp; Misi</a></li>
                    <li><a href="https://www.agungsedayu.com/id/about#projects" target="_blank" rel="noopener noreferrer">Proyek Kami</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 data-i18n="nav_proj">Proyek</h4>
                <ul>
                    <li><a href="#tentang">Kota &amp; Kotapraja</a></li>
                    <li><a href="#tipe-unit" onclick="filterUnit('apartemen')">Gedung Bertingkat Tinggi</a></li>
                    <li><a href="#fasilitas">Hotel &amp; Mall</a></li>
                    <li><a href="#tipe-unit" onclick="filterUnit('komersial')">Commercial</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 data-i18n="foot_internal">Katalog &amp; Stok</h4>
                <ul>
                    <li><a href="{{ url('/perumahan') }}" style="color:#b4975a; font-weight:600;" data-i18n="nav_portal">Data Cluster &amp; Stok</a></li>
                    <li><a href="https://career.agungsedayu.com/" target="_blank" rel="noopener noreferrer">Karir</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 data-i18n="foot_hq">Kantor Pusat</h4>
                <p>OFFICE TOWER ASG, Jalan Marina Raya, Kamal Muara, Kec. Penjaringan, Jakarta Utara, DKI Jakarta 14470</p>
                <p style="margin-top:8px; color:#b4975a; font-weight:600;">Telp: 021-50282888</p>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>Copyright Agung Sedayu Group 2026</p>
                <small>PASAL SANGGAHAN: Seluruh gambar, keterangan, dan spesifikasi dalam materi website ini merupakan simulasi untuk kebutuhan pengembangan sistem informasi.</small>
            </div>
        </div>
    </footer>

    <!-- Modal Detail Tipe Unit -->
    <div id="unitModal" class="modal-overlay" onclick="tutupModal(event)">
        <div class="modal-box">
            <span class="modal-close" onclick="tutupModalBtn()">&times;</span>
            <span class="gold-label">SPESIFIKASI UNIT PIK2</span>
            <h3 id="modalTitle">Judul Unit</h3>
            <div class="gold-divider"></div>
            <p><strong>Ukuran:</strong> <span id="modalLuas"></span></p>
            <p><strong>Tata Ruang:</strong> <span id="modalKamar"></span></p>
            <p id="modalDesc" class="modal-desc-text"></p>
            <div style="margin-top: 20px;">
                <a href="{{ url('/perumahan') }}" class="btn-asg-gold" style="width:100%; text-align:center;">Lihat Ketersediaan Stok Unit →</a>
            </div>
        </div>
    </div>

    <!-- Modal Lightbox Foto Fasilitas -->
    <div id="facLightboxModal" class="lightbox-overlay" onclick="tutupLightbox(event)">
        <div class="lightbox-content">
            <button type="button" class="lightbox-close" onclick="tutupLightboxBtn()">&times;</button>
            <div class="lightbox-img-frame" id="lightboxImgFrame">
                <img id="lightboxImg" src="" alt="Preview Fasilitas">
            </div>
            <div class="lightbox-info">
                <span class="gold-label">FASILITAS KAWASAN PIK2</span>
                <h3 id="lightboxTitle">Nama Fasilitas</h3>
                <p id="lightboxDesc">Deskripsi fasilitas kawasan PIK2.</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>