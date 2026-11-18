// ==========================================================
// BAGIAN 1: KAMUS MULTI-BAHASA (ID | EN | CN)
// ==========================================================
const kamusBahasa = {
    id: {
        nav_corp: "Korporasi",
        nav_proj: "Proyek",
        nav_fac: "Fasilitas",
        nav_loc: "Lokasi",
        nav_portal: "Data Cluster & Stok",
        hero_bread: "PROYEK / KOTA & KOTAPRAJA / PIK2",
        about_label: "KOTA & KOTAPRAJA",
        about_btn: "Cek Data Perumahan & Stok →",
        about_p1: '<strong>"PIK2 The New Jakarta City"</strong> merupakan mahakarya terbaru persembahan dari Agung Sedayu Group & Salim Group. PIK2 adalah pengembangan besar yang menghubungkan negara Indonesia dengan seluruh dunia.',
        about_p2: "Berlokasi hanya kurang lebih 7 menit dari Bandara Internasional Soekarno-Hatta, bahkan lebih dekat daripada PIK1, tentunya membuat PIK2 unggul dalam hal konektivitas global, ekspansi bisnis, dan berbagai peluang investasi.",
        about_p3: "PIK2 adalah pengembangan besar-besaran yang akan mencapai sekitar <strong>2.650 hektar</strong>. PIK2 merupakan kota terpadu dengan potensi yang lebih signifikan dan dilengkapi berbagai manfaat serta fasilitas yang lebih komprehensif untuk meningkatkan kualitas hidup.",
        unit_title: "Tipe Unit",
        unit_sub: "PIK2 hadir dengan berbagai macam pilihan jenis unit yang dirancang sesuai dengan kebutuhan hunian Anda seperti Rumah, Apartemen, Kavling Rumah, Kavling Komersial, Ruko, Soho, dan Gudang.",
        tab_all: "Semua Unit",
        tab_apt: "Apartemen",
        tab_house: "Rumah Milenial",
        tab_comm: "Komersial & Gudang",
        card_more: "Klik untuk melihat spesifikasi →",
        fac_title: "FASILITAS",
        loc_title: "Lokasi",
        promo_title: "Dapatkan informasi promo dan update terbaru",
        promo_btn: "Menyerahkan",
        promo_thanks: "Terima kasih telah mengirimkan informasi Anda!",
        foot_internal: "Katalog & Stok",
        foot_hq: "Kantor Pusat",
        ph_name: "Nama Lengkap",
        ph_email: "Alamat Email",
        ph_phone: "Nomor Telepon / WhatsApp"
    },
    en: {
        nav_corp: "Corporate",
        nav_proj: "Projects",
        nav_fac: "Facilities",
        nav_loc: "Location",
        nav_portal: "Cluster & Stock Data",
        hero_bread: "PROJECTS / CITY & TOWNSHIP / PIK2",
        about_label: "CITY & TOWNSHIP",
        about_btn: "View Housing & Stock Data →",
        about_p1: '<strong>"PIK2 The New Jakarta City"</strong> is the latest masterpiece presented by Agung Sedayu Group & Salim Group. PIK2 is a massive development connecting Indonesia to the rest of the world.',
        about_p2: "Located approximately 7 minutes from Soekarno-Hatta International Airport, even closer than PIK1, making PIK2 superior in global connectivity, business expansion, and investment opportunities.",
        about_p3: "PIK2 is a large-scale development spanning approximately <strong>2,650 hectares</strong>. It is an integrated city with significant potential and comprehensive facilities to enhance quality of life.",
        unit_title: "Unit Types",
        unit_sub: "PIK2 offers a wide selection of unit types designed to suit your living and business needs, including Houses, Apartments, Residential Lots, Commercial Lots, Shophouses, Soho, and Warehouses.",
        tab_all: "All Units",
        tab_apt: "Apartments",
        tab_house: "Millennial Houses",
        tab_comm: "Commercial & Warehouse",
        card_more: "Click to view specifications →",
        fac_title: "FACILITIES",
        loc_title: "Location",
        promo_title: "Get the latest promo and update information",
        promo_btn: "Submit",
        promo_thanks: "Thank you for submitting your information!",
        foot_internal: "Catalog & Stock",
        foot_hq: "Head Office",
        ph_name: "Full Name",
        ph_email: "Email Address",
        ph_phone: "Phone / WhatsApp Number"
    },
    cn: {
        nav_corp: "关于我们",
        nav_proj: "项目介绍",
        nav_fac: "配套设施",
        nav_loc: "地理位置",
        nav_portal: "楼盘与库存数据",
        hero_bread: "项目介绍 / 综合城镇 / PIK2",
        about_label: "综合城镇开发",
        about_btn: "查看楼盘与库存数据 →",
        about_p1: '<strong>“PIK2 新雅加达之城”</strong> 是由 Agung Sedayu 集团与三林集团（Salim Group）联手打造的最新旗舰力作，将印度尼西亚与全球紧密相连。',
        about_p2: "项目距离苏加诺-哈达国际机场仅约7分钟车程，比 PIK1 更加便捷，使 PIK2 在全球互联互通、商业拓展及投资机遇方面占据显著优势。",
        about_p3: "PIK2 规划总面积约 <strong>2,650 公顷</strong>，是一座集居住、商业、教育与休闲于一体的现代化综合新城，全面提升生活品质。",
        unit_title: "户型选择",
        unit_sub: "PIK2 提供多样化的物业类型，满足您的居住与商业需求，包括独栋住宅、公寓、住宅地块、商业地块、商铺、SOHO 及多功能仓库。",
        tab_all: "全部户型",
        tab_apt: "精品公寓",
        tab_house: "千禧住宅",
        tab_comm: "商业与仓库",
        card_more: "点击查看详细规格 →",
        fac_title: "社区配套",
        loc_title: "项目位置",
        promo_title: "获取最新优惠与项目动态",
        promo_btn: "立即提交",
        promo_thanks: "感谢您提交信息！",
        foot_internal: "楼盘目录",
        foot_hq: "集团总部",
        ph_name: "您的姓名",
        ph_email: "电子邮箱",
        ph_phone: "联系电话 / WhatsApp"
    }
};

