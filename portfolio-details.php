<?php
require_once 'data/projects.php';

if (isset($_GET['id']) && array_key_exists($_GET['id'], $projects)) {
  $project = $projects[$_GET['id']];
} else {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Details - MyResume Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css?v=<?php echo time(); ?>" rel="stylesheet">

</head>

<body class="portfolio-details-page">

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/my-resume/"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
        <li><a href="/my-resume/#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
        <li><a href="/my-resume/#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
        <li><a href="/my-resume/#portfolio"><i class="bi bi-images navicon"></i><span>Portfolio</span></a></li>
        <li><a href="/my-resume/#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
      </ul>
    </nav>


  </header>

  <main class="main">

    <section id="portfolio-details" class="portfolio-details section">

      <div class="d-flex flex-column gap-5 p-4" data-aos="fade-up">

        <div class="text-start">
          <a href="/my-resume/#portfolio"
            class="d-inline-flex align-items-center gap-2 border border-secondary rounded-pill px-3 py-2 w-auto text-decoration-none text-dark"
            style="cursor: pointer;">
            <i class="bi bi-arrow-left"></i>
            <span class="fw-medium">All Projects</span>
          </a>

        </div>

        <div class="bg-white border border-secondary rounded-4 px-2 px-sm-4 py-2 py-sm-4">

          <!-- Title -->
          <h2><?php echo htmlspecialchars($project['title']); ?></h2>

          <!-- Thumbnail (logo) -->
          <div class="mb-4">
            <img src="<?php echo htmlspecialchars($project['thumbnail']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="img-fluid" style="max-height: 150px;">
          </div>

          <!-- Flex container with gap -->
          <div class="d-flex flex-column gap-4">


            <!-- Project links -->
            <div>
              <h5>Project Links</h5>
              <?php
              $urls = [];

              // Support both 'url' (single) and 'urls' (array)
              if (!empty($project['urls'])) {
                $urls = $project['urls'];
              } elseif (!empty($project['url'])) {
                $urls[] = $project['url'];
              }

              $flexDirectionClass = (count($urls) === 2) ? 'flex-row' : 'flex-column';
              ?>
              <?php if (!empty($urls)): ?>
                <div class="d-inline-flex <?= $flexDirectionClass ?> gap-2">
                  <?php foreach ($urls as $url): ?>
                    <?php
                    $label = 'Visit Website';
                    $icon = 'bi-link';

                    if (strpos($url, 'github.com') !== false) {
                      $label = 'GitHub';
                      $icon = 'bi-github';
                    } elseif (strpos($url, 'tableau.com') !== false) {
                      $label = 'Tableau';
                      $icon = 'bi-bar-chart-line';
                    }
                    ?>
                    <a href="<?= htmlspecialchars($url) ?>" target="_blank"
                      class="d-inline-flex align-items-center gap-2 px-3 py-2 bg-light rounded-pill text-dark text-decoration-none border border-gray-300">
                      <i class="bi <?= $icon ?>"></i>
                      <?= $label ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>


            <!-- Skills -->
            <div>
              <h5>Skills</h5>
              <div class="d-flex flex-row">
                <?php foreach ($project['skills'] as $skill): ?>
                  <span class="badge bg-primary me-2"><?= $skill ?></span>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Project information -->
            <!-- Project information -->
            <div>
              <h5>Project information</h5>
              <p class="fs-6 text-gray-900 m-0"><?php echo nl2br(htmlspecialchars($project['about'] ?? 'No description available.')); ?></p>
            </div>
          </div>
        </div>

      </div>

    </section>



  </main>
  <footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <div class="social-links d-flex justify-content-center">
        <a href="https://www.instagram.com/_aljunior"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/aljunior/"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Muhamad Al Junior</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          <p class="d-none">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            Distribuited by <a href="https://themewagon.com">ThemeWagon</a>
          </p>

        </div>
      </div>
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
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>