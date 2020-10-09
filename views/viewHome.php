<!-- ======= Hero Section ======= -->


<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('views/assets/img/slide/<?= $slide1[0]->getTitle();?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
             
                <h2 class="animate__animated animate__fadeInDown"><?= $hero1[0]->getTitle(); ?></h2>
                <p class="animate__animated animate__fadeInUp"><?= $hero1[0]->getContent();?></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('views/assets/img/slide/<?= $slide2[0]->getTitle();?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><?= $hero2[0]->getTitle();?></h2>
                <p class="animate__animated animate__fadeInUp"><?= $hero2[0]->getContent();?></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('views/assets/img/slide/<?= $slide3[0]->getTitle();?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><?= $hero3[0]->getTitle();?></h2>
                <p class="animate__animated animate__fadeInUp"><?= $hero3[0]->getContent();?></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="views/assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2><?= $about1[0]->getTitle();?></h2>
              <p><?= $about1[0]->getContent();?></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href=""><?= $about2[0]->getTitle();?></a></h4>
              <p class="description"><?= $about2[0]->getContent();?></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href=""><?= $about3[0]->getTitle();?></a></h4>
              <p class="description"><?= $about3[0]->getContent();?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <div class="container">

        <div class="row no-gutters">

          <?php 
          /**
           * 
           * $x to count and write tht number of the service
           * $y to count and set the fade and delay
           */
          $x = 1; $y=0;
             foreach($aboutlists as $aboutlist): ?>
               
              <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="<?= $y?>">
               <span><?= $x ?></span>
               <h4><?= $aboutlist->getTitle()?></h4>
               <p><?= $aboutlist->getContent()?></p>
             </div>
          <?php $x++ ; $y+=100; endforeach; ?>

        </div>

      </div>
    </section><!-- End About Lists Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
        <?php 
        /**
         * $x counter for delay
         * here name used for storing icon
         */
            $x=0;
            foreach($services as $service) :?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="<?= $x?>">
            <div class="icon"><i class="<?= $service->getName();?>"></i></div>
            <h4 class="title"><a href=""><?= $service->getTitle();?></a></h4>
            <p class="description"><?= $service->getContent();?></p>
          </div>
          <?php $x+=100; endforeach; ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Our Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

        <?php 

              foreach($portfolios as $portfolio) :?>

          <div class="col-lg-4 col-md-6 portfolio-item <?= $portfolio->getFilter();?> ">
            <div class="portfolio-wrap">
              <img src="views/assets/img/portfolio/<?= $portfolio->getImage();?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $portfolio->getTitle();?></h4>
                <p><?= $portfolio->getContent();?></p>
                <div class="portfolio-links">
                  <a href="views/assets/img/portfolio/<?= $portfolio->getImage();?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="<?= $portfolio->getLink();?>" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>
              <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Our Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
        </div>

        <div class="row">
          <?php 
              $x = 0;
                foreach($teams as $team) :?>
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $x?>">
                  <div class="member">
                    <div class="pic"><img src="views/assets/img/team/<?= $team->getImage();?>" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4><?= $team->getName();?></h4>
                      <span><?= $team->getTitle();?></span>
                      <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $x+=100; endforeach;?>

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch">
            <?php
            /**
             * $x for counter for delay
             */
                $x=0;
                foreach($faqs as $faq) : ?>
          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="<?= $x?>">
            <h4><?= $faq->getTitle();?></h4>
            <p><?= $faq->getContent();?></p>
          </div>
        <?php $x+=100; endforeach;?>
         
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?= $contact1[0]->getAdress();?></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?=$contact1[0]->getEmail();?><br>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?=$contact1[0]->getPhone();?><br>+1 6678 254445 41</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
