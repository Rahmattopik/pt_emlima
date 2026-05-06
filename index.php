<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <style>
/* ================= GLOBAL ================= */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    padding-top: 70px;
    font-family: 'Poppins', sans-serif;
}

img {
    max-width: 100%;
    display: block;
}

/* ================= NAVBAR ================= */
.navbar {
    top: 15px;
    left: 10px;
    right: 10px;
    border-radius: 10px;

    backdrop-filter: blur(10px);
    background: rgba(255, 255, 255, 0.85) !important;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
 
}

.nav-link {
    transition: 0.3s;
}

.nav-link:hover {
    color: #0d6efd !important;
    transform: translateY(-2px);
}

/* ================= HERO ================= */
.informasi {
    height: 400px;
    position: relative;
    overflow: hidden;
    border-radius: 12px;
}

/* overlay FIX (gabungan) */
.informasi::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 12px;
    z-index: 1;
}

/* gambar */
.hero-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 12px;
}

/* text */
.hero-text {
    position: absolute;
    bottom: 30px;
    left: 30px;
    right: 30px;
    color: white;
    z-index: 2;
}

/* ================= IKLAN ================= */
.iklan-scroll {
    display: flex;
    gap: 10px;
    overflow-x: auto;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
    scrollbar-width: none;
}

.iklan-scroll::-webkit-scrollbar {
    display: none;
}

.iklan {
    min-width: 100%;
    height: 175px;
    flex-shrink: 0;
    scroll-snap-align: start;
}

.iklan img {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    object-fit: cover;
}

/* ================= DOT ================= */
.dot {
    height: 12px;
    width: 12px;
    margin: 0 5px;
    background: #ccc;
    border-radius: 50%;
    display: inline-block;
    transition: 0.3s;
}

.dot.active {
    background: #0d6efd;
}

/* ================= SECTION ================= */
.tentang,
.map-section {
    background: #f8f9fa;
    border-radius: 12px;
}

/* ================= MAP ================= */
.map {
    width: 100%;
    height: 350px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* ================= PEMBAYARAN ================= */
.pembayaran img {
    transition: 0.3s;
    opacity: 0.85;
}

.pembayaran img:hover {
    transform: scale(1.05);
    opacity: 1;
}

/* ================= TESTIMONI ================= */
.testimonial-box {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    transition: 0.3s ease;
    border: 1px solid #eee;
    cursor: pointer;
}

.testimonial-box:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
}

.testimonial-box h4 {
    font-size: 18px;
    font-weight: 600;
}

.testimonial-box h6 {
    font-size: 14px;
}

/* text */
.text-testimoni {
    font-size: 14px;
    color: #555;
    line-height: 1.6;

    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;

    transition: all 0.3s ease;
}

/* expand */
.text-testimoni.expanded {
    -webkit-line-clamp: unset;
    display: block;
}

/* toggle */
.toggleText {
    font-size: 14px;
    color: #0d6efd;
    cursor: pointer;
    transition: 0.2s;
}

.toggleText:hover {
    color: #084298;
    text-decoration: underline;
}

/* ================= FOOTER ================= */
.footer {
    background: #111;
}

.footer h5 {
    color: #fff;
}

.footer p {
    font-size: 14px;
    color: #bbb;
}

.footer i {
    color: #0d6efd;
}

/* social */
.social-icon {
    display: inline-block;
    font-size: 20px;
    color: #bbb;
    transition: 0.3s;
}

.social-icon:hover {
    color: #0d6efd;
    transform: translateY(-4px) scale(1.1);
}

/* ================= ANIMASI ================= */
.scroll-up {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.7s ease;
}

.scroll-down {
    opacity: 0;
    transform: translateY(-50px);
    transition: all 0.7s ease;
}

.show {
    opacity: 1;
    transform: translateY(0);
}

/* ================= RESPONSIVE ================= */

/* TABLET */
@media (min-width: 768px) {
    .text-testimoni {
        -webkit-line-clamp: 4;
    }
}

