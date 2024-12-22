<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Universitas Bina Sarana Informatika</title>
	<!-- Preconnect ke Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">

  	<!-- Fallback DNS Prefetch -->
  	<link rel="dns-prefetch" href="https://fonts.googleapis.com">
  	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="./public/assets/img/logo/logo-bsi-lama.webp" type="image/x-icon">
    <link rel="stylesheet" href="./public/assets/css/styles.css" />
    <link rel="stylesheet" href="./public/assets/css/custom.css" />
  </head>
  <body class="antialiased scroll-smooth overflow-x-clip text-base font-normal">
    <!-- start header -->
	<header class="bg-thinBlue sticky top-0 z-50">
      <?php include "./components/header.php"; ?>
    </header>
    <!-- end header -->

    <main>
      <!-- start hero section -->
      <?php include "./components/section/beranda.php"; ?>
      <!-- end hero section -->

      <!-- start feature section -->
      <?php include "./components/section/feature.php"; ?>
      <!-- end feature section -->

      <!-- start about us section -->
      <?php include "./components/section/about-us.php"; ?>
      <!-- end about us section -->

      <!-- start stats section -->
      <?php include "./components/section/stats.php"; ?>
      <!-- end stats section -->

      <!-- start fakultas section -->
      <?php include "./components/section/fakultas.php"; ?>
      <!-- end fakultas section -->

      <!-- start lokasi section -->
      <?php include "./components/section/lokasi.php"; ?>
      <!-- end lokasi section -->

      <!-- start news section -->
      <?php include "./components/section/news.php"; ?>
      <!-- end news section -->

      <!-- start testimonials section -->
      <?php include "./components/section/testimonial.php"; ?>
      <!-- end testimonials section -->
    </main>

    <!-- start scroll up comp -->
    <?php include "./components/scroll.php"; ?>
    <!-- end scroll up comp -->

    <!-- start footer comp -->
    <?php include "./components/footer.php"; ?>
    <!-- end footer comp -->

	<script src="./public/assets/js/video-modal.js" defer></script>
	<script src="./public/assets/js/navbar.js" defer></script>
	<script src="./public/assets/js/testimoni.js" defer></script>
	<script src="./public/assets/js/scrollup.js" defer></script>
	<script src="./public/assets/js/lokasi.js" defer></script>
  </body>
</html>