function ubahBahasa(kodeBahasa, el) {
    document.querySelectorAll('.lang-btn').forEach(btn => btn.classList.remove('active'));
    if (el) el.classList.add('active');

    const teks = kamusBahasa[kodeBahasa];
    if (!teks) return;

    document.querySelectorAll('[data-i18n]').forEach(item => {
        const key = item.getAttribute('data-i18n');
        if (teks[key]) item.innerHTML = teks[key];
    });

    const pName = document.getElementById('promoName');
    const pEmail = document.getElementById('promoEmail');
    const pPhone = document.getElementById('promoPhone');
    if (pName) pName.placeholder = teks.ph_name;
    if (pEmail) pEmail.placeholder = teks.ph_email;
    if (pPhone) pPhone.placeholder = teks.ph_phone;
}

// ==========================================================
// BAGIAN 2: HALAMAN UTAMA (NAVBAR, FILTER UNIT & MODAL)
// ==========================================================
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.asg-navbar');
    if (navbar) {
        navbar.style.boxShadow = window.scrollY > 50
            ? '0 6px 25px rgba(14, 30, 50, 0.12)'
            : '0 4px 20px rgba(14, 30, 50, 0.05)';
    }
});

function filterUnit(category, btnElement) {
    const buttons = document.querySelectorAll('.tab-btn');
    buttons.forEach(btn => btn.classList.remove('active'));
    if (btnElement) btnElement.classList.add('active');

    const cards = document.querySelectorAll('.unit-card');
    cards.forEach(card => {
        card.style.display = (category === 'all' || card.dataset.category === category)
            ? 'block'
            : 'none';
    });
}