/* DESKTOP */
@media (min-width: 992px) {

    section.d-lg-flex {
        max-width: 1200px;
        margin: 0 auto;
        align-items: stretch;
    }

    .informasi {
        flex: 2;
        height: 500px;
    }

    .iklan-scroll {
        flex: 1;
        max-width: 350px;
    }

    .iklan {
        height: 150px;
    }

    .dot {
        display: none;
    }

    .map {
        height: 450px;
    }
}

/* MOBILE */
@media (max-width: 767px) {

    .iklan {
        min-width: 85%;
    }

    .footer {
        text-align: center;
    }

    .footer .col-12 {
        margin-bottom: 20px;
    }

    .footer p {
        margin-bottom: 8px;
    }

    .social-icon {
        font-size: 22px;
        margin: 0 8px;
    }

    .footer hr {
        margin: 20px 0 15px;
    }
}
    </style>
</head>

<body>
    <!-- nav bar -->
   <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="assets/logo.png" alt="" style="height:30px; width:120px;">



            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            tentang
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="tentang.php#about">mengenal ekonek</a></li>
                            <li><a class="dropdown-item" href="tentang.php#visi">visi</a></li>
                            <li><a class="dropdown-item" href="tentang.php#misi">misi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#paket">paket-internet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#map">area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#kontak">kontak</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="d-lg-flex mx-auto p-2 gap-lg-3">

        <!-- HERO -->
        <div class="informasi p-2 mb-3 mb-lg-0 position-relative">

            <img src="assets/OIP.JPG" class="img-fluid hero-img" alt="">

            <div class="hero-text">
                <h5 class="text-warning">Memperkenalkan Ekonek ⚡</h5>
                <h2 class="fw-bold text-white">
                    Internet Cepat dan Stabil untuk Keluarga dan Bisnis Anda
                </h2>
                <h6>Koneksi Stabil, Dukungan Lokal, Harga Kompetitif, Kami Juaranya!</h6>
            </div>

        </div>

        <!-- IKLAN -->
        <div class="iklan-scroll d-flex flex-row flex-lg-column gap-3">

            <div class="iklan p-2">
                <img src="assets/promo-1212.png" class="img-fluid">
            </div>

            <div class="iklan p-2">
                <img src="assets/promo-1212.png" class="img-fluid">
            </div>

            <div class="iklan p-2">
                <img src="assets/promo-1212.png" class="img-fluid">
            </div>

        </div>

    </section>

    <section class="tentang py-5" id="tentang">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Kenapa Harus Ekonek?</h2>

            <p class="mx-auto text-muted" style="max-width:700px;">
                Ekonek menjamin kecepatan internet yang konsisten, bahkan saat jam sibuk. Solusi ideal untuk kebutuhan
                rumah tangga, bisnis kecil, dan komunitas.
                <br>mari mengenal dengan ekonek
                <a href="#" class="text-decoration-none fw-semibold">Selengkapnya</a>
            </p>
        </div>
    </section>


    <section class="paket py-5  " id="paket">
        <div class="container  ">
            <h2 class="text-center fw-bold mb-5">Paket Internet Ekonek</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3 scroll-up">
                    <div class="card h-100 text-center shadow-sm border-0 p-3">
                        <h6 class="text-muted">Speed up to</h6>
                        <img src="assets/10mbps.svg" class="mx-auto mb-3" width="60">
                        <h4 class="fw-bold">10 Mbps</h4>

                        <p>Unlimited Internet</p>
                        <p>Free Router</p>
                        <p>24/7 Support</p>

                        <h5 class="fw-bold text-primary">Rp50.000 / bulan</h5>
                        <button class="btn btn-primary mt-3">Pilih Paket</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 scroll-up">
                    <div class="card h-100 text-center shadow-sm border-0 p-3">
                        <h6 class="text-muted">Speed up to</h6>
                        <img src="assets/15mbps.svg" class="mx-auto mb-3" width="60">
                        <h4 class="fw-bold">15 Mbps</h4>

                        <p>Unlimited Internet</p>
                        <p>Free Router</p>
                        <p>24/7 Support</p>

                        <h5 class="fw-bold text-primary">Rp100.000 / bulan</h5>
                        <button class="btn btn-primary mt-3">Pilih Paket</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 scroll-up">
                    <div class="card h-100 text-center shadow-sm border-0 p-3">
                        <h6 class="text-muted">Speed up to</h6>
                        <img src="assets/30mbps.svg" class="mx-auto mb-3" width="60">
                        <h4 class="fw-bold">30 Mbps</h4>

                        <p>Unlimited Internet</p>
                        <p>Free Router</p>
                        <p>24/7 Support</p>

                        <h5 class="fw-bold text-primary">Rp150.000 / bulan</h5>
                        <button class="btn btn-primary mt-3">Pilih Paket</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3  scroll-up">
                    <div class="card h-100 text-center shadow-sm border-0 p-3">
                        <h6 class="text-muted">Speed up to</h6>
                        <img src="assets/50mbps.svg" class="mx-auto mb-3" width="60">
                        <h4 class="fw-bold">50 Mbps</h4>

                        <p>Unlimited Internet</p>
                        <p>Free Router</p>
                        <p>24/7 Support</p>

                        <h5 class="fw-bold text-primary">Rp200.000 / bulan</h5>
                        <button class="btn btn-primary mt-3">Pilih Paket</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-section py-5">
        <div class="container text-center mb-4">
            <h2 class="fw-bold">Jangkauan Ekonek</h2>
            <p class="text-muted">Area layanan kami</p>
        </div>

        <div class="map full" id="map"></div>
    </section>

    <section class="pembayaran py-5">
        <div class="container text-center scroll-up">
            <h2 class="fw-bold mb-3">Metode Pembayaran</h2>
            <p class="text-muted mx-auto mb-5" style="max-width:700px;">
                Pembayaran dapat dilakukan melalui aplikasi resmi yang kami sediakan
                maupun melalui berbagai platform pembayaran digital.
            </p>

            <div class="row justify-content-center g-4">
                <div class="col-6 col-md-3">
                    <div class="payment-box">
                        <i class="bi bi-wallet2"></i>
                        <p>E-Wallet</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="payment-box">
                        <i class="bi bi-credit-card"></i>
                        <p>Kartu / Virtual Account</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="payment-box">
                        <i class="bi bi-bank"></i>
                        <p>Transfer Bank</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="payment-box">
                        <i class="bi bi-shop"></i>
                        <p>Minimarket</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimoni py-4">
        <h1 class="text-center mb-4 scroll-down">Komentar</h1>

        <div class="container">

            <!-- TESTI 1 -->
            <div class="testimonial-box mb-4 scroll-up delay-1">
                <h4 class="mb-1">Nama Pelanggan</h4>
                <h6 class="text-muted mb-3">Pasarkemis</h6>

                <p class="mb-2 text-testimoni">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>

                <a href="#" class="toggleText text-decoration-none fw-semibold">
                    Selengkapnya
                </a>
            </div>

            <!-- TESTI 2 -->
            <div class="testimonial-box mb-4 scroll-up delay-2">
                <h4 class="mb-1">Nama Pelanggan</h4>
                <h6 class="text-muted mb-3">Pasarkemis</h6>

                <p class="mb-2 text-testimoni">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit ytyxghv lo.
                </p>

                <a href="#" class="toggleText text-decoration-none fw-semibold">
                    Selengkapnya
                </a>
            </div>

            <!-- TESTI 3 -->
            <div class="testimonial-box mb-4 scroll-up delay-3">
                <h4 class="mb-1">Nama Pelanggan</h4>
                <h6 class="text-muted mb-3">Pasarkemis</h6>

                <p class="mb-2 text-testimoni">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo totam neque corporis? Facilis deleniti
                    odit ratione necessitatibus laborum laudantium explicabo quis, ab ducimus in unde vel doloremque,
                    beatae dolore a!
                </p>

                <a href="#" class="toggleText text-decoration-none fw-semibold">
                    Selengkapnya
                </a>
            </div>

        </div>
    </section>

    <footer class="footer bg-dark text-light pt-5 pb-3 mt-5">
        <div class="container">

            <div class="row g-4 text-center text-md-start">

                <!-- Tentang -->
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold mb-3" id="kontak">PT. Emlima Koneksi Nusantara</h5>
                    <p class="">
                        Penyedia layanan internet cepat, stabil, dan terjangkau
                        untuk rumah dan bisnis di wilayah Anda.
                    </p>
                </div>

                <!-- Kontak -->
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold mb-3">Kontak Kami</h5>
                    <p class="mb-1"><i class="bi bi-geo-alt me-2"></i>Jl. Tarumajaya, Harapan Mulya Regency, Ruko Blok
                        BG-2 No. 8 Desa Setia Mulya, Kec. Tarumajaya Kab. Bekasi - Jawa Barat</p>
                    <p class="mb-1"><i class="bi bi-telephone me-2"></i>+62 085270724905</p>
                    <p class="mb-1"><i class="bi bi-envelope me-2"></i>ekoneknusantara@gmail.com</p>
                    <p><i class="bi bi-clock me-2"></i>24 Jam Online Support</p>
                </div>

                <!-- Sosial Media -->
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold mb-3">Ikuti Kami</h5>

                    <div class="d-flex justify-content-center justify-content-md-start">
                        <a href="#" class="social-icon me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon me-3"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

            </div>

            <hr class="border-secondary mt-4">

            <div class="text-center  small">

                Copyright © 2024 PT. Emlima Koneksi Nusantara
            </div>

        </div>
    </footer>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script>
    const container = document.querySelector('.iklan-scroll');
    const cards = document.querySelectorAll('.iklan');
    const dots = document.querySelectorAll('.dot');

    let index = 0;

    function updateDots(i) {
        dots.forEach(dot => dot.classList.remove("active"));
        dots[i].classList.add("active");
    }

    function autoSlide() {
        const cardWidth = cards[0].offsetWidth + 16;
        index++;

        if (index >= cards.length) {
            container.style.scrollBehavior = "auto";
            container.scrollLeft = 0;
            index = 0;

            setTimeout(() => {
                container.style.scrollBehavior = "smooth";
            }, 50);
        } else {
            container.scrollTo({
                left: cardWidth * index,
                behavior: "smooth"
            });
        }

        updateDots(index);
    }

    setInterval(autoSlide, 3000);
</script>

<script>
    const customers = [
        { lat: -6.2088, lng: 106.8456, name: "Pelanggan A" },
        { lat: -6.2100, lng: 106.8470, name: "Pelanggan B" },
        { lat: -6.2065, lng: 106.8425, name: "Pelanggan C" },
        { lat: -6.2120, lng: 106.8495, name: "Pelanggan D" },
        { lat: -6.2140, lng: 106.8510, name: "Pelanggan E" }
    ];
    const map = L.map('map', {
        zoomControl: false,
        dragging: false,
        scrollWheelZoom: false,
        doubleClickZoom: false,
        touchZoom: false,
        boxZoom: false,
        keyboard: false
    }).setView([customers[0].lat, customers[0].lng], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: ''
    }).addTo(map);

    customers.forEach(item => {
        L.marker([item.lat, item.lng])
            .addTo(map)
            .bindPopup(item.name);
    });
</script>


<script>
    const boxes = document.querySelectorAll(".testimonial-box");

    boxes.forEach(box => {
        const text = box.querySelector(".text-testimoni");
        const btn = box.querySelector(".toggleText");

        const fullText = text.innerText;
        const shortText = fullText.substring(0, 100) + "...";

        let expanded = false;
        text.innerText = shortText;

        btn.addEventListener("click", function (e) {
            e.preventDefault();

            if (!expanded) {
                text.innerText = fullText;
                btn.innerText = "Sembunyikan";
            } else {
                text.innerText = shortText;
                btn.innerText = "Selengkapnya";
            }

            expanded = !expanded;
        });
    });
</script>

<script>
    const scrollElements = document.querySelectorAll('.scroll-up, .scroll-down');

    function handleScrollAnimation() {
        const windowHeight = window.innerHeight;

        scrollElements.forEach(el => {
            const elementTop = el.getBoundingClientRect().top;
            const elementBottom = el.getBoundingClientRect().bottom;

            if (elementTop < windowHeight - 100 && elementBottom > 0) {
                el.classList.add('show');
            } else {
                el.classList.remove('show'); // 🔥 ini yang bikin refresh
            }
        });
    }

    window.addEventListener('scroll', handleScrollAnimation);
    window.addEventListener('load', handleScrollAnimation);
</script>

</html>