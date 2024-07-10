@extends('layouts.app')

@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-pkclubcover">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Preschool Club</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Preschool Club</li>
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
                            <img src="assets/img/pclubmain.jpeg" alt="image">
                        </div>

                        <div class="event-desc-content">
                            <h3>Discover Our Preschool Club</h3>
                            <p>The Preschool Club sessions take place once a week for 3 hours. You can pick the most
                                suitable time for your child out of these 3 options: Wednesday 3.30pm-6.30pm, Saturday
                                morning 9am-12pm or Saturday afternoon 2pm-5pm. Activities during Preschool Club include
                                music, arts and crafts, games, read-aloud sessions, and supervised play. This is a
                                full-immersion environment where children listen and speak only English for three hours,
                                under the supervision of native English speakers. Although three hours per week is not
                                enough for children to reach fluency it establishes a foundation for the children when their
                                brains are developmentally adapted to language acquisition. Early immersion in a language is
                                especially critical for acquiring native-like pronunciation. Our students produce English
                                language in increasing amounts as the year progresses. Songs are an important way that
                                students do this. In addition, teachers progress with their question asking strategies,
                                moving from yes/no questions to one-word responses, to short answers responses, and
                                eventually to complete thoughts.</p>

                        </div>
                    </div>
                    <div class="centred-button">
                        <a href="/contact?contact_type=Preschool club" class="default-btn">Subscribe</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="event-details-information">
                        <h3>Preschool Club Details</h3>

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
