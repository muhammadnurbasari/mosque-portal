<body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar d-none d-lg-block">
                <div class="topbar-inner">
                    <div class="row gx-0">
                        <div class="col-lg-7 text-start">
                            <div class="h-100 d-inline-flex align-items-center me-4">
                                <span class="fa fa-phone-alt me-2 text-dark"></span>
                                <a href="#" class="text-secondary"><span><?= $abouts->phone_number; ?></span></a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center">
                                <span class="far fa-envelope me-2 text-dark"></span>
                                <a href="#" class="text-secondary"><span><?= $abouts->email; ?></span></a>
                            </div>
                        </div>
                        <div class="col-lg-5 text-end">
                            <div class="h-100 d-inline-flex align-items-center">
                                <span class="text-body">Follow Us:</span>
                                <?php 
                                    if (!empty($abouts->twitter)) {
                                        echo '<a class="text-dark px-2" href="'.$abouts->twitter.'"><i class="fab fa-twitter"></i></a>';
                                    }

                                    if (!empty($abouts->facebook)) {
                                        echo '<a class="text-dark px-2" href="'.$abouts->facebook.'"><i class="fab fa-facebook-f"></i></a>';
                                    }

                                    if (!empty($abouts->linkedin)) {
                                        echo '<a class="text-dark px-2" href="'.$abouts->linkedin.'"><i class="fab fa-linkedin-in"></i></a>';
                                    }

                                    if (!empty($abouts->instagram)) {
                                        echo '<a class="text-dark px-2" href="'.$abouts->instagram.'"><i class="fab fa-instagram"></i></a>';
                                    }
                                ?>
                                
                                <!-- <a class="text-dark px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="text-dark px-2" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-3">
                    <a href="#" class="navbar-brand">
                        <h1 class="mb-0">Masjid<span class="text-primary"> Abdul Aziz</span> </h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav ms-lg-auto mx-xl-auto">
                            <a href="<?= base_url(); ?>" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <!-- <a href="activity.html" class="nav-item nav-link">Activities</a>
                            <a href="event.html" class="nav-item nav-link">Events</a>
                            <a href="sermon.html" class="nav-item nav-link">Sermons</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 rounded-0">
                                    <a href="blog.html" class="dropdown-item">Latest Blog</a>
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                        </div>
                        <!-- <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Donate</a> -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Hero Start -->
        <div class="container-fluid hero-header" style="background: url('<?= $abouts->image; ?>'), center center no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-header-inner animated zoomIn">
                            <p class="fs-4 text-dark">SELAMAT DATANG </p>
                            <h1 class="display-1 mb-5 text-dark">MASJID ABDUL AZIZ</h1>
                            <!-- <a href="" class="btn btn-primary py-3 px-5">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->