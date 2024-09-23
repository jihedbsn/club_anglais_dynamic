@extends('layouts.app')

@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-pk4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Preschool 4 Program</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>PK4</li>
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
                            <img src="assets/img/pk/pk4main.png" alt="image">

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

                                                <p>In PK4, we clearly outline classroom routines and expectations, which
                                                    children at this age generally grasp quickly and follow as the year
                                                    progresses. From the start, we emphasize a sense of self-confidence and
                                                    responsibility by allowing students to care for their own well-being and
                                                    by giving them jobs and roles in the class. It's natural for them to
                                                    form close bonds with a few peers, and we support these special
                                                    relationships while encouraging inclusivity. Social conflicts are a
                                                    regular part of development, and we are always available to assist
                                                    children in navigating and resolving these issues by teaching them the
                                                    skills of negotiation and compromise. As friendships deepen and
                                                    cooperative play becomes more intricate, we emphasize group activities,
                                                    guide emotional regulation, and nurture empathy. Children increasingly
                                                    recognize how their actions affect others and demonstrate growing
                                                    empathy towards their peers.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>

                                                <p>In PK4, physical development is supported through gross motor activities
                                                    like running, racing, jumping, climbing, choreographed dances, and yoga.
                                                    Children learn about proximity, direction, and positional terms through
                                                    interactive activities like navigating through obstacle courses and
                                                    playing games that involve following directions such as "under," "over,"
                                                    "between,” and "beside." They can run smoothly, hop on one foot, and
                                                    shoot and catch balls with more coordination. Their fine motor skills
                                                    are refined through performing tasks such as making recognizable
                                                    drawings, writing letters, cutting along lines with scissors, and
                                                    building more complex structures with blocks and toys. They can also
                                                    engage in craft activities that require fine manipulation, such as
                                                    cutting, gluing, and assembling detailed models. They show increasing
                                                    ability to manage buttons, snaps, and zippers, allowing them to be more
                                                    independent in dressing themselves and using the facilities.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>

                                                <p>In PK4, we focus on developing literacy skills through engaging
                                                    activities. Students interact with books individually and in groups,
                                                    having the opportunity to lead read-aloud sessions further in the year.
                                                    They explore storytelling with picture books and personal experiences to
                                                    enhance comprehension and expression. We emphasize letter recognition,
                                                    sound blending, and early writing skills. By the end of the year,
                                                    students should identify, name, and write 11-20 capital and lowercase
                                                    letters in random order, produce sounds for each letter, and generate
                                                    words starting with specific letters. Activities include interactive
                                                    read-alouds, letter-sound matching, vocabulary games, and name writing,
                                                    all designed to support their literacy growth in a fun and supportive
                                                    environment.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="class-desc-content">
                                                <br>
                                                <p>In PK4, mathematical development encompasses number concepts, spatial
                                                    relationships, shapes, measurement, sequencing, and patterns. As the
                                                    year progresses, students practice counting beyond 20, recognizing and
                                                    naming teen numbers, and ordering a set of given numbers. They will
                                                    begin to solve simple addition and subtraction problems using
                                                    manipulatives like counters and number lines. They also engage in
                                                    interactive math games. Students will learn to create sets of objects
                                                    and describe their quantities as having more than, less than, or the
                                                    same as other object sets. They will practice interpreting and creating
                                                    simple graphs to represent and compare quantities of various animals,
                                                    objects, pictures, and shapes. Additionally, students will start to
                                                    compare measurements with greater accuracy, understanding concepts such
                                                    as taller, shorter, heavier, and lighter. They will continue to explore
                                                    2D and 3D shapes, learning about their properties as well as associating
                                                    shapes with objects around their environment. Pattern activities will
                                                    become more complex, with children creating and identifying intricate
                                                    patterns using various materials, which helps them understand and
                                                    predict sequences. Students will become more familiar with the concept
                                                    of time as they follow classroom schedules and daily routines, which
                                                    will help them understand sequencing and the passage of time.
                                                </p>
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
                                4 Years old - 5 Years old
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
                    <a href="/contact?contact_type=PK4" class="default-btn">Subscribe</a>
                </div>
            </div>
        </div>
    </section>
@endsection