const dataUnitDetail = {
    "Tokyo Riverside Apartment Studio": {
        luas: "21 m² (Semi Gross)",
        kamar: "Studio + 1 Kamar Mandi",
        deskripsi: "Apartemen bergaya Jepang modern yang terintegrasi langsung dengan kawasan komersial dan area hijau PIK2."
    },
    "Osaka Riverview Apartment 2 BR": {
        luas: "35 m² (Semi Gross)",
        kamar: "2 Kamar Tidur + 1 Kamar Mandi",
        deskripsi: "Hunian vertikal nyaman untuk keluarga muda dengan pemandangan sungai dan akses dekat menuju Edu City."
    },
    "Rumah Milenial - Type Brown (4.5x10)": {
        luas: "LT 45 m² / LB 52 m²",
        kamar: "2 Kamar Tidur + 2 Kamar Mandi",
        deskripsi: "Rumah tapak minimalis 2 lantai dengan desain modern dan cicilan ringan untuk generasi milenial."
    },
    "Rumah Milenial - Type Olive (8x10)": {
        luas: "LT 80 m² / LB 95 m²",
        kamar: "3 Kamar Tidur + 2 Kamar Mandi",
        deskripsi: "Tipe rumah lebih luas dengan carport 2 mobil serta tata ruang lega dekat Green Belt PIK2."
    },
    "Showroom (9x30)": {
        luas: "LT 270 m² / LB 540 m²",
        kamar: "2 Lantai Ruang Usaha + Area Parkir",
        deskripsi: "Bangunan komersial strategis di jalur utama PIK2 yang cocok untuk ruang pamer otomotif maupun ritel."
    },
    "Gudang 3 In 1 (6x20)": {
        luas: "LT 120 m² / LB 180 m²",
        kamar: "Kantor + Showroom + Gudang",
        deskripsi: "Konsep pergudangan multiguna yang hanya berjarak 7 menit dari Bandara Soekarno-Hatta."
    }
};

function tutupModalBtn() {
    const modal = document.getElementById('unitModal');
    if (modal) modal.style.display = 'none';
}

function tutupModal(event) {
    if (event.target.id === 'unitModal') tutupModalBtn();
}

// ==========================================================
// BAGIAN 3: SLIDER FASILITAS OTOMATIS 2 DETIK + LIGHTBOX KLIK
// ==========================================================
const daftarFasilitas = [
    {
        nama: "Akses Transportasi",
        gambar: "/assets/fas-transportasi.jpg",
        deskripsi: "Akses langsung tol menuju Bandara Internasional Soekarno-Hatta hanya dalam ±7 menit serta jaringan transportasi terpadu."
    },
    {
        nama: "Area Taman dan Danau",
        gambar: "/assets/fas-taman.jpg",
        deskripsi: "Kawasan ruang terbuka hijau dengan danau buatan yang asri sebagai paru-paru kota dan tempat rekreasi keluarga."
    },
    {
        nama: "Pantai Pasir Putih",
        gambar: "/assets/fas-beach.jpg",
        deskripsi: "Destinasi wisata pantai berpasir putih sepanjang ±4 km yang dilengkapi area kuliner tepi laut dan jalur sepeda."
    },
    {
        nama: "Menara Syariah",
        gambar: "/assets/fas-menara.jpg",
        deskripsi: "Pusat distrik keuangan syariah ikonik bertaraf internasional di kawasan PIK2."
    },
    {
        nama: "PIK2 EDU City",
        gambar: "/assets/fas-educity.jpg",
        deskripsi: "Kawasan pendidikan terpadu yang menghadirkan sekolah dan universitas ternama bertaraf nasional maupun internasional."
    },
    {
        nama: "Green Belt ±60 Ha",
        gambar: "/assets/fas-greenbelt.jpg",
        deskripsi: "Jalur hijau seluas ±60 hektar yang menghubungkan berbagai cluster hunian dengan fasilitas olahraga dan taman."
    },
    {
        nama: "Stadion Mata Elang Internasional",
        gambar: "/assets/fas-stadion.jpg",
        deskripsi: "Arena konser, pameran, dan konvensi berkapasitas besar untuk penyelenggaraan acara berskala global."
    },
    {
        nama: "Kota Air Sedayu",
        gambar: "/assets/fas-kotaair.jpg",
        deskripsi: "Konsep hunian dan komersial tepi kanal air modern yang menghadirkan suasana resor eksklusif."
    }
];

