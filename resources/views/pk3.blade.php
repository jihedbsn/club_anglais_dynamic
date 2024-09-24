@extends('layouts.app')

@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-pk3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Preschool 3 Program</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>PK3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Class Details Area -->
    <section class="class-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="class-details-desc">
                        <div class="class-desc-image">
                            <img src="assets/img/pk/pk3main.jpg" alt="image">

                            {{-- <img src="assets/img/class-details.jpg" alt="image"> --}}
                        </div>

                        <div class="tab class-details-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#">
                                                Social-Emotional
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Physical
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Literacy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Mathematics
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="tab_content">
                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>

                                                <p>In PK3, our focus is on nurturing children's self-regulation, fostering
                                                    positive relationships, and encouraging active participation in group
                                                    activities. By promoting positive interactions and providing consistent
                                                    emotional support, we lay a strong foundation for their social and
                                                    emotional development. We empower children to tackle social challenges
                                                    independently by developing their problem-solving skills and building
                                                    their self-confidence through responsibilities related to their
                                                    well-being and classroom role. Clearly defining classroom routines and
                                                    expectations helps them manage these elements effectively as the year
                                                    progresses.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>

                                                <p>In PK3, children’s gross and fine motor skills advance significantly.
                                                    They practice jumping with both feet off the ground, throwing and
                                                    catching a ball with more accuracy, and balancing on one foot for short
                                                    periods. Their fine motor skills improve through hand strengthening
                                                    activities such as manipulating small objects or puzzle pieces, turning
                                                    pages in a book, and using safety scissors to cut along a line. Children
                                                    handle crayons or markers with greater precision, make drawings of
                                                    simple shapes, attempt to color within the lines, and to trace the
                                                    letters of the alphabet. They also show increased ability to dress
                                                    themselves and engage in more complex play activities that require
                                                    coordination.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>

                                                <p>In PK3, literacy becomes a vital area in a child’s language development;
                                                    therefore, we place a strong emphasis on pre-literacy. Literacy
                                                    activities in this class become more structured and interactive.
                                                    Students practice recognizing and naming letters of the alphabet, both
                                                    in books and classroom displays. They enjoy participating in storytime,
                                                    where they can predict and discuss plot elements, and they start to
                                                    retell familiar stories in their own words. Classroom activities also
                                                    include sorting letters, engaging in letter-sound matching games, and
                                                    practicing simple writing skills like drawing, tracing, and attempting
                                                    to write their names.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>
                                                <p>In PK3, students focus on recognizing and naming numerals and shapes
                                                    through engaging rhymes, crafts, and playful counting activities.
                                                    Teachers support this learning with visual aids such as number cards,
                                                    posters, and counting mats to enhance counting exercises. By the end of
                                                    the year, students will advance to counting aloud up to 20,
                                                    understanding the numerical sequence, and identifying shapes in various
                                                    orientations. They will learn to combine and separate objects, describe
                                                    quantities as "more than" or "less than," and connect numerals 1-10 to
                                                    their corresponding objects. As they explore measurement, students will
                                                    move from comparing two objects to ordering small sets by attributes
                                                    such as size, length, and weight. They will also develop skills in
                                                    identifying similarities and differences among objects, numbers, shapes,
                                                    and colors. Their ability to recognize and extend simple patterns, such
                                                    as repeating sequences of colors or shapes, will continue to grow.
                                                    Throughout the year, they will practice following simple directions
                                                    related to proximity (beside, between, next to) and expand their
                                                    understanding of location, direction, and distance.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="class-details-information">
                        <h3>Information</h3>

                        <ul>
                            <li>
                                <span>Age:</span>
                                3 Years old - 4 Years old
                            </li>
                            <li>
                                <span>Time:</span>
                                9:00AM - 4:00PM
                            </li>
                            <li>
                                <span>Class Size:</span>
                                13
                            </li>
                            <li>
                                <span>Inscription Fees:</span>
                                500 TD
                            </li>

                            <li>
                                <span>Monthly Fees:</span>
                                950TD
                            </li>

                        </ul>
                    </div>


                </div>


            </div>
            <div class="row">
                <div class="centred-button">
                    <a href="/contact?contact_type=PK3" class="default-btn">Subscribe</a>
                </div>
            </div>
        </div>
    </section>
@endsection
