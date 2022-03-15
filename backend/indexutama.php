<?php
    session_start();
    
    if (isset ($_SESSION['username'])) {
        
    $username = $_SESSION['username'];
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FitGuru</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="indexutama.php" class="logo"><img src="assets/img/Logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="#home">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#offer">Offer</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="nav-link scrollto" href="#"></a></li>
        
            <a href="http://prak11billy2-com.preview-domain.com/backend/update.php" class="btn-get-started scrollto"><?php echo $username ?></a>

            <a href="http://prak11billy2-com.preview-domain.com/backend/login.php">
              <button type="button" class="btn btn-outline-warning" style="color: white;">Log Out</button>
            </a>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Welcome to FitGuru</h1>
      <h2><i>- "Believe In Yourself Every Single Day And You Will Be Unstoppable" -</i></h2>
      <a href="#offer" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Home -->

  <!-- Start #main -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>FitGuru</h3>
            <p>
              FitGuru didirikan pada tahun 2019 dengan tujuan menjadi layanan model kesehatan digital yang bertujuan 
memberikan layanan dan edukasi kesehatan secara modern kepada pengguna. FitGuru bersemangat untuk memberikan manfaat di bidang kesehatan kepada 
pengguna dan siap untuk menjadi pelopor kemajuan bidang kesehatan dan olahraga pada sektor information dan teknologi.
            </p>
            <div class="row">
              <div class="col-md-6">
                    <img src="assets/img/signature1.png">
                    <h5>Nicholas</h5>
                    <h4>Chief Executive Officer</h4>     
                </div>
                <div class="col-md-6">
                  <img src="assets/img/signature2.png">
                  <h5>Thendy Rhenaldy</h5>
                  <h4>Chief Operating Officer</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Offer Section ======= -->
    <section id="offer" class="offer">
      <div class="container">

        <div class="section-title">
          <h2>Our Offer</h2>
        </div>
        <div class="row" style="display: flex; justify-content: center;">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="training/training.php">Training</a></h4>
              <p>
                Layanan Training merupakan layanan deskripsi informasi yang menyediakan informasi mengenai latihan - latihan yang harus dilakukan.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange">
              <div class="icon">
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="tutorial/index.php">Tutorial</a></h4>
              <p>
                Layanan Tutorial merupakan layanan yang menyediakan langkah - langkah tutorial latihan dengan proyeksi slide atau video secara offline.
              </p>
            </div>
          </div>
          
           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <i class="bx bi-cart"></i>
              </div>
              <h4><a href="product/index.php">Product</a></h4>
              <p>
                Layanan Product ini memungkinkan pengguna untuk dapat melihat-lihat produk fitness yang ditawarkan oleh StoreGuru.
              </p>
              <br>
              <img src="assets/img/logo(2).PNG" style="width: 150px;">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange">
              <div class="icon">
                <i class="bi bi-egg"></i>
              </div>
              <h4><a href="nutrition/nutrition.php">Nutrition Consultant</a></h4>
              <p>
                Layanan Konsultasi Nutrisi ini merupakan layanan yang memungkinkan pengguna untuk dapat berkonsultasi langsung dengan konsultan nutrisi kami mengenai nutrisi yang diperlukan.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-green">
              <div class="icon">
                <i class="bi bi-clipboard-plus"></i>
              </div>
              <h4><a href="health/health.php">Health Consultant</a></h4>
              <p>
                Layanan Konsultasi Kesehatan ini untmerupakan layanan yang memungkinkan pengguna untuk dapat berkonsultasi langsung dengan konsultan kesehatam kami mengenai kesehatan. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Team</h2>
          <p>
            Nicholas - 00000034616 | Thendy Rhenaldy - 00000033857 | Andre Billy - 00000034126 | Willibrordus Bayu Nova - 00000034000 
            | Christofer Miko Lee - 00000034222
          </p>
          <p>
            (IS556-A) Web Design and Development - LEC
          </p>
          <p>
            Fakultas Teknologi Infomatika
          </p>
          <p>
            Sistem Informasi 2019
          </p>
        </div>
        <div class="row" style="display: flex; justify-content: center;">
          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.png" class="img-fluid" alt="">
              </div>  
              <div class="member-info">
                <h4>Nicholas</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Thendy Rhenaldy</h4>
                <span>Chief Operating Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Andre Billy</h4>
                <span>Chief Technology Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Bayu Nova</h4>
                <span>Chief Financial Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Christofer Miko Lee</h4>
                <span>Head of Security</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>
            Tanyakan apa pun yang anda ingin tanyakan mengenai FitGuru
          </p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apakah Coach yang di dapatkan memiliki keahlian yang mumpuni? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Semua Personal Trainer yang kami miliki terakreditasi internasional dan sudah berpengalaman lebih dari 5 tahun di dalam dunia fitnes. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apakah layanan video tutorial bisa disimpan?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Untuk sekarang layanan video Tutorial hanya bisa dilihat secara online, tetapi FitGuru berencana untuk meningkatkan pelayanan dengan memberikan fitur penyimpanan video untuk anda yang berlangganan diatas paket Beginner.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Informasi apa saja yang ada di dalam fitur health consultant? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Di dalam fitur Health Consultant terdapat berbagai macam informasi mengenai kesehatan berolahraga yang terlampir di dalamm artikel - artikel terkait versi FitGuru. Selain itu kami juga berencana untuk menambahkan fitur Chat agar pengguna dapat berkonsultasi langsung dengan ahli kesehatan yang bekerjasama dengan FitGuru. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Fitur apa saja yang saya dapatkan jika saya berlangganan FitGuru?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Banyak sekali fitur yang bisa anda dapatkan jika berlangganan FitGuru. Mulai dari Training, Tutorial, Store, Nutrition Consultant, dan Health Consultant. Untuk lebih jelasnya dapat dilihat di bagian "Offer" pada halaman website FitGuru. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Apakah paket berlangganan dapat diganti?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Paket berlangganan bisa diganti di akhir periode yang sebelumnya telah dipilih. Periode yang dimaksud adalah 1 bulan (30 hari) dari pembelian paket berlangganan sebelumnya dan pembayaran sudah dilunasi pada jangka waktu yang telah ditentukan. 
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Berbicaralah dengan kami jika anda masih memiliki pertanyaan seputar FitGuru.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Piazza Mozia Blok E7 No 9</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>infofitguru@gmail.com<br>contactfitguru@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62 8122222222<br>+62 8555555555</p>
                </div>
              </div>
            </div>

          </div>

         <div class="col-lg-6">
            <form action="contact.php" method="post" style="box-shadow: 0 0 20px rgba(65, 76, 100, 0.05);
  padding: 30px;" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input style= "padding: 10px 15px;" type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input style= "padding: 10px 15px;" type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input style= "padding: 10px 15px;" type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea style="  border-radius: 4px;box-shadow: none;font-size: 14px;padding: 12px 15px;" class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
              <?php if (isset($_SESSION['success'])) { ?>
                 <p class="success" style="color:green;text-align:center;margin-top:10px;"><?php echo $_SESSION['success']; ?></p>
              <?php } ?>
					
	          <?php if (isset($_SESSION['error'])) { ?>
     	         <p class="error" style="color:red;text-align:center;margin-top:10px;"><?php echo $_SESSION['error']; ?></p>
              <?php } ?>
              
              <div class="text-center"><button style="background: #ffc107;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 50px; margin-top:10px;" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

    </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>FitGuru</h3>
            <p>
              Piazza Mozia Blok E7 No 9 <br>
              Tangerang, 15810<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 8122222222<br>
              <strong>Email:</strong> infofitguru@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#offer">Offer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="training/training.php">Training</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tutorial/index.php">Tutorial</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="product/index.php">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="nutrition/nutrition.php">Nutrition Consultant</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="health/health.php">Health Consultant</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Keep Contact With Us</h4>
            <p>Jangan ketinggalan informasi terbaru FitGuru. Untuk informasi lebih lanjut hubungi kami melalui Contact.</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright 2021<strong><span>FitGuru</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>

<?php
}else{
	header("Location: index.php");
	exit();
}
?>