@extends('layouts.app')

@section('content')
    <div class="page-banner-area item-pkcampcover">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Preschool Camp</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Preschool Camp</li>
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
                            <img src="assets/img/pkcampmain.jpg" alt="image">
                        </div>

                        <div class="event-desc-content">
                            <h3>Discover Our Preschool Camp</h3>
                            <p>

                                In preschool summer camp, we invite children from 2 to 5 years old to participate in fun
                                engaging activities. The students will be in different classes according to their age .These
                                activities vary according to the students' ages and abilities . These activities include
                                sensory activities , music , arts and crafts ,recycling, cooking , theater and swimming .
                            </p>
                            <p>
                                Every class chooses a theme that they will be working on for the duration of the camp. Each
                                class except for the youngest class has pool time where a swimming instructor encourages
                                them to be more comfortable in water and learn beginner moves .
                            </p>



                        </div>
                    </div>
                    <div class="centred-button">
                        <a href="/contact?contact_type=Preschool camp" class="default-btn">Subscribe</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="event-details-information">
                        <h3>Preschool Camp Details</h3>

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
