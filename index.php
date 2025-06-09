<?php require_once 'data/projects.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Aljunior | Portfolio</title>
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

  <link href="assets/css/main.css?v=<?php echo time(); ?>" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i><span>Portfolio</span></a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">


      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h2>Muhamad Al Junior</h2>
            <p>I'm <span class="typed" data-typed-items="Developer, Freelancer, Photographer">Designer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            <div class="social-links">
              <a href="https://www.instagram.com/_aljunior"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/aljunior/"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>I’m passionate about creating useful and creative solutions. I enjoy working on projects that solve real problems and help people. With a strong interest in design and technology, I’m always learning and growing to become better at what I do.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-8 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/fotodiri.jpg" class="img-fluid" alt="">
          </div>
          <div class="d-flex flex-column gap-4 col-lg-8 content">
            <h2>Data Scientist &amp; Web Developer.</h2>

            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>18 September 1999</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.linkedin.com/in/aljunior/</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 81288289717</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Jakarta, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>25</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>muhamad.aljunior18@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->



    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Here are the technical and professional skills I've developed through education and hands-on projects.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Python</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>MySQL</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Tableau</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Git</span> <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Tailwind</span> <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->


          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>A brief overview of my educational background, experience, and key achievements in the tech industry.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Summary</h3>

            <div class="resume-item pb-0">
              <h4>Muhamad Al Junior</h4>
              <p><em>A proactive double-degree graduate in Computer Science and Computer Engineering with a solid foundation in programming, software development, and data analysis. Skilled in HTML, CSS, PHP, Python, and SQL with practical experience in web development and database management. Open to roles in software engineering, web development, or IT support, with a strong focus on continuous learning and delivering effective technical solutions.</em></p>
              <ul>
                <li>Jakarta, Indonesia</li>
                <li>+6281288289717</li>
                <li>muhamad.aljunior18@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Computer Science</h4>
              <h5>2017 - 2022</h5>
              <p><em>Management and Science University, Selangor, Malaysia</em></p>
              <p>Relevant Coursework: Data Structure and Algorithm, Data Mining, Database System, Statistics and Probabilities, Web and Mobile Devices Programming, Real-Time System, Linux Programming, Software Project Management, Multimedia Technology.</p>
              <p>GPA: 3.71</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Bachelor of Applied Computer Engineering</h4>
              <h5>2017 - 2021</h5>
              <p><em>Politeknik Negeri Jakarta, Depok, Indonesia</em></p>
              <p>Relevant Coursework: Algorithm and Programming, Operating System, Computer and Communication Network, Software Engineering, Data Warehouse, Computer Security and Disaster Recovery, Artificial Intelligence, Machine Learning, Software Quality Assurance.</p>
              <p>GPA: 2.94</p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Experience</h3>
            <div class="resume-item">
              <h4>Computer Security and Technical Internship</h4>
              <h5>Nov 2021 - May 2022</h5>
              <p><em>10 Creative Solutions Sdn. Bhd. </em></p>
              <ul>
                <li>Monitored and ensured the operational functionality of user computers and network connectivity, troubleshooting hardware and software issues to maintain optimal performance</li>
                <li>Implemented and maintained security protocols by daily monitoring of the F-Secure Anti-Virus control center, ensuring timely detection and resolution of security threats</li>
                <li>Assisted the security team in diagnosing and resolving technical issues related to F-Secure Anti-Virus, contributing to an overall increase in system reliability and security</li>
                <li> Collaborated with IT and security teams to enhance cybersecurity measures, reducing potential vulnerabilities and increasing the security awareness of end users</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>UI Developer Internship</h4>
              <h5>Jan 2020 - Apr 2020</h5>
              <p><em>PT WIKA Industri Manufaktur (WIMA)</em></p>
              <ul>
                <li>Collaborated with the IT division to design and develop company websites using WordPress, customizing themes and plugins to enhance user experience and website functionality</li>
                <li>Actively contributed to the development of factory information systems, providing UI/UX input to improve usability and streamline operations</li>
                <li>Assisted the marketing division by designing digital brochures and other marketing materials, ensuring cohesive branding and visual appeal</li>
                <li> Analyzed existing systems in the production division, identifying usability issues and proposing improvements to optimize workflow and efficiency</li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->




    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>
          A selection of projects that showcase my skills in software development, data analysis,
          and web technologies.
        </p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <!-- Portfolio Filters -->
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-product">Data Scientist</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <!-- Portfolio Items Grid -->
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($projects as $id => $project): ?>
              <div class="col-lg-4 col-md-6 isotope-item filter-product">
                <div class="d-flex flex-column bg-white border border-light rounded-4 shadow-sm h-100">
                  <!-- Image container to control height -->
                  <div class="overflow-hidden rounded-top" style="height: 220px;">
                    <img src="<?= $project['thumbnail'] ?>" alt="" class="w-100 h-100 object-fit-cover">
                  </div>

                  <!-- Content -->
                  <div class="p-3 d-flex flex-column flex-grow-1 gap-4">
                    <h4><?= $project['title'] ?></h4>


                    <div class="d-flex flex-wrap overflow-hidden h-auto">
                      <?php foreach ($project['skills'] as $skill): ?>
                        <span class="badge bg-primary me-1 mb-1"><?= $skill ?></span>
                      <?php endforeach; ?>
                    </div>

                    <p class="m-0 p-0 flex-grow-0" style="min-height: 80px;">
                      <?= strlen($project['about']) > 120 ? substr($project['about'], 0, 117) . '...' : $project['about'] ?>
                    </p>

                    <a href="portfolio-details.php?id=<?= $id ?>"
                      class="btn btn-link text-primary d-inline-flex align-items-center gap-4 p-0 text-decoration-none mt-auto">
                      Read More
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right text-primary" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                      </svg>
                    </a>

                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div><!-- End Isotope Layout -->
      </div><!-- End Container -->

    </section>



    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Feel free to reach out for collaboration, project inquiries, or just to connect.</p>
      </div>

      <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">
          <div class="d-flex px-6 gap-5 justify-content-center">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p><a href="tel:+6281288129717">+62 8128 8129 717</a></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><a href="mailto:muhamad.aljunior18@gmail.com">muhamad.aljunior18@gmail.com</a></p>
              </div>
            </div><!-- End Info Item -->
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