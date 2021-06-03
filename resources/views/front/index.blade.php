@extends('layouts.front_layout.front_layout')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1 class="fs-md-6">Washing Machine/ Refrigerator / Microwave Service Center</h1>
          <h2 class="fs-5 mt-5">Our specialing trade and staff are fully qualified with the since 2005 recognised trade qualifications and We have a policy of customer satisfy and the value for money at low prices to repair.</h2>
          <a href="tel:9971213127"  class="btn-get-started scrollto">+91-9971213127</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Query Section ======= -->
    <section id="query" class="query">
      <div class="container">

        <div class="row justify-content-end">
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <div class="icon-box">
              <h4 class="title mb-4"><a href="">Book Appointment for Service</a></h4>
              <form action="{{ url('/add-query') }}" role="form" name="queryForm" id="queryForm" method="post">@csrf
                <div class="">
                  <input class="form-control" type="text" name="query_name" id="query_name" placeholder="Your Name" aria-label="default input example">
                </div>
                <div class="form-group mt-4">
                  <input class="form-control" type="number" name="query_phone" id="query_phone" placeholder="Your Phone Number" aria-label="default input example">
                </div>
                <select class="form-select mt-4" name="query_service" id="query_service" aria-label="Default select example">
                  <option selected>Select Service</option>
                  <option value="AC Service">Refrigerator</option>
                  <option value="Washing Machine">Washing Machine</option>
                  <option value="Microwave Oven">Microwave Oven</option>
                </select>
                <div class="d-grid gap-2 mt-4">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="2436" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>How It's Work</h3>
               <img class="img-fluid rounded-circle" src="images/front_images/S.jpg" alt="">
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-list-ul"></i>
                  <h4>Choose the service you need</h4>
                  <p>We provide repairs and service in Refrigerator / Washing Machine / Mircowave</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-clock"></i>
                  <h4>Choose your time slot</h4>
                  <p>We Service 9am to 9pm</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-award"></i>
                  <h4>Hassle-free Service </h4>
                  <p>Our professional will get in touch with you one hour before the service</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Services</h2>
          <p>
            Get Service in Delhi near you within 1 Day. Smart Care Bussines provides background-verified & trained repair and service experts
            who are professional with above 5 years experience.
          </p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-gear-wide-connected"></i>
              <h4><a href="#">Washing Machine Service</a></h4>
              <p>Multibrand Washiing Machine appliance repair have become all the spare parts of every home appliances spare parts.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-gear-wide"></i>
              <h4><a href="#">Refrigerator</a></h4>
              <p>We provide Repairs & Servicing of all types of Refrigerators: Single Door, Double Door, Triple Door, Side by Side Door</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-gear-wide-connected"></i>
              <h4><a href="#">Microwave Service</a></h4>
              <p>We are deals in Microwave Oven Repair also. Microwave service at genuine Cost and Microwave demo service also available.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Gallery</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">G1</li>
              <li data-filter=".filter-card">G2</li>
              <li data-filter=".filter-web">More</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/front_images/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="images/front_images/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/front_images/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="images/front_images/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="images/front_images/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/front_images/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="images/front_images/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="images/front_images/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="images/front_images/portfolio/portfolio-10.jpg" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Customer is our priority</h2>
          <p>What customer are saying about our service</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="images/front_images/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Anjali Verma</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Smart Care Bussines has been a breath of fresh air. I was using their competitor and I found that we had a lot of items that they said were fixed, but were not. They have fixed rush jobs for my company while I went to get lunch. 
                    They are always there to ensure your equipment stays up and running.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="images/front_images/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Utkarsh Kushwaha</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    We've been very pleased with their turn around time and overall work; it's been an improvement over our previous repair service providers. 
                    We've also been very pleased with the warranty that GES provides with their work on our ultrasonic equipment.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="images/front_images/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Amit Nagar</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I just wanted to take time to thank all of the staff at Smart Care Bussines. Everyone at your office has been a great help with all of our problems. Home Care Services has cut our down time and repair cost in half. 
                    Everyone has treated our problems as if they were their own.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="images/front_images/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Shivani Verma</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I would like to inform you that they provide an amazing service, I have taken a house painter service and the professionals and supervisor did a great job.Supervisior ensured that the work is completed in a effective manner... I will recommend this company to my peers
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="images/front_images/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Akky Chauhan</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I really like the application as availed salon services recently, its very hassle free and easy to book. she came well before time with all the essentials and completed the job on time. 
                    Facial is really good and even she was very patient with me, really appreciated and would recommend to everyone.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Have any queries ? Get in touch today</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>23, Uttam Nagar, Delhi-110059</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>smartcarebussiness@gmail.com<br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 9971213127</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="#" method="post" role="form" class="php-email-form">@csrf
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection  