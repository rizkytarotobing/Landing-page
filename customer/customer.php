<?php
session_start();

if ($_SESSION["role"] != "Customer") {
    header("Location: ../lib/login.php");
}

require '../lib/functions.php';

$produk = query("SELECT * FROM produk WHERE statusProduk='Tersedia' LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CAMP PAROPO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="../img/favicon.png" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0 ms-2"><img src="../img/logoOmahSeafood.png" alt="">CAMP PAROPO</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#menu" class="nav-item nav-link">Wisata</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="#team" class="dropdown-item">Our Team</a>
                                <a href="#testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                    </div>
                    <a href="../lib/logout.php" class="btn btn-danger py-2 px-4">Log Out</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Nikmati
                            Keindahan <br>Alam Danau Toba</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Berbagai macam aktivitas dan pengalaman seru di alam terbuka. Pilih kegiatan favoritmu di Camp Paropo Danau Toba!</p>
                            <a href="halamanUser.php"
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Booking</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img-web/kai1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <div id="service"></div>
        <br><br>
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Instruktur Berpengalaman</h5>
                                <p>
                                Tim instruktur terbaik di Camp Paropo Danau Toba siap membimbing berbagai kegiatan seru dan edukatif di alam terbuka.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Makanan Berkualitas</h5>
                                <p>Kualitas hidangan yang tidak perlu diragukan lagi. Menggunakan bahan-bahan terbaik dan dimasak dengan ahli untuk pengalaman kuliner yang tak terlupakan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                            <i class="fa fa-3x fa-gamepad text-primary mb-4" aria-hidden="true"></i>
                                <h5>Aktivitas Seru</h5>
                                <p>Nikmati berbagai aktivitas seru di Camp Paropo Danau Toba. Dari berkemah, hiking, hingga bermain air, semua bisa dinikmati dengan mudah dan menyenangkan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Menyediakan berbagai jenis tenda mulai dari ukuran besar,kecil,sedang dan lainnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center" id="about">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="img-web/1.3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="img-web/1.2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="img-web/kai4.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="img-web/kai2.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami
                        </h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-tree text-primary me-2"></i>Camp Paropo Danau Toba</h1>
                        <p class="mb-4">Setiap pengalaman berkemah di Camp Paropo Danau Toba yang dirancang oleh tim ahli kami, berasal dari pengetahuan lokal yang mendalam, dibuat sebaik mungkin dengan keikhlasan hati sehingga Anda dapat merasakan keindahan dan ketenangan alam Danau Toba yang sejati.</p>
                        <p class="mb-4">Keindahan dan keunikan alam Danau Toba yang dapat dirasakan oleh para pengunjung, dihadirkan dengan ketulusan staf dan pemandu kami untuk memberikan pengalaman berkemah yang tak terlupakan.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">20
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Tahun</p>
                                        <h6 class="text-uppercase mb-0">Berpengalaman</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">1
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Of The Best Camp</p>
                                        <h6 class="text-uppercase mb-0">in North Sumatra</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div id="menu"></div>
        <br><br>
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">TOURIST ATTRACTION</h5>
                    <h1 class="mb-5">Objek Wisata Camp Paropo</h1>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img-web/kai2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Trekking dan Hiking</h5>
        <p class="card-text">Nikmati keindahan alam Danau Toba dengan berbagai jalur trekking dan hiking yang tersedia di Camp Paropo. Para pengunjung dapat menjelajahi jalur-jalur yang menantang sekaligus menikmati pemandangan spektakuler dari puncak bukit yang mengelilingi danau. Trekking di Camp Paropo menawarkan kesempatan untuk menyatu dengan alam dan menikmati udara segar pegunungan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img-web/1.3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Camping dan Barbeque</h5>
        <p class="card-text">Berkemah di tepi Danau Toba adalah pengalaman yang tidak boleh dilewatkan. Camp Paropo menyediakan area perkemahan yang luas dan nyaman, lengkap dengan fasilitas untuk barbeque dan api unggun. Menghabiskan malam di bawah bintang-bintang sambil menikmati makanan bersama teman dan keluarga menciptakan kenangan yang tak terlupakan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img-web/1.4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Wisata Edukasi dan Konservasi</h5>
        <p class="card-text">Camp Paropo tidak hanya menawarkan keindahan alam, tetapi juga kesempatan untuk belajar dan berkontribusi pada konservasi lingkungan. Pengunjung dapat mengikuti program wisata edukasi yang mengajarkan pentingnya menjaga ekosistem Danau Toba. Selain itu, ada program konservasi yang memungkinkan pengunjung untuk berpartisipasi dalam upaya pelestarian flora dan fauna lokal.</p>
      </div>
    </div>
  </div>
  
  </div>
</div>

    </div>
    </div>
    <!-- Menu End -->

    <div id="team"></div>
    <br><br>
    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                <h1 class="mb-5">Pegawai</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img-web/dian.jpeg" alt="">
                        </div>
                        <h5 class="mb-0">Dian</h5>
                        <small>Juru Parkir</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img-web/yoh.jpeg" alt="">
                        </div>
                        <h5 class="mb-0">Yohana</h5>
                        <small>Kasir</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img-web/desi.jpeg" alt="">
                        </div>
                        <h5 class="mb-0">Desianna</h5>
                        <small>pegawai</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img-web/tar.jpeg" alt="">
                        </div>
                        <h5 class="mb-0">Taruli</h5>
                        <small>pegawai</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <div id="testimonial"></div>
    <br><br>
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>web nya bagussss</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img-web/testimonial-1.jpg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Endri </h5>
                            <small>Actress</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>sangat bermanfaat sihh.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img-web/testimonial-2.jpg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">immanuel</h5>
                            <small>Kelompok Dua</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>mantappppppppp</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img-web/testimonial-3.jpg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Egia</h5>
                            <small>Kelomok 2</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Syuka banget lohhhh.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img-web/testimonial-4.jpg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Anggun</h5>
                            <small>Kelompok 2</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                    <a class="btn btn-link" href="#about">About Us</a>
                    <a class="btn btn-link" href="#">Contact Us</a>
                    <a class="btn btn-link" href="#">Reservation</a>
                    <a class="btn btn-link" href="#">Privacy Policy</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Medan sumatera utara</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>kila@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">Monday - Saturday</h5>
                    <p>09AM - 09PM</p>
                    <h5 class="text-light fw-normal">Sunday</h5>
                    <p>10AM - 08PM</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>