let indexFasilitasSaatIni = 0;
let intervalAutoSlide = null;

function ulangiProgressBar() {
    const bar = document.getElementById('facProgressBar');
    if (!bar) return;
    bar.classList.remove('fac-progress-running');
    void bar.offsetWidth;
    bar.classList.add('fac-progress-running');
}

function tampilkanFasilitas(index) {
    const imgEl = document.getElementById('facSlideImg');
    const titleEl = document.getElementById('facSlideTitle');
    const boxEl = document.getElementById('facPlaceholderBox');
    if (!imgEl || !titleEl) return;

    if (index >= daftarFasilitas.length) {
        indexFasilitasSaatIni = 0;
    } else if (index < 0) {
        indexFasilitasSaatIni = daftarFasilitas.length - 1;
    } else {
        indexFasilitasSaatIni = index;
    }

    const item = daftarFasilitas[indexFasilitasSaatIni];
    titleEl.innerText = item.nama;
    boxEl.setAttribute('data-placeholder', item.gambar);

    imgEl.classList.remove('fac-slide-animate');
    void imgEl.offsetWidth;
    imgEl.style.display = 'block';
    imgEl.src = item.gambar;
    imgEl.alt = item.nama;
    imgEl.classList.add('fac-slide-animate');

    document.querySelectorAll('.fac-dot').forEach((dot, idx) => {
        dot.classList.toggle('active', idx === indexFasilitasSaatIni);
    });

    ulangiProgressBar();
}

function mulaiAutoSlideFasilitas() {
    hentikAutoSlideFasilitas();
    ulangiProgressBar();
    intervalAutoSlide = setInterval(() => {
        tampilkanFasilitas(indexFasilitasSaatIni + 1);
    }, 2000);
}

function hentikAutoSlideFasilitas() {
    if (intervalAutoSlide) {
        clearInterval(intervalAutoSlide);
        intervalAutoSlide = null;
    }
    const bar = document.getElementById('facProgressBar');
    if (bar) bar.classList.remove('fac-progress-running');
}

function geserFasilitasManual(arah) {
    tampilkanFasilitas(indexFasilitasSaatIni + arah);
    mulaiAutoSlideFasilitas();
}

function bukaLightboxFasilitas() {
    const modal = document.getElementById('facLightboxModal');
    const item = daftarFasilitas[indexFasilitasSaatIni];
    if (!modal || !item) return;

    hentikAutoSlideFasilitas();

    const lbImg = document.getElementById('lightboxImg');
    lbImg.style.display = 'block';
    lbImg.src = item.gambar;
    lbImg.alt = item.nama;
    lbImg.onerror = function () {
        this.style.display = 'none';
    };

    document.getElementById('lightboxTitle').innerText = item.nama;
    document.getElementById('lightboxDesc').innerText = item.deskripsi;
    modal.style.display = 'flex';
}

function tutupLightboxBtn() {
    const modal = document.getElementById('facLightboxModal');
    if (modal) modal.style.display = 'none';
    mulaiAutoSlideFasilitas();
}

function tutupLightbox(event) {
    if (event.target.id === 'facLightboxModal') {
        tutupLightboxBtn();
    }
}

