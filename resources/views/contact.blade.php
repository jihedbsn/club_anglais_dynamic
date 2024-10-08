@extends('layouts.app')

@section('content')
    <div class="page-banner-area contact-page">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Contact</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <h3>Ready to Get Started?</h3>

                        <form id="contactForm" action="{{ url('inquiries') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" class="form-control"
                                            required data-error="Please enter your phone number"
                                            placeholder="Your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="program">Program</label>
                                        <select name="program" id="program" class="form-control" required
                                            data-error="Please select a program">
                                            <option value="">Select a program</option>
                                            <option value="PK1">PK1</option>
                                            <option value="PK2">PK2</option>
                                            <option value="PK3">PK3</option>
                                            <option value="PK4">PK4</option>
                                            <option value="Preschool club">Preschool club</option>
                                            <option value="Adventure club">Adventure club</option>
                                            <option value="Power camp">Power camp</option>
                                            <option value="Preschool camp">Preschool summer camp</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12" id="subject-group" style="display:none;">
                                    <div class="form-group">
                                        <input type="text" name="subjects" id="subjects" class="form-control"
                                            data-error="Please enter your subjects" placeholder="Subjects">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" required data-error="Please enter your message"
                                            class="form-control" placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="contact-information">
                        <h3>Here to Help</h3>

                        <ul class="contact-list">
                            <li><i class='bx bx-map'></i> Location: <span>3 Avenue Farhat Hached, La Marsa,Tunisia
                                    2070</span></li>
                            <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+01321654214">+216 20 909 757</a>
                            </li>
                            <li><i class='bx bx-envelope'></i> Email Us: <a
                                    href="mailto:clubanglais.marsa@gmail.com">clubanglais.marsa@gmail.com</a> </li>
                        </ul>

                        <h3>Opening Hours:</h3>
                        <ul class="opening-hours">
                            <li><span>Monday:</span> 8AM - 5PM</li>
                            <li><span>Tuesday:</span> 8AM - 5PM</li>
                            <li><span>Wednesday:</span> 8AM - 6:30PM</li>
                            <li><span>Thursday:</span> 8AM - 5PM</li>
                            <li><span>Friday:</span> 8AM - 5PM</li>
                            <li><span>Saturday:</span> 9AM - 5PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Map -->
    <div id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3189.189435384328!2d10.320849588356397!3d36.89057686899757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzYuODkwNTc2ODY5OTc1NywgMTAuMzIwODQ5NTg4MzU2Mzk3!5e0!3m2!1sen!2s!4v1688273413312!5m2!1sen!2s"></iframe>
    </div>
    <!-- End Map -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const programSelect = document.getElementById('program');
            const subjectGroup = document.getElementById('subject-group');
            const subjectsInput = document.getElementById('subjects');
            const urlParams = new URLSearchParams(window.location.search);
            const contactType = urlParams.get('contact_type');

            if (contactType) {
                programSelect.value = contactType;
                if (contactType === 'Other') {
                    subjectGroup.style.display = 'block';
                    subjectsInput.required = true;
                } else {
                    subjectGroup.style.display = 'none';
                    subjectsInput.required = false;
                }
            }

            programSelect.addEventListener('change', function() {
                if (this.value === 'Other') {
                    subjectGroup.style.display = 'block';
                    subjectsInput.required = true;
                } else {
                    subjectGroup.style.display = 'none';
                    subjectsInput.required = false;
                }
            });
        });
    </script>
@endsection
