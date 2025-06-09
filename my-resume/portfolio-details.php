<?php
$projects = [
    "telco-customer-churn" => [
        "title" => "Telco Customer Churn",
        "skills" => ["Python", "Tableau"],
        "about" => "This project demonstrates how I used Python and SQL to analyze and visualize sales data. The dashboard includes key insights and automated reporting features.",
        "thumbnail" => "assets/img/portfolio/telco.jpg",
        "images" => [
            "assets/img/portfolio/telco.jpg"
        ],
        "url" => "https://github.com/aljuniorr/Telco-Customer-Churn"
    ],

    "transjakarta-analysis" => [
        "title" => "Transjakarta Data Analysis",
        "skills" => ["Python", "Tableau"],
        "about" => "This project analyzes Transjakarta bus data using Python for preprocessing and Tableau for interactive visual storytelling.",
        "thumbnail" => "assets/img/portfolio/tj.jpg",
        "images" => [
            "assets/img/portfolio/tj.jpg"
        ],
        "url" => "https://public.tableau.com/app/profile/muhamad.al.junior/viz/TransjakartaAnalysis/Story1"
    ],

    "fifa-world-cup-2014" => [
        "title" => "FIFA World Cup 2014 Stats",
        "skills" => ["Python", "Tableau"],
        "about" => "The FIFA World Cup 2014 in Brazil was a landmark event in the world of football. This project aims to capture the excitement and key moments of the tournament through a detailed and interactive Tableau dashboard. Providing a valuable resource for football enthusiasts, analysts, and researchers.",
        "thumbnail" => "assets/img/portfolio/fifa.jpg", // <- Add the thumbnail image to your assets folder
        "images" => [
            "assets/img/portfolio/fifa.jpg" // <- Add the actual image file here
        ],
        "url" => "https://public.tableau.com/app/profile/muhamad.al.junior/viz/WorldCupStats_16939052108210/Dashboard1"
    ]
];

if (isset($_GET['id']) && array_key_exists($_GET['id'], $projects)) {
    $project = $projects[$_GET['id']];
} else {
    // Redirect or show 404 if project not found
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

  <div class="container" data-aos="fade-up">

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
        <h5>Project links</h5>
        <a href="<?php echo htmlspecialchars($project['url']); ?>" target="_blank" class="btn btn-outline-primary btn-sm">Visit Website</a>
        <!-- Add GitHub or other links here if available -->
      </div>

      <!-- Skills -->
      <div>
        <h5>Skills</h5>
        <p><?php echo htmlspecialchars(implode(", ", $project['skills'])); ?></p>
      </div>

      <!-- Project information -->
      <!-- Project information -->
      <div>
        <h5>Project information</h5>
        <p><?php echo nl2br(htmlspecialchars($project['about'] ?? 'No description available.')); ?></p>
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