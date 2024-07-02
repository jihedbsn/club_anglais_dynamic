@extends('layouts.app')

@section('content')
    <div class="main-slider">
        <div class="owl-carousel owl-theme">
            <div class="slide slide-1">
                <div class="slide-content">
                    <img src="{{ asset('assets/img/welcome-text.png') }}" alt="image">
                    <div class="textual-content">
                        <p>We teach English through engaging activities such as sports, games, music, art, and drama.</p>
                        <div class="banner-btn">
                            <a href="#" class="default-btn">Learn More</a>
                            <a href="#" class="optional-btn">Find Out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="value-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-image-wrap">
                        <img src="assets/img/section1-image-1.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="value-item">
                        <div class="value-content">
                            <h3>Our Core Values </h3>

                        </div>

                        <div class="value-inner-content">
                            <div class="number">
                                <span>01</span>
                            </div>
                            <h4>ENGAGING</h4>
                            <p>We believe that children simply learn better when they are fully engaged, highly motivated,
                                and having fun.
                            </p>
                        </div>

                        <div class="value-inner-content">
                            <div class="number">
                                <span class="bg-2">02</span>
                            </div>
                            <h4>PASSION FOR KIDS</h4>
                            <p>At ClubAnglais, we have a passion for kids. We start working with kids as early as 18 months
                                and we work with them until age 14, and sometimes beyond.</p>
                        </div>

                        <div class="value-inner-content">
                            <div class="number">
                                <span class="bg-3">03</span>
                            </div>
                            <h4>EXCELLENCE</h4>
                            <p>At ClubAnglais we focus exclusively on teaching English to children. That's all we do; and so
                                we strive to be the very best at it.</p>
                        </div>
                        <div class="value-inner-content">
                            <div class="number">
                                <span class="bg-4">04</span>
                            </div>
                            <h4>INNOVATION</h4>
                            <p>Because our approach to teaching English is so unique, we have built our curriculum from the
                                ground up to make sure everything we do is consistent with our fun, engaging approach to
                                teaching children. </p>
                        </div>

                        <div class="value-inner-content">
                            <div class="number">
                                <span class="bg-5">05</span>
                            </div>
                            <h4>GROWTH</h4>
                            <p>The growing demand for English language instruction in North Africa, along with a variety of
                                characteristics about ClubAnglais, result in the potential for growth.
                                Someday we hope that ClubAnglais will positively impact communities all across North Africa.
                            </p>
                        </div>

                    </div>

                </div>
                {{-- <div class="centred-button">
                    <a href="/our-values" class="default-btn">Read More</a>
                </div> --}}
            </div>
        </div>


    </section>
    <!-- Start Who We Are Area -->

    <!-- End Who We Are Area -->


    <!-- Start Who We Are Area -->
    <section class="who-we-are ptb-100 bg-cce5ff">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <span>Our Vision</span>
                        <h3>Our vision is to provide excellent education in English to children across North Africa,
                            rippling outward to impact entire communities and beyond.</h3>
                        <p>Our vision starts with children ages eighteen months through fourteen years. We hope that someday
                            the children we serve will be scattered all across North Africa, from the Atlantic Coast of
                            Morocco to the shores of the Red Sea in Egypt. Our primary objective is to help children learn
                            English, and to do it with such excellence that many of them reach near-native fluency before
                            the age of fourteen. During this process we hope that we can play a role in shaping these young
                            lives. </p>


                        <div class="centred-button">
                            <a href="/our-vision" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-image">
                        <img src="assets/img/section2-image.png" alt="image">

                        <div class="choose-image-shape">

                            <div class="shape-2">
                                <img src="assets/img/choose/choose-shape-2.png" alt="image">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Who We Are Area -->

    <!-- Start Value Area -->
    <section class="who-we-are ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="who-we-are-image">
                        <img src="assets/img/section3-image.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <span>Our mission </span>
                        <h3>ClubAnglais's mission is to transform lives !</h3>
                        <p>Our mission is not simply to transmit information, but to engage students in the learning process
                            in a variety of positive, encouraging ways. We aspire to connect personally with our students to
                            provide a wholistic, nurturing, and safe learning environment. We pay careful attention to our
                            students’ attitudes and motivations, as well as their cognitive development. We believe that as
                            we do these things, we will have an opportunity to make a lasting impact on the children we
                            serve. In order to accomplish this we pay careful attention to four particular aspects of our
                            pedagogical model: </p>

                        <ul class="who-we-are-list">
                            <li>
                                <span>1</span>
                                The affective domain
                            </li>
                            <li>
                                <span>2</span>
                                The immersion approach to language learning
                            </li>
                            <li>
                                <span>3</span>
                                Developmental aspects of language learning
                            </li>
                            <li>
                                <span>4</span>
                                Differentiation
                            </li>

                        </ul>
                        <br>
                        <p>
                            In the same way that we aspire to transform the lives of our students in positive ways, we also
                            hope to help transform the communities we serve. We seek to build relationships with the
                            families of our students so we can include them in the learning process and ensure that we are
                            doing our best to meet their needs. </p>

                    </div>
                </div>
                <div class="centred-button">
                    <a href="/our-mission" class="default-btn">Read More</a>
                </div>
            </div>
        </div>

        <!--          <div class="who-we-are-shape">
                                                                                                                        <img src="assets/img/who-we-are/who-we-are-shape.png" alt="image">
                                                                                                                    </div> -->
    </section>
    <!-- End Value Area -->

    <!-- Start Class Area -->
    <section class="class-area bg-ffffff pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Classes</span>
                <h2>Our Preschool Programs</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="assets/img/class/class-1.jpg" alt="image">
                            </a>
                        </div>

                        <div class="class-content">
                            <div class="price">400TD /Month </div>
                            <h3>
                                <a href="#">PK 1</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>

                            <ul class="class-list">
                                <li>
                                    <span>Age:</span>
                                    18 Months-2 y.o
                                </li>
                                <li>
                                    <span>Time:</span>
                                    MON-FRI&emsp;
                                    9AM-12 PM
                                </li>
                                <li>
                                    <span>Seat:</span>
                                    10
                                </li>
                            </ul>

                            <div class="class-btn">
                                <a href="#" class="default-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="assets/img/class/class-2.jpg" alt="image">
                            </a>
                        </div>

                        <div class="class-content">
                            <div class="price">790TD /Month </div>
                            <h3>
                                <a href="#">PK 2</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>

                            <ul class="class-list">
                                <li>
                                    <span>Age:</span>
                                    2 - 3 y.o
                                </li>
                                <li>
                                    <span>Time:</span>
                                    MON-FRI&emsp;
                                    9AM-4 PM
                                </li>
                                <li>
                                    <span>Seat:</span>
                                    13
                                </li>
                            </ul>

                            <div class="class-btn">
                                <a href="#" class="default-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="assets/img/class/class-3.jpg" alt="image">
                            </a>
                        </div>

                        <div class="class-content">
                            <div class="price">790TD /Month </div>
                            <h3>
                                <a href="#">PK 3</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>

                            <ul class="class-list">
                                <li>
                                    <span>Age:</span>
                                    3 - 4 y.o
                                </li>
                                <li>
                                    <span>Time:</span>
                                    MON-FRI&emsp;
                                    9AM-4 PM
                                </li>
                                <li>
                                    <span>Seat:</span>
                                    13
                                </li>
                            </ul>

                            <div class="class-btn">
                                <a href="#" class="default-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="assets/img/class/class-1.jpg" alt="image">
                            </a>
                        </div>

                        <div class="class-content">
                            <div class="price">790TD /Month </div>
                            <h3>
                                <a href="#">PK 4</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>

                            <ul class="class-list">
                                <li>
                                    <span>Age:</span>
                                    4 - 5 y.o
                                </li>
                                <li>
                                    <span>Time:</span>
                                    MON-FRI&emsp;
                                    9AM-4 PM
                                </li>
                                <li>
                                    <span>Seat:</span>
                                    13
                                </li>
                            </ul>

                            <div class="class-btn">
                                <a href="#" class="default-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--             <div class="class-shape">
                                                                                                                        <div class="shape-1">
                                                                                                                            <img src="assets/img/class/class-shape-1.png" alt="image">
                                                                                                                        </div>
                                                                                                                        <div class="shape-2">
                                                                                                                            <img src="assets/img/class/class-shape-2.png" alt="image">
                                                                                                                        </div>
                                                                                                                    </div> -->
    </section>
    <!-- End Class Area -->
    <!-- Start Testimonials Area -->
    <section class="testimonials-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span>Testimonials</span>
                <h2>What Parents Say About Us</h2>
            </div>

            <div class="testimonials-slides owl-carousel owl-theme">
                <div class="testimonials-item">
                    <div class="testimonials-item-box">
                        <div class="icon">
                            <i class='bx bxs-quote-left'></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.</p>
                        <div class="info-box">
                            <h3>Glims Bond</h3>
                            <span>Music Teacher</span>
                        </div>
                    </div>
                    <div class="testimonials-image">
                        <img src="assets/img/testimonials/testimonials-1.png" alt="image">
                    </div>
                </div>

                <div class="testimonials-item">
                    <div class="testimonials-item-box">
                        <div class="icon">
                            <i class='bx bxs-quote-left'></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.</p>
                        <div class="info-box">
                            <h3>Sherlock Bin</h3>
                            <span>Art Teacher</span>
                        </div>
                    </div>
                    <div class="testimonials-image">
                        <img src="assets/img/testimonials/testimonials-2.png" alt="image">
                    </div>
                </div>

                <div class="testimonials-item">
                    <div class="testimonials-item-box">
                        <div class="icon">
                            <i class='bx bxs-quote-left'></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.</p>
                        <div class="info-box">
                            <h3>Priestly Herbart</h3>
                            <span>Math Teacher</span>
                        </div>
                    </div>
                    <div class="testimonials-image">
                        <img src="assets/img/testimonials/testimonials-3.png" alt="image">
                    </div>
                </div>

                <div class="testimonials-item">
                    <div class="testimonials-item-box">
                        <div class="icon">
                            <i class='bx bxs-quote-left'></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.</p>
                        <div class="info-box">
                            <h3>Glims Bond</h3>
                            <span>Music Teacher</span>
                        </div>
                    </div>
                    <div class="testimonials-image">
                        <img src="assets/img/testimonials/testimonials-1.png" alt="image">
                    </div>
                </div>

                <div class="testimonials-item">
                    <div class="testimonials-item-box">
                        <div class="icon">
                            <i class='bx bxs-quote-left'></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.</p>
                        <div class="info-box">
                            <h3>Sherlock Bin</h3>
                            <span>Art Teacher</span>
                        </div>
                    </div>
                    <div class="testimonials-image">
                        <img src="assets/img/testimonials/testimonials-2.png" alt="image">
                    </div>
                </div>

                <div class="testimonials-item">
                    <div class="testimonials-item-box">
                        <div class="icon">
                            <i class='bx bxs-quote-left'></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.</p>
                        <div class="info-box">
                            <h3>Priestly Herbart</h3>
                            <span>Math Teacher</span>
                        </div>
                    </div>
                    <div class="testimonials-image">
                        <img src="assets/img/testimonials/testimonials-3.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->

    <!-- Start Event Area -->
    <section class="event-area bg-ffffff pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Clubs</span>
                <h2>Our Club Activities</h2>
            </div>

            <div class="event-box-item">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="event-image">
                            <img src="assets/img/sections3-image.png" alt="image">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="event-content">
                            <h3>
                                Preschool Club
                            </h3>
                            <br>
                            <p>Preschool Club consists of a variety of age-appropriate, hands-on, fun activities because
                                research indicates that children simply learn better when they are fully engaged, highly
                                motivated, and having fun.
                            </p>
                            <ul class="event-list">
                                <li>
                                    <i class='bx bx-time'></i>
                                    Wednesday afternoon or
                                    <!-- <br> -->
                                    Saturday morning or
                                    <!-- <br> -->
                                    Saturday afternoon
                                </li>
                                <!-- <li>
                                                                                                                                                <i class='bx bxs-cart'></i>
                                                                                                                                                4 weeks per session <br> 200 TND per session
                                                                                                                                            </li> -->
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="event-date">
                            <h4>Ages: 3-5 y.o</h4>
                            <br>
                            <div class="class-btn">
                                <a href="#" class="default-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End Event Area -->
    <!-- Start Choose Area -->
    <section class="choose-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-choose-item">
                        <span>Summer is here !</span>
                        <h3>Discover our summer camps !</h3>
                        <p>Every summer ClubAnglais holds two intensive two-week Summer Camp sessions for children ages 6-14
                            y.o. The camps schedule is from Monday through Friday from 9:00am until 4:00pm. </p>
                        <p>We teach English through fun, engaging activities such as sports, games, swimming, woodworking,
                            music, art and drama. </p>
                        <p>This all-day immersion approach is an excellent way for your child to make rapid progress in
                            learning English.</p>
                        <div class="choose-btn">
                            <a href="#" class="default-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-image">
                        <img src="assets/img/section4-image.png" alt="image">

                        <div class="choose-image-shape">
                            <div class="shape-1">
                                <img src="assets/img/choose/choose-shape-1.png" alt="image">
                            </div>
                            <div class="shape-2">
                                <img src="assets/img/choose/choose-shape-2.png" alt="image">
                            </div>
                            <!--  <div class="shape-3">
                                                                                                                                            <img src="assets/img/choose/choose-shape-3.png" alt="image">
                                                                                                                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Area -->
    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>News and Blog</span>
                <h2>Latest News</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="#">
                                <img src="assets/img/blog/blog-1.jpg" alt="image">
                            </a>
                        </div>

                        <div class="blog-content">
                            <ul class="post-meta">
                                <li>
                                    <span>By Admin:</span>
                                    <a href="#">Jack John</a>
                                </li>
                                <li>
                                    <span>Date:</span>
                                    25 Dec 2022
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Red Green Color Blindness</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>

                            <div class="blog-btn">
                                <a href="#" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="#">
                                <img src="assets/img/blog/blog-2.jpg" alt="image">
                            </a>
                        </div>

                        <div class="blog-content">
                            <ul class="post-meta">
                                <li>
                                    <span>By Admin:</span>
                                    <a href="#">Glims Bond</a>
                                </li>
                                <li>
                                    <span>Date:</span>
                                    26 Dec 2022
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">8 Ways to Learning Lesson</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>

                            <div class="blog-btn">
                                <a href="#" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="#">
                                <img src="assets/img/blog/blog-3.jpg" alt="image">
                            </a>
                        </div>

                        <div class="blog-content">
                            <ul class="post-meta">
                                <li>
                                    <span>By Admin:</span>
                                    <a href="#">Smith Broke</a>
                                </li>
                                <li>
                                    <span>Date:</span>
                                    27 Dec 2022
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Full-Day Session With Activities</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>

                            <div class="blog-btn">
                                <a href="#" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Add more sections as needed -->
@endsection
