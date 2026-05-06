<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid GTA Style</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&display=swap" rel="stylesheet">
    <style>
        body {
            padding-top: 80px;
        }

        :root {
            --bg-gambar: url('assets/OIP.jpg');
        }

        .navbar {
            top: 15px;
            /* jarak dari atas */
            left: 10px;
            right: 10px;
            border-radius: 10px;
        }

        .nav-link {
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #0d6efd !important;
            transform: translateY(-2px);
        }

        .bg {
            position: relative;
            width: 50vw;
            height: 80vh;
            aspect-ratio: 2/1;
            background: black;


        }

        .bingkai {
            width: 100%;
            height: 100%;
            position: absolute;
            background-size: cover;
            background-position: center;

        }

        .bingkai:nth-of-type(1) {
            clip-path: polygon(2% 10%, 20% 8%, 20% 88%, 2% 85%);
            background-image: var(--bg-gambar);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bingkai:nth-of-type(2) {


            clip-path: polygon(21% 2%, 35% 2%, 35% 90%, 21% 90%);
            background: green;

            background-image: var(--bg-gambar);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bingkai:nth-of-type(3) {


            clip-path: polygon(36% 4%, 80% 5%, 80% 85%, 36% 88%);
            background: green;
            background-image: var(--bg-gambar);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bingkai:nth-of-type(4) {


            clip-path: polygon(81% 6%, 95% 8%, 95% 70%, 81% 80%);
            background: green;
            background-image: var(--bg-gambar);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .judul {
            position: absolute;
            bottom: 10%;
            left: 5%;
            right: 5%;
            /* biar gak keluar layar */

            color: white;
            font-size: clamp(22px, 8vw, 60px);
            font-weight: bold;
            text-shadow: 2px 2px 10px black;
            z-index: 10;

            line-height: 1.1;
            letter-spacing: 2px;

            max-width: 600px;

            font-family: "Changa One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .judul span {
            display: block;
            transform: scaleY(1.8);
        }

        .card-custom {
            flex: 1;
            background: white;
            border-radius: 15px;
            margin: 10px
        }


        .desc {
            display: -webkit-box;
            -webkit-line-clamp: 15;
            /* jumlah baris */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .desc.open {
            -webkit-line-clamp: unset;
        }

        @media(max-width: 992px) {

            .bg {
                position: relative;
                width: 100vw;
                height: 80vh;
                aspect-ratio: 2/1;
                background: black;


            }

            .judul {
                bottom: 15%;
                left: 5%;
                right: 5%;

                font-size: clamp(20px, 10vw, 40px);
                line-height: 1.2;
            }

            .desc {
                display: -webkit-box;
                -webkit-line-clamp: 6;
                /* jumlah baris */
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            .desc.open {
                -webkit-line-clamp: unset;
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
    <section class="d-lg-flex mx-auto p-2 gap-3 align-items-start">
        <div class="bg">
            <div class="bingkai"></div>
            <div class="bingkai"></div>
            <div class="bingkai"></div>
            <div class="bingkai"></div>
            <!-- <div class="bingkai"> </div> -->
            <!-- <div class="bingkai"></div> -->

            <h1 class="judul" #about>
                <span>PT EMLIMA</span>
                <span>KONEKSI</span>
                <span>NUSANTARA</span>
                <span>BEKASI</span>
            </h1>
        </div>
        <div class="card card-custom p-4">
            <h1>mengenal ekonek</h1>
            <p class="desc" id="descText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis commodi minima
                obcaecati?
                Eos eaque
                expedita ut. Atque, vel autem. In tempora magnam omnis, corporis, odio maiores esse repellat dolores
                nostrum, delectus natus veniam quidem culpa voluptates minima inventore ut laborum! Ab, dolor corrupti
                sit iste impedit sunt beatae, minima itaque exercitationem ipsum quidem! Soluta doloribus minus atque
                animi, cupiditate saepe modi fugiat iusto ex dolorum necessitatibus optio in quibusdam hic quia magnam
                cum ipsum tempora? Optio sequi ipsum esse maiores tenetur id est magni illum minima repellat, voluptatum
                quidem fuga, a assumenda neque unde! Amet ut quas repellendus nihil illum? border-radius <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, doloremque velit! Corporis iusto
                minima exercitationem magni, a, consequatur tempore inventore modi quas obcaecati dignissimos autem sint
                aperiam culpa ex esse. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Sed veritatis commodi autem dolore?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                sed nihil quasi repellendus soluta reiciendis explicabo facere earum, praesentium fuga libero sint ad
                dolore architecto itaque est doloremque minima. Cumque facere iste iusto quis ipsam expedita, ipsum
                minus, hic enim dolorum eligendi a quos iure aperiam dicta, delectus soluta esse?</p>
            <button class="btn btn-sm btn-primary mt-2" onclick="toggleText()">
                Selengkapnya
            </button>

        </div>

    </section>

    <section class="visidanmisi container py-5">
        <h2 class="text-center mb-5">Visi & Misi</h2>

        <div class="row g-4">

            <!-- VISI -->
            <div class="col-md-6">
                <div class="card card-visi h-100 text-center">
                    <div class="card-body">
                        <div class="icon mb-3">🚀</div>
                        <h3 class="card-title">Visi</h3>
                        <p class="card-text">
                            Menjadi penyedia layanan internet terbaik, cepat, stabil,
                            dan terpercaya untuk seluruh masyarakat Indonesia.
                        </p>
                    </div>
                </div>
            </div>

            <!-- MISI -->
            <div class="col-md-6">
                <div class="card card-misi h-100 text-center">
                    <div class="card-body">
                        <div class="icon mb-3">🎯</div>
                        <h3 class="card-title">Misi</h3>
                        <ul class="list-unstyled">
                            <li>✔ Menyediakan jaringan stabil</li>
                            <li>✔ Pelayanan cepat & responsif</li>
                            <li>✔ Harga terjangkau</li>
                            <li>✔ Teknologi modern</li>
                        </ul>
                    </div>
                </div>
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
<script>
    function toggleText() {
        const text = document.getElementById("descText");
        text.classList.toggle("open");
    }
</script>

</html>