<?php
session_start();
$_SESSION['lang'] = NULL;
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Valve - ANS</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="assets/logo_ans.png" rel="icon">
  <link href="assets/logo_ans.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/button.css" rel="stylesheet">
  <style>
    #box{
      width:auto;
      height:0px;
      overflow:hidden;
    }
  </style>
</head>

<body class="index-page">
<?php
if($_GET['lang'] == "en") {
  $a = include "lang/english.php";
} 
else if ($_GET['lang'] == "id") {
  $a = include "lang/indonesia.php";
} 
else {
  $a = include "lang/indonesia.php";
}
?>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/logo_ans.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active"><?php echo $home; ?></a></li>
          <li><a href="#about"><?php echo $about; ?></a></li>
          <li><a href="#services"><?php echo $service; ?></a></li>
          <li><a href="#gallery"><?php echo $gallery; ?></a></li>
          <li><a href="#certi"><?php echo $certification; ?></a></li>
          <li><a href="#pc">
            <?php echo $pj; ?>
          </a></li>
          <li class="dropdown"><a href="cast.html"><span>Product</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li class="dropdown"><a href="cast.html"><span>ANS Cast Steel</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="cast_gate.html">Gate Valve</a></li>
                  <li><a href="cast_globe.html">Globe Valve</a></li>
                  <li><a href="cast_check.html">Check Valve</a></li>
                  <li><a href="cast_floating.html">Floating Ball Valve</a></li>
                  <li><a href="cast_trunion.html">Trunion Mouted Ball Valve</a></li>
                  <li><a href="cast_butterfly.html">Butterfly Valve</a></li>
                  <li><a href="cast_globe.html">Globe Valve</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="casting.html"><span>ANS Ceramic</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Gate Valve</a></li>
                  <li><a href="#">Globe Valve</a></li>
                  <li><a href="#">Check Valve</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="ceramic.html"><span>ANS Forged Steel</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Gate Valve</a></li>
                  <li><a href="#">Globe Valve</a></li>
                  <li><a href="#">Check Valve</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#contact"><?php echo $contact; ?></a></li>
          <form name="form1" method="post" action="?lang=">
            <select name="menu1" class="rounded shadow" style="font-size: 15px;" onChange="MM_jumpMenu('parent',this,0)">
            <?php
            if(($_GET['lang'] == "id") || (empty($_GET['lang']))) {
            ?>
            <option value="?lang=id">Indonesian</option>
            <option value="?lang=en">English</option>

            <?php
            } else if ($_GET['lang'] == "en"){
            ?>
            <option value="?lang=en">English</option>
            <option value="?lang=id">Indonesian</option>
    
            <?php
            } // end else
            ?>
            </select>
          </form>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <section id="hero" class="hero section" style="background-color: #5160b8;">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1 class="text-white">PT.AMANAH NUSANTARA SEJAHTERA (ANS)</h1>
            <p class="text-white"><?php echo $jargon;?></p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center text-white"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/pic_petro.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section>

    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/logo_arita.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/logo_avr.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/logo_premier.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/logo_bont.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/logo_grt.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/logo_rocsole.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/logo_wall.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/logo_kitz.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section>

    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $aboutus; ?></h2>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p><?php echo $aboutusexp; ?></p>
            <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
              <h3><?php echo $structure; ?></h3>
              <img src="assets/struktur.png" alt="" width="100%">
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3><?php echo $vision; ?></h3>
            <p><?php echo $visionexp; ?></p>
            <h3><?php echo $mission; ?></h3>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo $missionexp1; ?></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo $missionexp2; ?></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo $missionexp3; ?></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo $missionexp4; ?></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo $missionexp5; ?></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo $missionexp6; ?></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo $missionexp7; ?></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo $missionexp8; ?></span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="why-us" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
        <div class="row gy-4">
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><strong><?php echo $corevalues; ?></strong></h3>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>01</span> <?php echo $trustedreliable; ?></h3>
                <div class="faq-content">
                  <p>
                  <?php echo $trustedreliableexp; ?>
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>02</span> <?php echo $focusoncustomers; ?></h3>
                <div class="faq-content">
                  <p><?php echo $focusoncustomersexp; ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>03</span> <?php echo $continuousimprovement; ?></h3>
                <div class="faq-content">
                  <p><?php echo $continuousimprovementexp; ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>04</span> <?php echo $innovation; ?></h3>
                <div class="faq-content">
                  <p><?php echo $innovationexp; ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>05</span><?php echo $cooperation; ?></h3>
                <div class="faq-content">
                  <p>
                  <?php echo $cooperationexp; ?>
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>
      </div>
    </section>

    <section id="skills" class="skills section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-12 d-flex align-items-center">
            <img src="" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="testimonials section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $ourservice; ?></h2>
        <p><?php echo $ourserviceexp; ?></p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="text-center">
                <div class="icon mb-3">
                  <img src="assets\img\CPS.png" width="80%">
                </div>
                <h3><?php echo $conspipe; ?></h3>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span><?php echo $conspipeexp; ?></span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="text-center">
                <div class="icon mb-3">
                  <img src="assets\img\CMS.png" width="60%">
                </div>
                <h3><?php echo $consmec; ?></h3>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span><?php echo $consmecexp; ?></span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="text-center">
                <div class="icon mb-3">
                  <img src="assets\img\CCS.png" width="80%">
                </div>
                <h3><?php echo $custcast; ?></h3>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span><?php echo $custcastexp; ?></span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="text-center">
                <div class="icon mb-3">
                  <img src="assets\img\VRS.png" width="80%">
                </div>
                <h3><?php echo $valverep; ?></h3>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span><?php echo $valverepexp; ?></span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section id="call-to-action" class="call-to-action section dark-background">
      <img src="assets/industrial.jpg" alt="">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3><?php echo $cta; ?></h3>
            <p>
            <?php echo $ctaexp; ?>
            </p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact"><?php echo $ctabutton; ?></a>
          </div>
        </div>
      </div>
    </section>

    <section id="gallery" class="portfolio section">
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $gallery; ?></h2>
      </div>

      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active"><?php echo $all_img; ?></li>
            <li data-filter=".filter-product"><?php echo $products_img; ?></li>
            <li data-filter=".filter-workshop"><?php echo $workshop_img; ?></li>
            <li data-filter=".filter-warehouse"><?php echo $warehouse_img; ?></li>
            <li data-filter=".filter-manu"><?php echo $manufacture_img; ?></li>
          </ul>
          <div class="row gy-4 isotope-container text-center" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/product/globe_valve.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product - Globe Valve</h4>
                <a href="assets/product/globe_valve.png" title="Product - Globe Valve" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-warehouse">
              <img src="assets/warehouse/warehouse_1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Warehouse</h4>
                <a href="assets/warehouse/warehouse_1.png" title="Warehouse" data-gallery="portfolio-gallery-warehouse" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-workshop">
              <img src="assets/workshop/workshop_1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Workshop</h4>
                <a href="assets/workshop/workshop_1.png" title="Workshop" data-gallery="portfolio-gallery-workshop" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-manu">
              <img src="assets/manu/manu_1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Manufacture</h4>
                <a href="assets/manu/manu_1.png" title="Manufacture" data-gallery="portfolio-gallery-manu" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/product/gate_valve.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product - Gate Valve</h4>
                <a href="assets/product/gate_valve.png" title="Product - Gate Valve" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-workshop">
              <img src="assets/workshop/workshop_2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Workshop</h4>
                <a href="assets/workshop/workshop_2.png" title="Workshop" data-gallery="portfolio-gallery-workshop" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-warehouse">
              <img src="assets/warehouse/warehouse_2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Warehouse</h4>
                <a href="assets/warehouse/warehouse_2.png" title="Warehouse" data-gallery="portfolio-gallery-warehouse" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-manu">
              <img src="assets/manu/manu_2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Manufacture</h4>
                <a href="assets/manu/manu_2.png" title="Manufacture" data-gallery="portfolio-gallery-manu" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/product/butterfly_valve.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product - butterfly Valve</h4>
                <a href="assets/product/butterfly_valve.png" title="Product - butterfly Valve" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-workshop">
              <img src="assets/workshop/workshop_3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Workshop</h4>
                <a href="assets/workshop/workshop_3.png" title="Workshop" data-gallery="portfolio-gallery-workshop" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-warehouse">
              <img src="assets/warehouse/warehouse_3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Warehouse</h4>
                <a href="assets/warehouse/warehouse_3.png" title="Warehouse" data-gallery="portfolio-gallery-warehouse" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-manu">
              <img src="assets/manu/manu_3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Manufacture</h4>
                <a href="assets/manu/manu_3.png" title="Manufacture" data-gallery="portfolio-gallery-manu" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/product/floating_valve.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product - Floating Valve</h4>
                <a href="assets/product/floating_valve.png" title="Product - Floating Valve" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-manu">
              <img src="assets/manu/manu_4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Manufacture</h4>
                <a href="assets/manu/manu_4.png" title="Manufacture" data-gallery="portfolio-gallery-manu" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="certi" class="team section">
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $ISO; ?></h2>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="text-center">
                <img src="assets/iso/iso_1.png" alt="" width="100%">
                <h4>ISO 9001 - 2015</h4>
                <h5>QFS Management System LLP</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="text-center">
                <img src="assets/iso/iso_2.png" alt="" width="100%">
                <h4>ISO 14001 - 2015</h4>
                <h5>QFS Management System LLP</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="text-center">
                <img src="assets/iso/iso_3.png" alt="" width="100%">
                <h4>ISO 45001 - 2018</h4>
                <h5>QFS Management System LLP</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="" class="pricing section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $TKDN; ?></h2>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item text-center featured">
              <img src="assets/certi/certi_1.png" alt="" width="100%" >
              <h3 class="mt-4">
                TKDN FORGING <br>
                CL 800 NPT
              </h3>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item text-center featured">
              <img src="assets/certi/certi_2.png" alt="" width="100%" >
              <h3 class="mt-4">
                TKDN FORGING CL<br>
                800, 1500 & 2500 SW
              </h3>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item text-center featured">
              <img src="assets/certi/certi_3.png" alt="" width="100%" >
              <h3 class="mt-4">
                TKDN GATE VALVE <br>
                ( Bronze )
              </h3>
            </div>
          </div>

          <div class="col-lg-2" data-aos="zoom-in" data-aos-delay="100"></div>
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item text-center featured">
              <img src="assets/certi/certi_4.png" alt="" width="100%" >
              <h3 class="mt-4">
                TKDN GATE VALVE <br>
                ( Brass )
              </h3>
            </div>
          </div>
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item text-center featured">
              <img src="assets/certi/certi_5.png" alt="" width="100%" >
              <h3 class="mt-4">
                TKDN CERAMIC VALVE
              </h3>
            </div>
          </div>
          <div class="col-lg-2" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>
      </div>
    </section>
    
    <section id="pc" class="skills section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="container section-title" data-aos="fade-up">
          <h2><?php echo $projectreferences; ?></h2>
        <button onclick="slideUp('box');" class="custom-btn btn-12"><span>Click!</span><span>Read Less</span></button>
        <button onclick="slideDown('box');" class="custom-btn btn-12"><span>Click!</span><span>Read More</span></button>
        </div>
        <div id = "box">
        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 content">
            <div class="skills-content skills-animation">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"><?php echo $customername; ?></th>
                    <th scope="col"><?php echo $endusers; ?></th>
                    <th scope="col"><?php echo $projectnames; ?></th>
                    <th scope="col"><?php echo $products; ?></th>
                    <th scope="col"><?php echo $projectyear; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>TAMBANG TONDANO NUSAJAYA, PT</td>
                    <td>Rajawali Group</td>
                    <td>Gold Mining</td>
                    <td>Gate Valve Alloy Steel</br>
                      Safety Relief Valve Bueno</td>
                    <td>2020</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>PEMBANGKITAN JAWA-BALI, PT</td>
                    <td>PJB UJLJ Bangka</td>
                    <td>Boiler CCTV Furnace</td>
                    <td>Furnace Camera Boiler Cooling System & Electric Control</td>
                    <td>2020</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>YASA INDUSTRI NUSANTARA, PT</td>
                    <td>Pertamina RU VI Balongan</td>
                    <td>Water Treatment Plant</td>
                    <td>Gate, Globe, Check dan Butterfly Valve</td>
                    <td>2020</td>
                  </tr>
                  <tr>
                    <th scope="row">4</td>
                    <td>REXAUDIA SASADA SENTOSA, PT</td>
                    <td></td>
                    <td></td>
                    <td>Ball dan Check Valve</td>
                    <td>2020</td>
                </tr>
                <tr >
                    <th scope="row">5</td>
                    <td>KILANG PERTAMINA INTERNASIONAL, PT</td>
                    <td>Pertamina RU VI Balongan</td>
                    <td>Sour Crude</td>
                    <td>Gate, Globe Swing</td>
                    <td>2020</td>
                </tr>
                <div id>
                <tr>
                    <th scope="row">6</td>
                    <td>GARUDA SAKTI INDOJAYA, PT</td>
                    <td>PLTU Teluk Balikpapan</td>
                    <td>Penggantian Level Gaude Steam Drum</td>
                    <td>Level Gauge Steam Drum</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <th scope="row">7</td>
                    <td>GARUDA SAKTI INDOJAYA, PT</td>
                    <td>PLTU Teluk Balikpapan</td>
                    <td>Penggantian Level Gaude Steam Drum</td>
                    <td>Level Gauge Steam Drum</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <th scope="row">8</td>
                    <td>ENERBA TEKNOLOGI, PT</td>
                    <td></td>
                    <td>Water Treatment</td>
                    <td>Pipe, Elbow</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <th scope="row">9</td>
                    <td>BAJA ABADI LESTARI, PT</td>
                    <td>Wijaya Karya</td>
                    <td>Bio Diesel</td>
                    <td>Gate, Check dan Ball Valve</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <th scope="row">10</td>
                    <td>SOUTHERN CHEMICALS & ENGINEERING, PT</td>
                    <td>PT. Cargil</td>
                    <td>Water Treatment</td>
                    <td>Gate, Globe, Check dan Butterfly Valve</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <th scope="row">11</td>
                    <td>ENERGI LIDAH API, PT</td>
                    <td>PT. Industri Gula Glammore</td>
                    <td></td>
                    <td>Gate dan Globe Valve</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <th scope="row">12</td>
                    <td>DWIMITRA EKATAMAN MANDIRI, PT</td>
                    <td>Prometric Japa Co</td>
                    <td>Fire Hydrant</td>
                    <td>Gate Valve Resilient Seated 300PSI OS&Y Type with Flange</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <th scope="row">13</td>
                    <td>TRIATAMA TIRTA AMNDIRI, PT</td>
                    <td>Memiontec Indonesia</td>
                    <td>Water Treatment Plant</td>
                    <td>Plat Besi SS400</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <th scope="row">14</td>
                    <td>KILANG PERTAMINA INTERNASIONAL, PT</td>
                    <td>Pertamina RU VI Balongan</td>
                    <td>Turn Around</td>
                    <td>Butterfly Valve</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <th scope="row">15</td>
                    <td>KILANG PERTAMINA INTERNASIONAL, PT</td>
                    <td>Pertamina RU VI Balikpapan</td>
                    <td>PENGADAAN GATE VALVE SOUR CRUDE BPP 1 TA 2024 LOG 1776/22K55 PR 100051030</td>
                    <td>Gate Valve Solid Wedge</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">16</td>
                    <td>KILANG PERTAMINA INTERNASIONAL, PT</td>
                    <td>Pertamina RU VI Balikpapan</td>
                    <td>PENGADAAN VALVE CARRY OVER TA 2023 LOG 0161/23K55 PR 0100052173</td>
                    <td>Gate Valve body A217 WCB</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">17</td>
                    <td>LANCANG KUNING SUKSES, PT</td>
                    <td>Pertamina RU III Plaju</td>
                    <td>PENGADAAN UNTUK PERTAMINA RU III PLAJU</td>
                    <td>Swing Check body A351 CF8 dan Gate Valve body A351 CF8</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">18</td>
                    <td>PETROSEA TBk, PT</td>
                    <td>PT. Freeport Smelter Gresik</td>
                    <td>MMR GRESIK PROJECT</td>
                    <td>Pipe, Stub End, Elbow, Gasket, Std Bolt</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">19</td>
                    <td>KILANG PERTAMINA INTERNASIONAL, PT</td>
                    <td>Pertamina RU VI Balikpapan</td>
                    <td>PENGADAAN GLOBE VALVE DAN CHECK VALVE SOUR CRUDE LOG 0147/23K55 PR 100051412</td>
                    <td>Check Valve dan Globe Valve</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">20</td>
                    <td>KILANG PERTAMINA INTERNASIONAL, PT</td>
                    <td>Pertamina RU VI Balikpapan</td>
                    <td>PENGADAAN GATE VALVE SOUR CRUDE BPP 1 TA 2024 REF. LOG NO 1774/22K55 PR 100051055</td>
                    <td>Gate Valve Solid Wedge</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">21</td>
                    <td>KILANG PERTAMINA INTERNASIONAL, PT</td>
                    <td>Pertamina RU VI Balikpapan</td>
                    <td>PENGADAAN MATERIAL VALVE TA 2024 REF. LOG 0143/23K55 PR 0100052021</td>
                    <td>Globe Valve body A105, Check Valve body A216 WCB</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">22</td>
                    <td>KILANG PERTAMINA INTERNASIONAL, PT</td>
                    <td>Pertamina RU VI Balikpapan</td>
                    <td>PENGADAAN GATE VALVE SOUR CRUDE BPP 1 TA 2024 LOG NO 1777/22K55 PR 100051051</td>
                    <td>Gate Valve Solid Wedge</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">23</td>
                    <td>PETROSEA TBk, PT</td>
                    <td>PT. Freeport Smelter Gresik</td>
                    <td>MMR GRESIK PROJECT</td>
                    <td>Pipe, Mesin AMD</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">24</td>
                    <td>PETROSEA TBk, PT</td>
                    <td>PT. Freeport Smelter Gresik</td>
                    <td>MMR GRESIK PROJECT</td>
                    <td>Pipe, Equal Tee, Reducer, Elbow, Stub End, Gasket EPDM, Mesin AMD</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <th scope="row">25</td>
                    <td>PETROSEA TBk, PT</td>
                    <td>PT. Freeport Smelter Gresik</td>
                    <td>MMR GRESIK PROJECT</td>
                    <td>Pipe, Reducer HDPE, Elbow, Stub End, Backing Ring, Blind Flange, Gasket, Stud Bolt, Equal Tee</td>
                    <td>2023</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>

        <div class="container section-title mt-5" data-aos="fade-up">
          <h2><?php echo $anscustomers; ?></h2>
        </div>
        <div class="row">
          <div class="col-lg-4 d-flex align-items-center">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-4 pt-4 pt-lg-0 content">
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Bukit Asam Tbk</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Vale Indonesia Tbk</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Petronas Niaga Indonesia</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Pertamina Driling Service Indonesia</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. PGAS Solution</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Indonesia Power</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Timah Tbk</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Medco E & P Tonmori Sulawesi</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. PLN (Persero)</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Pertamina Geothermal Energy</span></li>
            </ul>
          </div>
          <div class="col-lg-4 pt-4 pt-lg-0 content">
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Pertamina (Persero)</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Pelabuhan Indonesia 2 (Persero)</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Geo Dipa Energi</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. PJB Services</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. PJBUP Muara Karan</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Pembangkit Jawa Bali</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Rekayasa Industri</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Adhi Karya Tbk</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>PT. Medco Energi Internasional Tbk</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $contacts; ?></h2>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-5">
            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3><?php echo $address; ?></h3>
                  <p>
                  <?php echo $addressexp; ?>
                  </p>
                </div>
              </div>
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3><?php echo $callus; ?></h3>
                  <p><?php echo $callusexp; ?></p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3><?php echo $emailus; ?></h3>
                  <p><?php echo $emailusexp; ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="info-wrap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.938864718531!2d106.87452287498965!3d-6.138915693848002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5f5201c31ab%3A0x867b0ea576e30a11!2sPT.%20Amanah%20Nusantara%20Sejahtera!5e0!3m2!1sen!2sid!4v1729066495231!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></> frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <img src="assets/logo_ans.png" alt="" width="40%">
          </a>
          <div class="footer-contact pt-3">
            <p>
              Rukan Sunter Permai, Jl. Danau Sunter Utara No.7 Blok B <br>
              RT.8/RW.15, Sunter Agung, Kec. Tj. Priok, Jkt Utara, <br>
              Daerah Khusus Ibu kota Jakarta 14350
            </p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4><?php echo $usefullinks; ?></h4>
          <ul>
            <li> <i class="bi bi-chevron-right"></i><a href="#hero" class="active"><?php echo $home_foot; ?></a></li>
            <li> <i class="bi bi-chevron-right"></i><a href="#about"><?php echo $about_foot; ?></a></li>
            <li> <i class="bi bi-chevron-right"></i><a href="#services"><?php echo $services_foot; ?></a></li>
            <li> <i class="bi bi-chevron-right"></i><a href="#gallery"><?php echo $gallery_foot; ?></a></li>
            <li> <i class="bi bi-chevron-right"></i><a href="#certi">C<?php echo $certification_foot; ?></a></li>
            <li> <i class="bi bi-chevron-right"></i><a href="#pc"><?php echo $project_customers; ?></a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4><?php echo $ourproducts; ?></h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?php echo $oil_gasvalve; ?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?php echo $petrochemical_valve; ?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?php echo $powpla_minvalve; ?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?php echo $lincervalve; ?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?php echo $linpfavalve; ?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?php echo $conwater; ?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?php echo $instrumentation; ?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Petrochemical Valve</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4><?php echo $followus; ?></h4>
          <p><?php echo $followusexp; ?></p>
          <div class="social-links d-flex">
            <a href="https://www.facebook.com/ptamanahnusanterasejahtera"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/ansvalve"><i class="bi bi-instagram"></i></a>
            <a href="https://id.linkedin.com/company/pt-amanah-nusantara-sejahtera"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">PT. Amanah Nusantara Sejahtera</strong></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script language="JavaScript" type="text/JavaScript">
	function MM_jumpMenu(targ,selObj,restore){ //v3.0
    eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
	if (restore) selObj.selectedIndex=0;
	}
</script>

<script>
  function slideUp(el) {
  var elem = document.getElementById(el);
  elem.style.transition = "all 2s ease-in-out";
  elem.style.height = "0px";
  }
  function slideDown(el) {
    var elem = document.getElementById(el);
    elem.style.transition = "all 2s ease-in-out";
    elem.style.height = "1650px";
  }
</script>
</script>

</body>

</html>