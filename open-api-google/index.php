<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6RYKF6ZF5T"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6RYKF6ZF5T');
</script>

<?php
session_start();

$_SESSION["domain"] = "https://localhost/myresume";

if(isset($_GET["status"]))
{
  $status = $_GET["status"];

  if($status == 'sukses')
  {
    ?>
      <script>
          swal("Sukses","Email Berhasil Dikirim","success")
      </script>
    <?php
  }
  else
  {
    ?>
      <script>
          swal("Sukses","Gagal Mengirim Email","error")
      </script>
    <?php
  }
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>My Resume - Rizal Afandi</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/vendor/sweetalert/sweetalert.css" type="text/css">
    <script src="assets/vendor/sweetalert/sweetalert.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: MyResume - v4.7.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">
      <nav id="navbar" class="navbar nav-menu">
        <ul>
          <li>
            <a href="#hero" class="nav-link scrollto active"
              ><i class="bx bx-home"></i> <span>Home</span></a
            >
          </li>
          <li>
            <a href="#about" class="nav-link scrollto"
              ><i class="bx bx-user"></i> <span>Tentang Saya</span></a
            >
          </li>
          <li>
            <a href="#resume" class="nav-link scrollto"
              ><i class="bx bx-file-blank"></i> <span>Rangkuman</span></a
            >
          </li>
          <li>
            <a href="#portfolio" class="nav-link scrollto"
              ><i class="bx bx-book-content"></i> <span>Portfolio</span></a
            >
          </li>
          <li>
            <a href="#contact" class="nav-link scrollto"
              ><i class="bx bx-envelope"></i> <span>Contact</span></a
            >
          </li>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
      <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>Mochammad Fachrizal Afandi</h1>
        <p>
          Saya Seorang
          <span
            class="typed"
            data-typed-items="Game Programmer (HTML5), Guru, Freelancer, Web Developer"
          ></span>
        </p>
        <div class="social-links">
          <a
            href="https://api.whatsapp.com/send/?phone=6285854541938&text&type=phone_number&app_absent=0"
            class="whatsapp"
            target="_blank"
            ><i class="bx bxl-whatsapp"></i
          ></a>
          <a
            href="https://twitter.com/fachrizaall_"
            class="twitter"
            target="_blank"
            ><i class="bx bxl-twitter"></i
          ></a>
          <a
            href="https://web.facebook.com/rizal.afandi13/"
            class="facebook"
            target="_blank"
            ><i class="bx bxl-facebook"></i
          ></a>
          <a
            href="https://www.instagram.com/fachrizaall_/"
            class="instagram"
            target="_blank"
            ><i class="bx bxl-instagram"></i
          ></a>
          <a
            href="https://www.linkedin.com/in/mochammad-fachrizal-afandi-499059201/"
            class="linkedin"
            target="_blank"
            ><i class="bx bxl-linkedin"></i
          ></a>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Tentang Saya</h2>
            <p>
              Nama saya Mochammad Fachrizal Afandi, berusia 24 tahun. Saya
              adalah Sarjana Pendidikan Teknik Informatika dari Universitas
              Negeri Malang dengan IPK 3,83. Memiliki pengalaman sebagai guru
              produktif jurusan Rekayasa Perangkat Lunak (RPL) di SMK Semen
              Gresik. Pada saat menjadi guru, saya terbiasa membuat rencana
              administrasi seperti rencana pembelajaran dan materi. Saat ini 
              saya bekerja sebagai Game Programmer (HTML5) di PT. Esport Star 
              Indonesia (MNC Group). Saya memiliki minat berkarir di bidang teknologi.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content mt-5">
              <h3>Game Programmer (HTML5)</h3>
              <p class="fst-italic">
                Saat ini saya bekerja sebagai Game Programmer (HTML5) di PT. Esport Star Indonesia (MNC Games - MNC Group).
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li>
                      <i class="bi bi-chevron-right"></i>
                      <strong>Tanggal Lahir:</strong> <span>13 Maret 1998</span>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right"></i>
                      <strong>Website:</strong>
                      <span>rizalafandi.herokuapp.com</span>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right"></i>
                      <strong>Domisili:</strong> <span>Gresik, Jawa Timur</span>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li>
                      <i class="bi bi-chevron-right"></i> <strong>Umur:</strong>
                      <span>24</span>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right"></i>
                      <strong>Lulusan:</strong>
                      <span>S1 Pendidikan Teknik Informatika</span>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right"></i>
                      <strong>Email:</strong>
                      <span>fachrizalafandi13@gmail.com</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- <p>
                Officiis eligendi itaque labore et dolorum mollitia officiis
                optio vero. Quisquam sunt adipisci omnis et ut. Nulla
                accusantium dolor incidunt officia tempore. Et eius omnis.
                Cupiditate ut dicta maxime officiis quidem quia. Sed et
                consectetur qui quia repellendus itaque neque. Aliquid amet
                quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis
                culpa magni laudantium dolores.
              </p> -->
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Facts Section ======= -->
      <!-- <section id="facts" class="facts">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Facts</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Happy Clients</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="bi bi-journal-richtext"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="521"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Projects</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="bi bi-headset"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="1463"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Hours Of Support</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="bi bi-award"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="25"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Awards</p>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Facts Section -->

      <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Kemampuan</h2>
            <p>
              Memiliki beberapa kemampuan yang dapat menunjang kelancaran
              pekerjaan.
            </p>
          </div>

          <div class="row skills-content">
            <div class="col-lg-6">
              <div class="progress">
                <span class="skill">Construct 3 <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="90"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">HTML <i class="val">88%</i></span>
                <div class="progress-bar-wrap">
                  <div
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="88"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="80"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                  <div
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="70"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="progress">
                <span class="skill">PHP <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="85"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill"
                  >Microsoft Office <i class="val">90%</i></span
                >
                <div class="progress-bar-wrap">
                  <div
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="90"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="55"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Skills Section -->

      <!-- ======= Resume Section ======= -->
      <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Rangkuman / Resume</h2>
            <p>
              Saya telah menamatkan pendidikan terakhir saya yaitu Sarjana dan
              selama beberapa tahun terakhir, saya juga memiliki pengalaman
              kerja di berbagai tempat dan posisi.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <h3 class="resume-title">Riwayat Pendidikan</h3>
              <div class="resume-item">
                <h4>S1 Pendidikan Teknik Informatika</h4>
                <h5>2016 - 2021</h5>
                <p><em>Universitas Negeri Malang</em></p>
                <p>
                  <ul>
                    <li>Anggota UKM Al Qur’an Study Club</li>
                    <li>Koor. Sie. PDD - MTQUM 2019</li>
                    <li>Penerima Beasiswa Peningkatan Prestasi AKademik (PPA)</li>
                    <li>Penerima Beasiswa Adaro Foundation</li>
                  </ul>
                </p>
              </div>
              <div class="resume-item">
                <h4>Teknik Komputer dan Jaringan</h4>
                <h5>2013 - 2016</h5>
                <p><em>SMK Negeri 1 Cerme Gresik</em></p>
                <p>
                  <ul>
                    <li>
                      Semifinalis Olimpiade Matematika UMG
                    </li>
                    <li>
                      Magang di CV. Mammoth Computer Surabaya
                    </li>
                  </ul>
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <h3 class="resume-title">Pengalaman Kerja</h3>
              <div class="resume-item">
                <h4>Game Programmer (HTML5)</h4>
                <h5>Agustus 2022 - Sekarang</h5>
                <p><em>PT. Esport Star Indonesia - MNC Group</em></p>
                <ul>
                  <li>
                    Mengembangkan Game Berbasis HTML5 di Platform Vision+ Menggunakan Construct 3
                  </li>
                </ul>
              </div>
              <div class="resume-item">
                <h4>Guru Produktif Rekayasa Perangkat Lunak</h4>
                <h5>April 2021 - Juli 2022</h5>
                <p><em>SMK Semen Gresik</em></p>
                <ul>
                  <li>
                    Mengajar Mata Pelajaran Pemrograman Dasar
                  </li>
                  <li>
                    Mengajar Mata Pelajaran Basis Data Grafis
                  </li>
                  <li>
                    Mengajar Mata Pelajaran Pemrograman Berorientasi Objek
                  </li>
                  <li>
                    Mengajar Mata Pelajaran Basis Data MySQL
                  </li>
                </ul>
              </div>
              <div class="resume-item">
                <h4>Pengajar Lifeskill Programming</h4>
                <h5>Agustus 2019 - Maret 2020</h5>
                <p><em>Tazkia IIBS Putra Malang</em></p>
                <ul>
                  <li>
                    Mengajar Lifeskill Basic Programming Java
                  </li>
                </ul>
              </div>
              <div class="resume-item">
                <h4>Guru Produktif TKJ & RPL</h4>
                <h5>September 2019 - Oktober 2019</h5>
                <p><em>SMK Negeri 1 Kepanjen Malang</em></p>
                <ul>
                  <li>
                    Mengajar Mata Pelajaran Pemrograman Dasar
                  </li>
                  <li>
                    Mengajar Mata Pelajaran Dasar Desain Grafis
                  </li>
                  <li>
                    Mengajar Mata Pelajaran Perakitan Komputer
                  </li>
                  <li>
                    Mengajar Mata Pelajaran Teknologi dan Layanan Jaringan
                  </li>
                </ul>
              </div>
              <div class="resume-item">
                <h4>Software Developer (Internship)</h4>
                <h5>Juni 2019 - Juli 2019</h5>
                <p><em>PT. Petrokimia Gresik</em></p>
                <ul>
                  <li>
                    Merancang UI, UX, database aplikasi buku telepon perusahaan berbasis Android
                  </li>
                  <li>
                    Mengembangkan aplikasi buku telepon berbasis Android
                  </li>
                  <li>
                    Membuat laporan pengembangan aplikasi
                  </li>
                </ul>
              </div>
              <div class="resume-item">
                <h4>Teknisi CCTV & Komputer (Internship)</h4>
                <h5>November 2014 - Februari 2015</h5>
                <p><em>Mammoth Computer Surabaya</em></p>
                <ul>
                  <li>
                    Melakukan instalasi CCTV untuk client
                  </li>
                  <li>
                    Mengonfigurasi CCTV
                  </li>
                  <li>
                    Merakit PC untuk client
                  </li>
                  <li>
                    Melakukan instalasi software komputer client
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Resume Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Portfolio</h2>
            <p>
              Beberapa tahun terakhir saya menghasilkan beberapa produk.
            </p>
          </div>

          <div class="row">
            <div
              class="col-lg-12 d-flex justify-content-center"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <ul id="portfolio-flters">
                <!-- <li data-filter="*" class="filter-active">All</li> -->
                <!-- <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li> -->
              </ul>
            </div>
          </div>

          <div
            class="row portfolio-container"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/knight1.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>KNIGHT - Petualangan Ksatria Programmer</h4>
                  <p>Game Edukasi</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/knight1.png"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="KNIGHT - Petualangan Ksatria Programmer"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a
                      href="portfolio-details-1.html"
                      class="portfolio-details-lightbox"
                      data-glightbox="type: external"
                      title="Portfolio Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/makmur1.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Makmur PT. Petrokimia Gresik</h4>
                  <p>Website</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/makmur1.png"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Website - Makmur PT. Petrokimia Gresik"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a
                      href="portfolio-details-2.html"
                      class="portfolio-details-lightbox"
                      data-glightbox="type: external"
                      title="Portfolio Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/bkk1.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>BKK SMK Semen Gresik</h4>
                  <p>Website</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/bkk1.png"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Website - BKK SMK Semen Gresik"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a
                      href="portfolio-details-3.html"
                      class="portfolio-details-lightbox"
                      data-glightbox="type: external"
                      title="Portfolio Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/siska1.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>SISKA - SDM Super App</h4>
                  <p>Website</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/siska1.png"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Website & Mobile - SISKA SDM Super App"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a
                      href="portfolio-details-4.html"
                      class="portfolio-details-lightbox"
                      data-glightbox="type: external"
                      title="Portfolio Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/plp1.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>PLP - Pusat Layanan Pelanggan</h4>
                  <p>Website</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/plp1.png"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Website - PT. Petrokimia Gresik"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a
                      href="portfolio-details-5.html"
                      class="portfolio-details-lightbox"
                      data-glightbox="type: external"
                      title="Portfolio Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-3.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="App 2"
                      ><i class="bx bx-plus"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      class="portfolio-details-lightbox"
                      data-glightbox="type: external"
                      title="Portfolio Details"
                      ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->


      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact</h2>
          </div>

          <div class="row mt-1">
            <div class="col-lg-12">
              <!-- <div class="info"> -->
                <div class="row text-center">
                  <div class="col-md-4">
                    <div class="address">
                      <!-- <i class="bi bi-geo-alt"></i> -->
                      <h4>Alamat:</h4>
                      <p>Masangan Barat No. 34 RT 11 RW 05 Masangan, Kecamatan Bungah, Kabupaten Gresik</p>
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="email">
                      <!-- <i class="bi bi-envelope"></i> -->
                      <h4>Email:</h4>
                      <p>fachrizalafandi13@gmail.com</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="phone">
                      <!-- <i class="bi bi-phone"></i> -->
                      <h4>Whatsapp:</h4>
                      <p><a href="https://api.whatsapp.com/send/?phone=6285854541938&text&type=phone_number&app_absent=0"
            target="_blank">Click Here</a></p>
                    </div>
                  </div>
                </div>
              <!-- </div> -->
            </div>
                



            <!-- <div class="col-lg-8 mt-5 mt-lg-0">
              <form
                action="forms/mail.php"
                method="post"
                role="form"
                class="php-email-form"
                target='frame_exec'
              >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>
              </form>
            </div> -->
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <!-- <h3>Brandon Johnson</h3>
        <p>
          Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni
          eligendi fuga maxime saepe commodi placeat.
        </p>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> -->
        <div class="copyright">
          &copy; Copyright <strong><span>Rizal Afandi - MyResume</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: [license-url] -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
