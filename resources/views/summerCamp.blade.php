@extends('layouts.app')

@section('content')
    <div class="page-banner-area item-smcampcover">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Power Camp</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Power Camp</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Event Details Area -->
    <section class="event-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="event-details-desc">
                        <div class="event-desc-image">
                            <img src="assets/img/smcampmain.jpeg" alt="image">
                        </div>

                        <div class="event-desc-content">
                            <h3>Discover Our Power Camp</h3>
                            <p>Every summer ClubAnglais holds two intensive two-week Summer Camp sessions for children ages
                                6-14 y.o. The camps schedule is from Monday through Friday from 9:00am until 4:00pm. </p>
                            <p>We teach English through fun, engaging activities such as sports, games, swimming,
                                woodworking, music, art and drama.
                            </p>
                            <p>This all-day immersion approach is an excellent way for your child to make rapid progress in
                                learning English.</p>
                        </div>
                    </div>
                    <div class="centred-button">
                        <a href="/contact" class="default-btn">Subscribe</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="event-details-information">
                        <h3>Power Camp Details</h3>

                        <ul>
                            <li>
                                <span>Age:</span>
                                6 - 14 Years Old
                            </li>
                            <li>
                                <span>Time:</span>
                                July
                            </li>
                            <li>
                                <!-- <span>1 :</span> -->
                                2 Weeks
                            </li>
                            <li>
                                <!-- <span>2 :</span> -->
                                MON-FRI
                            </li>
                            <li>
                                9AM-4PM
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Event Details Area -->
@endsection
