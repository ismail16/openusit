@extends('frontend.layouts.master')
@section('title','Welcome to Pi-CodeiT')

@section('content')
<a href="#" class="back2"> <i class="fas fa-chevron-up"></i> </a>
<section id="banner">
    <div class="row banner-slider mx-0">
        <div class="col-lg-12 px-0">
            <div class="banner-item">
                <img src="{{ asset('images/slider/1.jpg') }}" alt=" banner 2" class="img-fluid w-100">
            </div>
        </div>
       <div class="col-lg-12 px-0">
            <div class="banner-item">
                <img src="{{ asset('images/slider/2.jpg') }}" alt=" banner 2" class="img-fluid w-100">
            </div>
        </div>                
    </div>
</section>


<section id="achivement">
    <div class="container">
        <div class="row abc">
            <div class="col-lg-3 col-sm-6 col-md-6 px-0">
                <a href="our-achievement">
                    <div class="achive-item text-center xtra2">
                        <img src="https://creativeitinstitute.com/front/images/achivement1_1.png" alt="achivement" class="img-fluid">
                        <p><span class="counter">2</span> Years of Glory</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 px-0">
                <a href="freelancing-success">
                    <div class="achive-item text-center">
                        <img src="https://creativeitinstitute.com/front/images/achivement2.png" alt="achivement" class="img-fluid">
                        <p><span class="counter">230</span>+ Trained Students</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 px-0">
                <a href="job-placement">
                    <div class="achive-item text-center">
                        <img src="https://creativeitinstitute.com/front/images/achivement3.png" alt="achivement" class="img-fluid">
                        <p><span class="counter">220</span>+ Job Placements</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 px-0">
                <a href="faculties">
                    <div class="achive-item br-0 text-center xtra3">
                        <img src="https://creativeitinstitute.com/front/images/achivement4.png" alt="achivement" class="img-fluid">
                        <p><span class="counter">10</span>+ Expert Trainers</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-2">
                <div class="welcome-head text-center">
                    <h1>Welcome to <span style="color: #ee2e24">Openus IT Institute</span>: Where IT Leaders are Created</h1>
                </div>
                <div class="welcome-details">
                    <p>
                        Openus IT Institute, one of the leading IT training institutes in Bangladesh offers the best training opportunities.
                         It has been playing a vital role to eradicate the unemployment problem since 2009. 
                         Enriched with quality training this institute has never failed to help the individuals to reveal their talents 
                         making harmony between creativity and IT. No matter what is your background, we are offering 30 courses for you 
                         conducted by experienced trainers to advance your skills.
                    </p>
                    <p>
                        CIT has tremendously well-decorated two campuses with upgraded equipment. Our students are very much happy 
                        with our culture, environment and outstanding training method. We are passionate about providing good service to
                         our students. Thus, the students of this institute turn out to be successful marketers and establish their 
                         careers in various companies as well. We dedicatedly provide flexible training options such as online training,
                          24/7 support, lifetime post-training support, job placement and so on. We always maintain the standards
                           of excellence which are visible on <a href="" target="_blank">Facebook Reviews</a> and
                        <a href="" target="_blank">Google Reviews</a>.
                    </div>
                </p>
            </div>
        </div>
    </div>
</section>


