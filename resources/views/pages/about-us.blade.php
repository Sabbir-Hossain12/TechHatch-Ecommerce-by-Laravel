@extends('layout.app')


@section('content')
    {{--breadcrumb--}}
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>About Us</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>

{{--main content--}}
    <div class="main_content">

        <!-- STAT SECTION ABOUT -->
        <div class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about_img scene mb-4 mb-lg-0">
                            <img src="assets/images/about_img.jpg" alt="about_img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="heading_s1">
                            <h2>Who We are</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. consequuntur quibusdam enim expedita
                            sed nesciunt incidunt accusamus adipisci officia libero laboriosam!</p>
                        <p>Proin gravida nibh vel velit auctor aliquet. nec sagittis sem nibh id elit. Duis sed odio sit
                            amet nibh vultate cursus a sit amet mauris. Duis sed odio sit amet nibh vultate cursus a sit
                            amet mauris.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION ABOUT -->

        <!-- START SECTION WHY CHOOSE -->
        <div class="section bg_light_blue2 pb_70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="heading_s1 text-center">
                            <h2>Why Choose Us?</h2>
                        </div>
                        <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon_box icon_box_style4 box_shadow1">
                            <div class="icon">
                                <i class="ti-pencil-alt"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Creative Design</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon_box icon_box_style4 box_shadow1">
                            <div class="icon">
                                <i class="ti-layers"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Flexible Layouts</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon_box icon_box_style4 box_shadow1">
                            <div class="icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Email Marketing</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION WHY CHOOSE -->

        <!-- START SECTION TEAM -->
        <div class="section pb_70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="heading_s1 text-center">
                            <h2>Our Team Members</h2>
                        </div>
                        <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team_box team_style1">
                            <div class="team_img">
                                <img src="assets/images/team_img1.jpg" alt="team_img1">
                                <ul class="social_icons social_style1">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_content">
                                <div class="team_title">
                                    <h5>John Muniz</h5>
                                    <span>Project Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team_box team_style1">
                            <div class="team_img">
                                <img src="assets/images/team_img2.jpg" alt="team_img2">
                                <ul class="social_icons social_style4">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_content">
                                <div class="team_title">
                                    <h5>Alea Brooks</h5>
                                    <span>Graphics Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team_box team_style1">
                            <div class="team_img">
                                <img src="assets/images/team_img3.jpg" alt="team_img3">
                                <ul class="social_icons social_style4">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_content">
                                <div class="team_title">
                                    <h5>Anders Glick</h5>
                                    <span>Software Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team_box team_style1">
                            <div class="team_img">
                                <img src="assets/images/team_img4.jpg" alt="team_img4">
                                <ul class="social_icons social_style4">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_content">
                                <div class="team_title">
                                    <h5>Richard Tice</h5>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION TEAM -->

        <!-- START SECTION TESTIMONIAL -->
        <div class="section bg_redon">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Our Client Say!</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div
                            class="testimonial_wrap testimonial_style1 carousel_slider owl-carousel owl-theme nav_style2 owl-loaded owl-drag"
                            data-nav="true" data-dots="false" data-center="true" data-loop="true" data-autoplay="true"
                            data-items="1">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transition: all 0.25s ease 0s; width: 5688px; transform: translate3d(-1422px, 0px, 0px);">
                                    <div class="owl-item cloned" style="width: 711px;">
                                        <div class="testimonial_box">
                                            <div class="testimonial_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam
                                                    amet animi blanditiis consequatur debitis dicta distinctio, enim
                                                    error eum iste libero modi nam natus perferendis possimus quasi sint
                                                    sit tempora voluptatem.</p>
                                            </div>
                                            <div class="author_wrap">
                                                <div class="author_img">
                                                    <img src="assets/images/user_img3.jpg" alt="user_img3">
                                                </div>
                                                <div class="author_name">
                                                    <h6>Daisy Lana</h6>
                                                    <span>Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 711px;">
                                        <div class="testimonial_box">
                                            <div class="testimonial_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam
                                                    amet animi blanditiis consequatur debitis dicta distinctio, enim
                                                    error eum iste libero modi nam natus perferendis possimus quasi sint
                                                    sit tempora voluptatem.</p>
                                            </div>
                                            <div class="author_wrap">
                                                <div class="author_img">
                                                    <img src="assets/images/user_img4.jpg" alt="user_img4">
                                                </div>
                                                <div class="author_name">
                                                    <h6>John Becker</h6>
                                                    <span>Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active center" style="width: 711px;">
                                        <div class="testimonial_box">
                                            <div class="testimonial_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam
                                                    amet animi blanditiis consequatur debitis dicta distinctio, enim
                                                    error eum iste libero modi nam natus perferendis possimus quasi sint
                                                    sit tempora voluptatem.</p>
                                            </div>
                                            <div class="author_wrap">
                                                <div class="author_img">
                                                    <img src="assets/images/user_img1.jpg" alt="user_img1">
                                                </div>
                                                <div class="author_name">
                                                    <h6>Lissa Castro</h6>
                                                    <span>Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 711px;">
                                        <div class="testimonial_box">
                                            <div class="testimonial_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam
                                                    amet animi blanditiis consequatur debitis dicta distinctio, enim
                                                    error eum iste libero modi nam natus perferendis possimus quasi sint
                                                    sit tempora voluptatem.</p>
                                            </div>
                                            <div class="author_wrap">
                                                <div class="author_img">
                                                    <img src="assets/images/user_img2.jpg" alt="user_img2">
                                                </div>
                                                <div class="author_name">
                                                    <h6>Alden Smith</h6>
                                                    <span>Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 711px;">
                                        <div class="testimonial_box">
                                            <div class="testimonial_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam
                                                    amet animi blanditiis consequatur debitis dicta distinctio, enim
                                                    error eum iste libero modi nam natus perferendis possimus quasi sint
                                                    sit tempora voluptatem.</p>
                                            </div>
                                            <div class="author_wrap">
                                                <div class="author_img">
                                                    <img src="assets/images/user_img3.jpg" alt="user_img3">
                                                </div>
                                                <div class="author_name">
                                                    <h6>Daisy Lana</h6>
                                                    <span>Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 711px;">
                                        <div class="testimonial_box">
                                            <div class="testimonial_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam
                                                    amet animi blanditiis consequatur debitis dicta distinctio, enim
                                                    error eum iste libero modi nam natus perferendis possimus quasi sint
                                                    sit tempora voluptatem.</p>
                                            </div>
                                            <div class="author_wrap">
                                                <div class="author_img">
                                                    <img src="assets/images/user_img4.jpg" alt="user_img4">
                                                </div>
                                                <div class="author_name">
                                                    <h6>John Becker</h6>
                                                    <span>Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 711px;">
                                        <div class="testimonial_box">
                                            <div class="testimonial_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam
                                                    amet animi blanditiis consequatur debitis dicta distinctio, enim
                                                    error eum iste libero modi nam natus perferendis possimus quasi sint
                                                    sit tempora voluptatem.</p>
                                            </div>
                                            <div class="author_wrap">
                                                <div class="author_img">
                                                    <img src="assets/images/user_img1.jpg" alt="user_img1">
                                                </div>
                                                <div class="author_name">
                                                    <h6>Lissa Castro</h6>
                                                    <span>Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 711px;">
                                        <div class="testimonial_box">
                                            <div class="testimonial_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam
                                                    amet animi blanditiis consequatur debitis dicta distinctio, enim
                                                    error eum iste libero modi nam natus perferendis possimus quasi sint
                                                    sit tempora voluptatem.</p>
                                            </div>
                                            <div class="author_wrap">
                                                <div class="author_img">
                                                    <img src="assets/images/user_img2.jpg" alt="user_img2">
                                                </div>
                                                <div class="author_name">
                                                    <h6>Alden Smith</h6>
                                                    <span>Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"><i
                                        class="ion-ios-arrow-left"></i></button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="ion-ios-arrow-right"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION TESTIMONIAL -->

        <!-- START SECTION SHOP INFO -->
        <div class="section pb_70">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <i class="flaticon-shipped"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Free Delivery</h5>
                                <p>If you are going to use of Lorem, you need to be sure there anything</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <i class="flaticon-money-back"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>30 Day Return</h5>
                                <p>If you are going to use of Lorem, you need to be sure there anything</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">
                            <div class="icon">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>27/4 Support</h5>
                                <p>If you are going to use of Lorem, you need to be sure there anything</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP INFO -->



    </div>



    @include('components.include.footer')

    <script>
        (async () => {

            await category()


            $(".preloader").delay(50).fadeOut(60).addClass('loaded');


        })()

    </script>
@endsection