// ==========================================================
// BAGIAN 4: UI HALAMAN DATA PERUMAHAN (MODAL & PENCARIAN)
// ==========================================================
function bukaModalLogin() {
    const modal = document.getElementById('loginManagerModal');
    if (modal) modal.style.display = 'flex';
}

function tutupModalLoginBtn() {
    const modal = document.getElementById('loginManagerModal');
    if (modal) modal.style.display = 'none';
}

function tutupModalLogin(event) {
    if (event.target.id === 'loginManagerModal') tutupModalLoginBtn();
}

function cariPerumahan() {
    const keyword = document.getElementById('searchInput').value.toLowerCase();
    const rows = document.querySelectorAll('#tabelPerumahanBody tr.data-row');
    let tampil = 0;

    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        if (text.includes(keyword)) {
            row.style.display = '';
            tampil++;
        } else {
            row.style.display = 'none';
        }
    });

    const totalDataEl = document.getElementById('totalData');
    if (totalDataEl) totalDataEl.innerText = tampil;
}

function editPerumahan(id, cluster, kodeUnit, namaJalan, tipeRumah, stokRumah) {
    const form = document.getElementById('perumahanForm');
    if (!form) return;

    form.action = `/perumahan/${id}`;
    document.getElementById('formMethod').value = 'PUT';
    document.getElementById('cluster').value = cluster;
    document.getElementById('kodeUnit').value = kodeUnit;
    document.getElementById('namaJalan').value = namaJalan;
    document.getElementById('tipeRumah').value = tipeRumah;
    document.getElementById('stokRumah').value = stokRumah;

    document.getElementById('formTitle').innerText = "Edit Data & Stok Unit";
    document.getElementById('btnSimpan').innerText = "Update Data Rumah";
    document.getElementById('btnBatal').style.display = "block";
    form.scrollIntoView({ behavior: 'smooth' });
}

function batalEdit() {
    const form = document.getElementById('perumahanForm');
    if (!form) return;

    form.reset();
    form.action = '/perumahan';
    document.getElementById('formMethod').value = 'POST';
    document.getElementById('formTitle').innerText = "Tambah Data Unit Rumah";
    document.getElementById('btnSimpan').innerText = "Simpan Data Rumah";
    document.getElementById('btnBatal').style.display = "none";
}

// ==========================================================
// INISIALISASI SAAT HALAMAN SELESAI DIMUAT
// ==========================================================
document.addEventListener('DOMContentLoaded', function () {
    const dotsContainer = document.getElementById('facDotsContainer');
    const sliderWrapper = document.getElementById('facSliderWrapper');
    if (dotsContainer) {
        daftarFasilitas.forEach((_, idx) => {
            const dot = document.createElement('span');
            dot.className = idx === 0 ? 'fac-dot active' : 'fac-dot';
            dot.onclick = () => {
                tampilkanFasilitas(idx);
                mulaiAutoSlideFasilitas();
            };
            dotsContainer.appendChild(dot);
        });
        tampilkanFasilitas(0);
        mulaiAutoSlideFasilitas();

        if (sliderWrapper) {
            sliderWrapper.addEventListener('mouseenter', hentikAutoSlideFasilitas);
            sliderWrapper.addEventListener('mouseleave', () => {
                const lbModal = document.getElementById('facLightboxModal');
                if (!lbModal || lbModal.style.display !== 'flex') {
                    mulaiAutoSlideFasilitas();
                }
            });
        }
    }

    const unitCards = document.querySelectorAll('.unit-card');
    unitCards.forEach(card => {
        card.addEventListener('click', function () {
            const judul = this.querySelector('h3').innerText;
            const info = dataUnitDetail[judul];
            if (info) {
                document.getElementById('modalTitle').innerText = judul;
                document.getElementById('modalLuas').innerText = info.luas;
                document.getElementById('modalKamar').innerText = info.kamar;
                document.getElementById('modalDesc').innerText = info.deskripsi;
                document.getElementById('unitModal').style.display = 'flex';
            }
        });
    });
});