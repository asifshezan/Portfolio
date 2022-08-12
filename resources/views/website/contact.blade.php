@extends('layouts.website')
@section('content')
	<!-- Main Content -->

    <div class="main_content">
        <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
            <div class="main_subtitle">What clients say</div>
            <div class="main_title">Contact me</div>
        </div>
        <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

            <!-- Contact -->

            <div class="contact">
                <div class="container-fluid">
                    <div class="row">

                        <!-- Contact Form -->
                        <div class="col-xl-6">
                            <div class="contact_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien.</p>
                            </div>
                            <div class="contact_form_container">
                                <form action="#" id="contact_form" class="contact_form clearfix">
                                    <div><input type="text" class="contact_input" placeholder="Name" required="required"></div>
                                    <div><input type="email" class="contact_input" placeholder="E-mail" required="required"></div>
                                    <input type="text" class="contact_input" placeholder="Subject" required="required">
                                    <textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
                                    <button class="contact_button">Send Message</button>
                                </form>
                            </div>
                        </div>

                        <!-- Contact Map -->
                        <div class="col-xl-6">
                            <div>
                                <!-- Google Map -->
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.9972758009403!2d90.42172901538514!3d23.783111343441952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79705d8041d%3A0xe1bf95ab3b06a96f!2sUttar%20Badda%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1660319513454!5m2!1sen!2sbd" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
