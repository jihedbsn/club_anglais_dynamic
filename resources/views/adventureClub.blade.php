@extends('layouts.app')

@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Adventure Club</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Adventure Club</li>
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
                            <img src="assets/img/event-details.jpg" alt="image">
                        </div>

                        <div class="event-desc-content">
                            <h3>Discover Our Adventure Club</h3>
                            <p>The Adventure Club sessions take place once a week for 3 hours. You can pick the most
                                suitable time for your child out of these 3 options: Wednesday 3.30pm-6.30pm, Saturday
                                morning 9am-12pm or Saturday afternoon 2pm-5pm. </p>
                            <p>Each session consists of a variety of age-appropriate, hands-on, fun activities because
                                research indicates that children simply learn better when they fully engaged, highly
                                motivated, and having fun.
                                Activities include music, arts and crafts, games, read-aloud sessions, and supervised play.
                                This is a full-immersion environment where children listen and speak only English for three
                                hours, under the supervision of native English speakers. Although three hours per week is
                                not enough for children to reach fluency it establishes a foundation for the children when
                                their brains are developmentally adapted to language acquisition. Early immersion in a
                                language is especially critical for acquiring native-like pronunciation.</p>
                            <!-- <div id="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe>
                                        </div> -->
                        </div>
                    </div>
                    <div class="centred-button">
                        <a href="/contact" class="default-btn">Subscribe</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="event-details-information">
                        <h3>Adventure Club Details</h3>

                        <ul>
                            <li>
                                <span>Age:</span>
                                3 - 5 Years Old
                            </li>
                            <li>
                                <span>Time:</span>
                                Weekly sessions
                            </li>
                            <li>
                                <span>1 :</span>
                                Wednesday afternoon
                            </li>
                            <li>
                                <span>2 :</span>
                                Saturday morning
                            </li>


                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Event Details Area -->
@endsection
