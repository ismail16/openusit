<!-- ========= Navbar Part Start Here ========== -->
<div class="navigation-wrap start-header start-style " id="navbar">
    <div class="container p-md-0">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand " href="/">
                <img src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                <ul class="navbar-nav _mr-auto">
                    <li class="nav-item   active
                    ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item mobile-mega-menu d-block d-md-none">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Admission
                                </button>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li><a href="admission-form">Admission Form</a></li>
                                        <li><a href="admission-procedure">Admission Procedure</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item mobile-mega-menu d-block d-md-none">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapse3">
                                Courses
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li><a class="" href="#">Basic Computer training</a></li>
                                        <li><a class="" href="#">Responsive Web Design</a></li>
                                        <li><a class="" href="#">Web Development</a></li>
                                        <li><a class="" href="#">Professional Graphic Design</a></li>
                                        <li><a class="" href="#">Digital Marketing</a></li>
                                        <li><a class="" href="#">SEO &amp; Affiliate</a></li>
                                        <li><a class="" href="#">Networking</a></li>
                                        <li><a class="" href="#">Spoken English</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item   mega_nav_item2 d-none d-md-block">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Courses</a>
                    <div class="megamenu2">
                        <div class="mega-border border-top-0">
                            <div class="mega-item">
                                <ul>
                                    <li><a class="" href="#">Basic Computer training</a></li>
                                    <li><a class="" href="#">Responsive Web Design</a></li>
                                    <li><a class="" href="#">Web Development</a></li>
                                    <li><a class="" href="#">Professional Graphic Design</a></li>
                                    <li><a class="" href="#">Digital Marketing</a></li>
                                    <li><a class="" href="#">SEO &amp; Affiliate</a></li>
                                    <li><a class="" href="#">Networking</a></li>
                                    <li><a class="" href="#">Spoken English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>


                <li class="nav-item   mega_nav_item2 d-none d-md-block">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admission</a>
                    <div class="megamenu2">
                        <div class="mega-border border-top-0">
                            <div class="mega-item">
                                <ul>
                                    <li><a class="" href="{{ route('student_apply') }}">Admission Form</a></li>
                                    <li><a class="" href="#">Admission Procedure</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item mobile-mega-menu d-block d-md-none">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingtwo">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse2">
                                    Student
                                </button>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li><a href="recent-success">Recent Success</a></li>
                                        <li><a href="freelancing-success">Student's Preview</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item   mega_nav_item2 d-none d-md-block">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Students</a>
                    <div class="megamenu2">
                        <div class="mega-border border-top-0">
                            <div class="mega-item">
                                <ul>
                                    <li><a class="" href="#">Recent Success</a></li>
                                    <li><a class="" href="#">Student's Preview</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

            <li class="nav-item ">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <a class="_nav-link btn btn-warning mr-2" href="{{ route('student_login') }}">Login</a>
                <a class="_nav-link btn btn-warning" href="{{ route('student_apply') }}">Apply</a>
            </li>        
        </ul>
    </div>
</nav>
</div>
</div>