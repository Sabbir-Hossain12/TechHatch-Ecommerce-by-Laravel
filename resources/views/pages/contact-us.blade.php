@extends('layout.app')

@section('content')
    {{--breadcrumb--}}
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Contact</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>

    {{--Main Content--}}
    <div class="main_content">

        <!-- START SECTION CONTACT -->
        <div class="section pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="contact_wrap contact_style3">
                            <div class="contact_icon">
                                <i class="linearicons-map2"></i>
                            </div>
                            <div class="contact_text">
                                <span>Address</span>
                                <p>123 Street, Old Trafford, London, UK</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="contact_wrap contact_style3">
                            <div class="contact_icon">
                                <i class="linearicons-envelope-open"></i>
                            </div>
                            <div class="contact_text">
                                <span>Email Address</span>
                                <a href="mailto:info@sitename.com">info@yourmail.com </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="contact_wrap contact_style3">
                            <div class="contact_icon">
                                <i class="linearicons-tablet2"></i>
                            </div>
                            <div class="contact_text">
                                <span>Phone</span>
                                <p>+ 457 789 789 65</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CONTACT -->

        <!-- START SECTION CONTACT -->
        <div class="section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading_s1">
                            <h2>Get In touch</h2>
                        </div>
                        <p class="leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                            massa enim. Nullam id varius nunc id varius nunc.</p>
                        <div class="field_form">
                            <form method="post" name="enq">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <input required="" placeholder="Enter Name *" id="first-name"
                                               class="form-control" name="name" type="text">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input required="" placeholder="Enter Email *" id="email" class="form-control"
                                               name="email" type="email">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input required="" placeholder="Enter Phone No. *" id="phone"
                                               class="form-control" name="phone">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input placeholder="Enter Subject" id="subject" class="form-control"
                                               name="subject">
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <textarea required="" placeholder="Message *" id="description"
                                                  class="form-control" name="message" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" title="Submit Your Message!" class="btn btn-fill-out"
                                                id="submitButton" name="submit" value="Submit">Send Message
                                        </button>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div id="alert-msg" class="alert-msg text-center"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58384.42413480361!2d90.40644247419584!3d23.85319242440499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c691ba478fbd%3A0xd1b3f71371eb15ec!2sHazrat%20Shahjalal%20International%20Airport!5e0!3m2!1sen!2sbd!4v1708189557914!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CONTACT -->


    </div>

    @include('components.include.footer')

    <script>
        (async () => {

            await category()


            $(".preloader").delay(50).fadeOut(60).addClass('loaded');


        })()

    </script>
@endsection
