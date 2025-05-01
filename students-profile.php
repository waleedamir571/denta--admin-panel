<?php include 'partials/header.php'; ?>


<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">My Courses</h4>
                        <!-- <div class="">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Approx</a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div> -->
                    </div><!--end page-title-box-->
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">My Courses</a>
                            </li>
                            <li class="breadcrumb-item active">2021 Complete Python Bootcamp From Zero to Hero in Python
                            </li>
                        </ol>

                        <div class="">

                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="course-summary-card1">
                        <div class="course-left">
                            <img src="assets/images/home/trainerdr.png" alt="Course Thumbnail">
                        </div>

                        <div class="course-content">
                            <div class="course-header">
                                <span class="course-subtitle">Uploaded: Jan 21, 2020</span>
                                <span class="course-subtitle">Last Updated: Sep 11, 2021</span>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <h3 class="course-title1">Vako Shvili</h3>
                                    <p class="course-subtitle">
                                        Web Designer & Best-Selling Instructor
                                    </p>
                                    <p class="course-subtitle">
                                        One day Vako had enough with the 9-to-5 grind, or more like 9-to-9 in his case,
                                        and quit
                                        his job, or more like got himself fired from his own startup. He decided to work
                                        on his
                                        dream: be his own boss, travel the world, only do the work he enjoyed...
                                    </p>
                                </div>
                            </div>





                            <div class="course-stats1">
                                <div class="stat-block">
                                    <div class="stat-value"></div>
                                    <div class="course-subtitle"></div>
                                </div>
                                <div class="stat-block">
                                    <div class="stat-value"></div>
                                    <div class="course-subtitle"></div>
                                </div>
                                <div class="stat-block">
                                    <div class="stat-value"></div>
                                    <div class="course-subtitle"></div>
                                </div>

                                <div class="course-actions">
                                    <a href="edit-course.php"> <button class="btn btn-primary1 ">Accept</button></a>
                                    <a href="edit-course.php"> <button class="btn btn-primary2 ">Reject</button></a>

                                    <div class="dropdown-wrapper">
                                        <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                        <ul class="dropdown-menu">

                                            <li onclick="selectItem(this)">Delete Course</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>



                <div class="row ">
                    <div class="col-md-6">
                        <div class="course-summary-card">
                            <div class="d-flex justify-content-between align-items-center ">
                                <h5 class="page-title">Overall Course Rating</h5>
                                <div class="text-muted">
                                    <div class="dropdown">
                                        <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            This Month<i class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <!-- Left box -->
                                <div class="col-md-4">
                                    <div class="rating-box">
                                        <p class="head">4.8</p>
                                        <div class="stars">
                                            ★ ★ ★ ★ ☆
                                        </div>
                                        <div class="c-rating mt-2">Course Rating</div>
                                    </div>
                                </div>

                                <!-- Right bars -->
                                <div class="col-md-8">
                                    <!-- Rating Row -->
                                    <div class="rating-row d-flex">
                                        <div class="rating-stars text-warning">★★★★★ 5 Star</div>
                                        <div class="flex-grow-1 mx-2">
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 67%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-percent">67%</div>
                                    </div>

                                    <div class="rating-row">
                                        <div class="rating-stars text-warning">★★★★☆ 4 Star</div>
                                        <div class="flex-grow-1 mx-2">
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 27%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-percent">27%</div>
                                    </div>

                                    <div class="rating-row">
                                        <div class="rating-stars text-warning">★★★☆☆ 3 Star</div>
                                        <div class="flex-grow-1 mx-2">
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 5%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-percent">5%</div>
                                    </div>

                                    <div class="rating-row">
                                        <div class="rating-stars text-warning">★★☆☆☆ 2 Star</div>
                                        <div class="flex-grow-1 mx-2">
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 1%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-percent">1%</div>
                                    </div>

                                    <div class="rating-row">
                                        <div class="rating-stars text-warning">★☆☆☆☆ 1 Star</div>
                                        <div class="flex-grow-1 mx-2">
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 0.5%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-percent">&lt;1%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-corner-img">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-md border-dashed border-primary rounded mx-auto">
                                                    <img src="assets/images/home/play1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">

                                                <h4 class="mt-1 mb-0 fw-medium">1,957</h4>
                                                <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Lecture (219.3
                                                    GB)
                                                </p>
                                            </div>
                                            <!--end col-->

                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="card bg-corner-img">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-md border-dashed border-primary rounded mx-auto">
                                                    <img src="assets/images/home/play2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">

                                                <h4 class="mt-1 mb-0 fw-medium">9,419,418</h4>
                                                <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Students
                                                    enrolled
                                                </p>
                                            </div>
                                            <!--end col-->

                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-corner-img">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-md border-dashed border-primary rounded mx-auto">
                                                    <img src="assets/images/home/play3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">

                                                <h4 class="mt-1 mb-0 fw-medium">19:37:51</h4>
                                                <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Hours</p>
                                            </div>
                                            <!--end col-->

                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->

                            <div class="col-md-6">
                                <div class="card bg-corner-img">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-md border-dashed border-primary rounded mx-auto">
                                                    <img src="assets/images/home/play3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">

                                                <h4 class="mt-1 mb-0 fw-medium">142</h4>
                                                <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Attach File
                                                    (14.4
                                                    GB)</p>
                                            </div>
                                            <!--end col-->

                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                        </div>

                        <!--end col-->

                    </div>
                    <!--end col-->
                </div>

                <br>
               
                <div class="row  pt-20">
                    <h4 class="page-title">Courses</h4>
                    <div class="col-md-3">
                        <a href="#">
                            <div class="course-card">
                                <img src="assets/images/home/dr1.png" alt="Course Image" class="course-image">

                                <div class="course-body">
                                    <span class="tag">DEVELOPMENTS</span>
                                    <h3 class="course-title">Learn Python Programming Masterclass</h3>

                                    <div class="course-stats">
                                        <div class="rating">
                                            <span class="star">★</span> 4.0
                                        </div>
                                        <div class="learners">
                                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="21" viewBox="0 0 20 21" fill="none">
                                                    <path
                                                        d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                        stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10">
                                                    </path>
                                                    <path
                                                        d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                        stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg></span> 511,123 <span class="text-muted">Learners</span>
                                        </div>
                                    </div>

                                   
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <div class="course-card">
                            <img src="assets/images/home/dr2.png" alt="Course Image" class="course-image">

                            <div class="course-body">
                                <span class="tag">DEVELOPMENTS</span>
                                <h3 class="course-title">Learn Python Programming Masterclass</h3>

                                <div class="course-stats">
                                    <div class="rating">
                                        <span class="star">★</span> 4.0
                                    </div>
                                    <div class="learners">
                                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                height="21" viewBox="0 0 20 21" fill="none">
                                                <path
                                                    d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                    stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10"></path>
                                                <path
                                                    d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                    stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg></span> 511,123 <span class="text-muted">Learners</span>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="course-card">
                            <img src="assets/images/home/dr3.png" alt="Course Image" class="course-image">

                            <div class="course-body">
                                <span class="tag">DEVELOPMENTS</span>
                                <h3 class="course-title">Learn Python Programming Masterclass</h3>

                                <div class="course-stats">
                                    <div class="rating">
                                        <span class="star">★</span> 4.0
                                    </div>
                                    <div class="learners">
                                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                height="21" viewBox="0 0 20 21" fill="none">
                                                <path
                                                    d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                    stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10"></path>
                                                <path
                                                    d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                    stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg></span> 511,123 <span class="text-muted">Learners</span>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="course-card">
                            <img src="assets/images/home/dr4.png" alt="Course Image" class="course-image">

                            <div class="course-body">
                                <span class="tag">DEVELOPMENTS</span>
                                <h3 class="course-title">Learn Python Programming Masterclass</h3>

                                <div class="course-stats">
                                    <div class="rating">
                                        <span class="star">★</span> 4.0
                                    </div>
                                    <div class="learners">
                                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                height="21" viewBox="0 0 20 21" fill="none">
                                                <path
                                                    d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                    stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10"></path>
                                                <path
                                                    d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                    stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg></span> 511,123 <span class="text-muted">Learners</span>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <!--end col-->

            </div><!--end row-->


            <br>

            <div class="row justify-content-center">
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Courses Overview</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont-calendar fs-5 me-1"></i> This Month<i
                                                class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <div id="reports" class="apex-charts pill-bar"></div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>

                <div class="col-md-8 order-2 order-lg-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Booking Overview</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont-calendar fs-5 me-1"></i> This Month<i
                                                class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div>
                        <div class="card-body pt-0">
                            <div id="chart" style=" margin: 50px auto;"></div>
                            <!-- <div class="bg-light py-3 px-2 mb-0 mt-3 text-center rounded">
                                    <h6 class="mb-0"><i class="icofont-calendar fs-5 me-1"></i> 01 January 2024 to 31
                                        December 2024</h6>
                                </div> -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div>



                <!--end col-->
                <!--end col-->
                <!--end col-->
            </div><!--end row-->


        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom justify-content-between">
                <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h6>Account Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">Auto updates</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
            </div><!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->
        <!--Start Footer-->

        <?php include 'partials/footer.php'; ?>