<section id="course" class="d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-head text-center">
                        <h2>Our Courses</h2>
                        <p>Explore the weapons of Latest Information Technology!</p>
                    </div>
                </div>
            </div>
            <div class="row tabs">
                <div class="col-lg-4 col-sm-12 col-md-8 m-md-auto px-0">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="">
                            <a href="#tab_1" data-toggle="pill">
                                <span class="flaticon-design"></span>
                                <p>Graphic Design</p>
                            </a>
                        </li>
                        <li class="brlrb">
                            <a href="#tab_2" data-toggle="pill">
                                <span class="flaticon-web-design"></span>
                                <p>Web Design</p>
                            </a>
                        </li>
                        <li class="">
                            <a href="#tab_3" data-toggle="pill" class="">
                                <span class="flaticon-web-development"></span>
                                <p>Web Development</p>
                            </a>
                        </li>
                        <li class="btbb">
                            <a href="#tab_4" data-toggle="pill">
                                <span class="flaticon-chart"></span>
                                <p>Digital Marketing</p>
                            </a>
                        </li>
                        <li class="brlrb">
                            <a href="#tab_5" data-toggle="pill" class="">
                                <span class="flaticon-house-plans"></span>
                                <p>Interior Design</p>
                            </a>
                        </li>
                        <li class="bt">
                            <a href="#tab_6" data-toggle="pill" class="">
                                <span class="flaticon-group"></span>
                                <p>Networking</p>
                            </a>
                        </li>
                        <li>
                            <a href="#tab_7" data-toggle="pill">
                                <span class="flaticon-mobile-app-developing"></span>
                                <p>App Development</p>
                            </a>
                        </li>
                        <li class="bl-0 br-0 active">
                            <a href="#tab_8" data-toggle="pill" class="active show">
                                <span class="flaticon-web-design-1"></span>
                                <p>UI/UX Design</p>
                            </a>
                        </li>
                        <li class="bt">
                            <a href="#tab_9" data-toggle="pill" class="">
                                <span class="flaticon-modeling"></span>
                                <p>3D Animation</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-8 m-auto px-sm-0">
                    <div class="tab-content">
                        <div class="tab-pane" id="tab_1">
                            <div class="row">
                                <div class="col-lg-7 col-sm-7 pr-0">
                                    <div class="gd-left">
                                        <h3>Professional Graphic Design</h3>
                                        <p>The main purpose here is to make you able to use graphic design tools and techniques in a professional way. Graphic Design helps to build brand identity of a company. Thus it needs to be conceptual an...</p>
                                        <a href="https://creativeitinstitute.com/professional-graphic-design-training-in-bangladesh"><span class="highlight-icon">» </span>Read More</a>
                                    </div>
                                    <div class="seat">
                                        <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On </p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <div class="gd-right">
                                        <img src="https://creativeitinstitute.com/front/images/courses_qube/graphic.webp" alt="gd1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_2">
                            <div class="row">
                                <div class="col-lg-7 col-sm-7 pr-0">
                                    <div class="gd-left">
                                        <h3>Responsive Web Design</h3>
                                        <p>Web design means creating websites with user-friendly structure and with aesthetic approach. A web designer always thinks about the layout, color scheme and unique design of a website. But their task...</p>
                                        <a href="https://creativeitinstitute.com/responsive-web-design-training-in-bangladesh"><span class="highlight-icon">» </span>Read More</a>
                                    </div>
                                    <div class="seat">
                                        <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <div class="gd-right">
                                        <img src="https://creativeitinstitute.com/front/images/courses_qube/web.webp" alt="gd1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_3">
                            <div class="row">
                                <div class="col-lg-7 col-sm-7 pr-0">
                                    <div class="gd-left">
                                        <h3>Web Development</h3>
                                        <p>Web Development consists of two segments front end development and backend development. Front-end Developers work with visual designs of a website and build the sites with using of code. The front end...</p>
                                        <a href="https://creativeitinstitute.com/professional-web-development-training-in-bangladesh"><span class="highlight-icon">» </span>Read More</a>
                                    </div>
                                    <div class="seat">
                                        <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <div class="gd-right">
                                        <img src="https://creativeitinstitute.com/front/images/courses_qube/development.webp" alt="gd1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_4">
                            <div class="row">
                                <div class="col-lg-7 col-sm-7 pr-0">
                                    <div class="gd-left">
                                        <h3>Digital Marketing</h3>
                                        <p>Digital Marketing is taking over the traditional marketing rapidly. More and more people are engaging with online information and getting habituated with online shopping. It is the platform for all. I...</p>
                                        <a href="https://creativeitinstitute.com/digital-marketing-training-in-bangladesh"><span class="highlight-icon">» </span>Read More</a>
                                    </div>
                                    <div class="seat">
                                        <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <div class="gd-right">
                                        <img src="https://creativeitinstitute.com/front/images/courses_qube/digital.webp" alt="gd1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_5">
                            <div class="row">
                                <div class="col-lg-7 col-sm-7 pr-0">
                                    <div class="gd-left">
                                        <h3>Interior Design</h3>
                                        <p>The aesthetic sense of general people has reached an even more refined state. People who are buying a house or apartment these days want to design both the interior and exterior of their houses so tha...</p>
                                        <a href="https://creativeitinstitute.com/professional-interior-and-exterior-design-training-in-bangladesh"><span class="highlight-icon">» </span>Read More</a>
                                    </div>
                                    <div class="seat">
                                        <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <div class="gd-right">
                                        <img src="https://creativeitinstitute.com/front/images/courses_qube/interior.png" alt="gd1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_6">
                            <div class="row">
                                <div class="col-lg-7 col-sm-7 pr-0">
                                    <div class="gd-left">
                                        <h3>CCNA</h3>
                                        <p>The Cisco CCNA network associate certification validates the ability to install, configure, operate, and troubleshoot medium-size routed and switched networks, including implementation and verificatio...</p>
                                        <a href="https://creativeitinstitute.com/ccna-training-in-bangladesh"><span class="highlight-icon">» </span>Read More</a>
                                    </div>
                                    <div class="seat">
                                        <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <div class="gd-right">
                                        <img src="https://creativeitinstitute.com/front/images/courses_qube/ccna.webp" alt="gd1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_7">
                            <div class="row">
                                <div class="col-lg-7 col sm-7 pr-0">
                                    <div class="gd-left">
                                        <h3>App Development</h3>
                                        <p>With the world going mobile, the importance of apps is increasing by the day. App development hence refers to the creation of applications to be used on mobile devices. Today when we buy a smartphone...</p>
                                        <a href="https://creativeitinstitute.com/android-app-development-training-in-bangladesh"><span class="highlight-icon">» </span>Read More</a>
                                    </div>
                                    <div class="seat">
                                        <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <div class="gd-right">
                                        <img src="https://creativeitinstitute.com/front/images/courses_qube/app.webp" alt="gd1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active show" id="tab_8">
                            <div class="row">
                                <div class="col-lg-7 col-sm-7 pr-0">
                                    <div class="gd-left">
                                        <h3>UI/UX Design</h3>
                                        <p>This course UX &amp; UI Design is designed for those people, who wants to design anything to keep users on first priority and working on to make them happy. In our course, we will guide you for complete w...</p>
                                        <a href="https://creativeitinstitute.com/ui-ux-design-training-in-bangladesh"><span class="highlight-icon">» </span>Read More</a>
                                    </div>
                                    <div class="seat">
                                        <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <div class="gd-right">
                                        <img src="https://creativeitinstitute.com/front/images/courses_qube/uxui.webp" alt="gd1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_9">
                            <div class="row">
                                <div class="col-lg-7 col-sm-7 pr-0">
                                    <div class="gd-left">
                                        <h3>3D Animation</h3>
                                        <p>Modeling is generating 3D objects in a certain scene. The next phase is done by positioning and animating. And the last phase, rendering, is the output of the completed result. The techniques used in...</p>
                                        <a href="https://creativeitinstitute.com/3d-animation-training-in-bangladesh"><span class="highlight-icon">» </span>Read More</a>
                                    </div>
                                    <div class="seat">
                                        <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <div class="gd-right">
                                        <img src="https://creativeitinstitute.com/front/images/gd-1.png" alt="gd1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="course-button text-center">
                        <a href="https://creativeitinstitute.com/all-course">other courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section id="counseling" class="_d-none d-lg-block d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="counseling-form" id="counseling-form">
                    <h3>Career Counselling</h3>
                    <form action="counselling" method="post">
                        <input type="hidden" name="_token" value="IDJQvjjODkFIIHsZYf0GpdZD0iZHJSSMh1RY4BGQ">                            <input type="text" placeholder="Your Name" name="name" value="" class="form-control  ">
                        <input type="number" placeholder="Phone Number" name="phone" value="" class="form-control  ">
                        <input type="email" placeholder="Email Address" name="email" value="" class="form-control  ">


                        <button type="submit" class="btn form-control">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="counseling-img text-right">
                    <img src="https://creativeitinstitute.com/front/images/counselling.png" alt="counselling" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section id="course" class="d-lg-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-head text-center">
                    <h2>Our Courses</h2>
                    <p>Explore the weapons of Latest Information Technology!</p>
                </div>
            </div>
        </div>
        <div class="row tabs">
            <div class="col-lg-4 col-sm-12 col-md-8 m-md-auto px-0">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a class="click" href="#tab_11" data-toggle="pill">
                            <span class="flaticon-design"></span>
                            <p>Graphic Design</p>
                        </a>
                    </li>
                    <li class="brlrb">
                        <a class="click" href="#tab_12" data-toggle="pill">
                            <span class="flaticon-web-design"></span>
                            <p>Web Design</p>
                        </a>
                    </li>
                    <li>
                        <a class="click" href="#tab_13" data-toggle="pill">
                            <span class="flaticon-web-development"></span>
                            <p>Web Development</p>
                        </a>
                    </li>
                    <li class="btbb">
                        <a class="click" href="#tab_14" data-toggle="pill">
                            <span class="flaticon-chart"></span>
                            <p>Digital Marketing</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="myDiv" class="col-lg-8 col-sm-12 col-md-8 m-auto px-sm-0">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_11">
                        <div class="row">
                            <div class="col-lg-7 col-sm-7 pr-0">
                                <div class="gd-left">
                                    <h3>Professional Graphic Design</h3>
                                    <p>The main purpose here is to make you able to use graphic design tools and techniques in a professional way. Graphic Design helps to build brand identity of a company. Thus it needs to be conceptual an...</p>
                                    <a href="professional-graphic-design-training-in-bangladesh"><span class="highlight-icon">&#187; </span>Read More</a>
                                </div>
                                <div class="seat">
                                    <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-5">
                                <div class="gd-right">
                                    <img src="https://creativeitinstitute.com/front/images/courses_qube/graphic.jpg" alt="gd1" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_12">
                        <div class="row">
                            <div class="col-lg-7 col-sm-7 pr-0">
                                <div class="gd-left">
                                    <h3>Responsive Web Design</h3>
                                    <p>Web design means creating websites with user-friendly structure and with aesthetic approach. A web designer always thinks about the layout, color scheme and unique design of a website. But their task...</p>
                                    <a href="responsive-web-design-training-in-bangladesh"><span class="highlight-icon">&#187; </span>Read More</a>
                                </div>
                                <div class="seat">
                                    <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-5">
                                <div class="gd-right">
                                    <img src="https://creativeitinstitute.com/front/images/courses_qube/web.jpg" alt="gd1" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_13">
                        <div class="row">
                            <div class="col-lg-7 col-sm-7 pr-0">
                                <div class="gd-left">
                                    <h3>Web Development</h3>
                                    <p>Web Development consists of two segments front end development and backend development. Front-end Developers work with visual designs of a website and build the sites with using of code. The front end...</p>
                                    <a href="professional-web-development-training-in-bangladesh"><span class="highlight-icon">&#187; </span>Read More</a>
                                </div>
                                <div class="seat">
                                    <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-5">
                                <div class="gd-right">
                                    <img src="https://creativeitinstitute.com/front/images/courses_qube/development.jpg" alt="gd1" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_14">
                        <div class="row">
                            <div class="col-lg-7 col-sm-7 pr-0">
                                <div class="gd-left">
                                    <h3>Digital Marketing</h3>
                                    <p>Digital Marketing is taking over the traditional marketing rapidly. More and more people are engaging with online information and getting habituated with online shopping. It is the platform for all. I...</p>
                                    <a href="digital-marketing-training-in-bangladesh"><span class="highlight-icon">&#187; </span>Read More</a>
                                </div>
                                <div class="seat">
                                    <p> <img src="https://creativeitinstitute.com/front/images/seat.png"> <span></span>Admission Going On</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-5">
                                <div class="gd-right">
                                    <img src="https://creativeitinstitute.com/front/images/courses_qube/digital.jpg" alt="gd1" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-button text-center">
                    <a href="all-course">other courses</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="counseling" class="d-lg-none d-md-none mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="counseling-form" id="counseling-form">
                    <h3>Career Counselling</h3>
                    <form action="/counselling" method="post">
                        <input type="hidden" name="_token" value="IDJQvjjODkFIIHsZYf0GpdZD0iZHJSSMh1RY4BGQ">                            <input type="text" placeholder="Your Name" name="name" value="" class="form-control  ">
                        <input type="number" placeholder="Phone Number" name="phone" value="" class="form-control  ">
                        <input type="email" placeholder="Email Address" name="email" value="" class="form-control  ">
                        <button type="submit" class="btn form-control">submit</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="counseling-img text-right">
                    <img src="https://creativeitinstitute.com/front/images/counselling.png" alt="counselling" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="upcoming-seminar" class="pb-0+">
    <div class="container seminar-form-main">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-head seminarform-head text-center">
                    <h2>Upcoming Seminars/Workshops</h2>
                    <p>Explore the weapons of Latest Information Technology!</p>
                </div>
            </div>
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#seminar-collaps" aria-expanded="true" aria-controls="seminar-collaps1">
                                        Click Here to know our upcoming Seminars
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>

                                <div id="seminar-collaps" class="collapse" aria-labelledby="seminar-collaps1" data-parent="#accordionExample">
                                    <div class="card-body spn_block">
                                        <div class="row">
                                            <div class="col-lg-12 seminar-table">
                                                <table class="table table-striped mt-3 table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th bgcolor="#4e5e73" scope="col">Topic</th>
                                                            <th bgcolor="#4e5e73" scope="col">Date</th>
                                                            <th bgcolor="#4e5e73" scope="col">Time</th>
                                                            <th bgcolor="#4e5e73" scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>3D Animation</td>
                                                            <td>05-Sep-2020, Saturday</td>
                                                            <td>08:00 PM</td>
                                                            <td>
                                                                <button type="button" class="btn" onclick="window.location.href='seminar#register_for_free_seminar'">Join</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Professional Graphic Design</td>
                                                            <td>05-Sep-2020, Saturday</td>
                                                            <td>08:00 PM</td>
                                                            <td>
                                                                <button type="button" class="btn" onclick="window.location.href='seminar#register_for_free_seminar'">Join</button>
                                                            </td>
                                                        </tr>
                                                        
                                                       
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingOne1">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#workshop-collaps" aria-expanded="true" aria-controls="workshop-collaps1">
                                        Click Here to know our upcoming Workshops
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>

                                <div id="workshop-collaps" class="collapse" aria-labelledby="workshop-collaps1" data-parent="#accordionExample1">
                                    <div class="card-body spn_block">
                                        <div class="row">
                                            <div class="col-lg-12 seminar-table">
                                                <table class="table table-striped mt-3 table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th bgcolor="#4e5e73" scope="col">Topic</th>
                                                            <th bgcolor="#4e5e73" scope="col">Date</th>
                                                            <th bgcolor="#4e5e73" scope="col">Time</th>
                                                            <th bgcolor="#4e5e73" scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Professional Graphic Design</td>
                                                            <td>12-Sep-2020, Saturday</td>
                                                            <td>08:00 PM</td>
                                                            <td>
                                                                <button type="button" class="btn" onclick="window.location.href='seminar#register_for_free_seminar'">Join</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="facilities">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-head text-center">
                    <h2>Our Facilities</h2>
                    <p>Explore the weapons of Latest Information Technology!</p>
                </div>
            </div>
        </div>
        <div class="row faci-main pl-2">
            <div class="col-lg-4 col-sm-6">
                <div class="facilities-item">
                    <img src="https://creativeitinstitute.com/front/images/24x7.png" alt="24x7" class="img-fluid">
                    <h3>24/7 Online Support</h3>
                    <p>
                        24/7 Online Support- We always listen to our students. Any time they are in a problem, our team is always online for providing support to them. Even at night, we are online for your projects ongoing.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="facilities-item">
                    <img src="https://creativeitinstitute.com/front/images/faci1.png" alt="faci1" class="img-fluid">
                    <h3>Lifetime Support</h3>
                    <p>
                        All CITI students get supports for life. For any live project get our experts&#39; guideline and maintain it in international standard.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="facilities-item">
                    <img src="https://creativeitinstitute.com/front/images/faci2.png" alt="faci1" class="img-fluid">
                    <h3>Practise Lab Support</h3>
                    <p>
                        We offer lab practise facilities for weak students where they can practice the task and be able to hold the attention by solving what is not understood by them.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="facilities-item">
                    <img src="https://creativeitinstitute.com/front/images/faci3.png" alt="faci1" class="img-fluid">
                    <h3>Class Video</h3>
                    <p>Get the recorded lectures and class practical as video. It will create a good storage of materials for future. And you can practice at home with the help of these materials.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="facilities-item">
                    <img src="https://creativeitinstitute.com/front/images/faci4.png" alt="faci1" class="img-fluid">
                    <h3>Review Class</h3>
                    <p>Ensure 100% learning of tools, techniques, designs by our review classes for each batch. Better understand the difficult terms by revising every topic.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="facilities-item">
                    <img src="https://creativeitinstitute.com/front/images/faci5.png" alt="faci1" class="img-fluid">
                    <h3>Job Placement</h3>
                    <p>Acquire exclusive opportunities to work in international marketplaces as an expert freelancer. CITI creates opportunities by adding value to your career.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="other-achive">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="other-achive-item">
                    <img src="https://creativeitinstitute.com/front/images/iso.jpg" alt="iso" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="other-achive-item">
                    <img src="https://creativeitinstitute.com/front/images/mou.jpg" alt="mou" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="leader">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-head text-center">
                    <h2>Creating Future Leader</h2>
                    <p>We are the makers of Future Leaders!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-sm-12 m-auto">
                <div class="leader-slider">
                    <div class="leader-slider-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-sm-6 m-sm-auto">
                                <div class="leader-img">
                                    <img src="{{ asset('images/default.jpg')}} " alt="Monir Hosen I CEO, Openus IT Institute" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-12">
                                <div class="leader-speach">
                                    <p>As one of the leading IT solution providers of Bangladesh, we are working with the vision of making the nation proficient in the Global IT village by building a platform which serves business owners as well as freelancers with comprehensive training for IT skills and professional enterprise solutions.
                                    </p>
                                    <h4>Mr. Rashidul Karim I <span>CEO, Openus IT Institute</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leader-slider-item">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-md-5 m-sm-auto">
                                <div class="leader-img">
                                    <img src="{{ asset('images/default.jpg')}} " alt="Shompa Parvin I ED, Openus IT Institute" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12 col-md-7">
                                <div class="leader-speach">
                                    <p>
                                        Openus IT Institute is now one of the leading training company in Bangladesh. Where we develop a progressive, empower and consumer focused corporate culture to growing market leadership along with the passion of corporate social responsibility to extend our leadership through performance.
                                    </p>
                                    <h4>Resvia Khan I <span>ED, Openus IT Institute</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrows2">
                    <i class="fas fa-long-arrow-alt-left left2"></i>
                    <i class="fas fa-long-arrow-alt-right right2"></i>
                </div>
                <div class="left-leader-img">
                    <img src="https://creativeitinstitute.com/front/images/leader-left.png" alt="leader-left">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="all-members">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="contact-tabs">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-work-tab" data-toggle="tab" href="#nav-work" role="tab" aria-controls="nav-home" aria-selected="true">We are working with</a>
                        <a class="nav-item nav-link" id="nav-member-tab" data-toggle="tab" href="#nav-member" role="tab" aria-controls="nav-profile" aria-selected="false">We are member of</a>
                        <a class="nav-item nav-link" id="nav-con-tab" data-toggle="tab" href="#nav-con" role="tab" aria-controls="nav-contact" aria-selected="false">Our concerns</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="partners">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row partner-slider">
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/partner3.png" alt="Republic of Bangladesh Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/partner4.png" alt="Bangladesh Technical Education Board Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/partner5.png" alt="Stamford University Bangladesh Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/partner6.png" alt="Bangladesh National Parliament Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/partner7.png" alt="Graphic Arts Institute Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/partner8.png" alt="ICT Division Logo" class="img-fluid">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-member" role="tabpanel" aria-labelledby="nav-member-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="partners">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row partner-slider">
                                                <div class="col-lg-3 col-6 col-sm-6 col-md-4">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/member1.png" alt="BASIS Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 col-sm-6 col-md-4">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/member2.png" alt="BACCO" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 col-sm-6 col-md-4">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/member3.png" alt="e-Cab Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 col-sm-6 col-md-4">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/member4.png" alt="Bangladesh Computer Samity Logo" class="img-fluid">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-con" role="tabpanel" aria-labelledby="nav-con-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="partners">
                                    <div class="row concern-slide">
                                        <div class="col-lg-12">
                                            <div class="row partner-slider">
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/concern1.png" alt="Openus IT Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/concern3.png" alt="Creative E School Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/concern4.png" alt="Priyo Lekha Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/concern5.png" alt="Occasiya Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-6 col-sm-4 col-md-3">
                                                    <div class="slider-item text-center">
                                                        <img src="https://creativeitinstitute.com/front/images/concern6.png" alt="Robo71 Logo" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
