@extends('layouts.app')

@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Preschool 2 Program</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>PK2</li>
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
                            <img src="assets/img/class-details.jpg" alt="image">
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

                                                <p>In PK2 we support and encourage the development of the children in the
                                                    areas of self-regulation, positive relationships and group
                                                    participation.
                                                    At the beginning of the year we are focusing on creating a welcoming
                                                    atmosphere in the classroom where the students can all feel safe.
                                                    From the beginning we make an effort to listen to each child and help
                                                    them learn how to communicate their needs and desires in a
                                                    developmentally appropriate way. Our class is a community where we learn
                                                    how to work together and care for one another.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>

                                                <p>In this area we actively work on supporting the development of the
                                                    children’s various physical skills, such as traveling (how they get
                                                    around), balancing, gross-motor and fine-motor.
                                                    Both in the classroom and outside we incorporate a lot of movement
                                                    throughout the day which strengthens and challenges the children. We
                                                    will not push someone to try something they are not ready to do, but
                                                    provide gentle and supportive opportunities.
                                                    We incorporate balls and hoops, tunnels, climbing walls, dancing and
                                                    running throughout the day.
                                                    For fine-motor development at this age we focus on strengthening the
                                                    hand muscles through many playful activities, such as using play-do and
                                                    squeezing or pinching things.
                                                    Though we will provide many different drawing and writing tools, they
                                                    are only for exploratory purposes.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>

                                                <p>This is a vital area in the development of a child as well as for
                                                    language learning, therefore we place a strong emphasis on pre-literacy.
                                                    Every day there are opportunities for the children to look at books and
                                                    also for group read-aloud times.
                                                    We will focus on interactive books that engage the children. We will
                                                    also use many songs and chants to begin introducing the concept of rhyme
                                                    and alliteration.
                                                    We introduce the alphabet in a very basic way through song and play.
                                                    Only the older children will work on recognizing their name and by the
                                                    end of the year be able to name some of the letters in their name.
                                                    As mentioned above, we provide a variety of writing tools without
                                                    specific instruction so that the children can naturally explore writing.
                                                    As we observe developmental readiness, the children will begin “writing”
                                                    in a journal to introduce the concept of written communication.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>
                                                <p>This area of development and learning encompasses number concepts,
                                                    spatial relationships, shapes, measurement and patterns.
                                                    Counting is so much fun that it is easy to incorporate from the very
                                                    beginning of the year without high expectations. By the end of the year
                                                    they should be able to count up to 10 successfully. As the year
                                                    progresses we begin slowly showing the children how to count individual
                                                    items up to 5 as well as introducing the individual numerals.
                                                    Spatial relationships and shapes are introduced from the beginning of
                                                    the year growing to a place where the children should be able to
                                                    recognize a few basic shapes and also be able to follow basic
                                                    instructions related to position (in, on, under, up, down) and proximity
                                                    (beside, between, next to)
                                                    With measurement we will work on comparing two objects at the beginning
                                                    of the year and growing to ordering a small set of objects according to
                                                    size or length.
                                                    Finally, at the beginning of the year we will help the children become
                                                    aware of simple patterns in daily life and then growing to making very
                                                    simple repeating patterns with beads or blocks.</p>
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
                                2 Years old - 3 Years old
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
                    <a href="/contact" class="default-btn">Subscribe</a>
                </div>
            </div>
        </div>
    </section>
@endsection
