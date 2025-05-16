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
                            <img src="assets/images/home/coursedr.png" alt="Course Thumbnail">
                        </div>

                        <div class="course-content">
                            <div class="course-header">
                                <span class="course-subtitle">Uploaded: Jan 21, 2020</span>
                                <span class="course-subtitle">Last Updated: Sep 11, 2021</span>
                            </div>

                            <h3 class="course-title1">2021 Complete Python Bootcamp From Zero to Hero in Python</h3>
                            <p class="course-subtitle">
                                3 in 1 Course: Learn to design websites with Figma, build with Webflow, and make a
                                living freelancing.
                            </p>

                            <div class="creator-rating-row">
                                <div class="course-creator">
                                    <img src="assets/images/home/user.png" alt="Creator" class="creator-img">
                                    <span class="course-subtitle">Created by:
                                        <br>
                                        <strong>Kevin Gilbert</strong>
                                    </span>
                                </div>

                                <div class="course-rating">
                                    <span class="stars">★★★★★</span>
                                    <span class="rating-score">4.8</span>
                                    <span class="rating-count">(451,444 Rating)</span>
                                </div>
                            </div>


                            <div class="course-stats1">
                                <div class="stat-block">
                                    <div class="stat-value">$13.99</div>
                                    <div class="course-subtitle">Course prices</div>
                                </div>
                                <div class="stat-block">
                                    <div class="stat-value">$131,800,455.82</div>
                                    <div class="course-subtitle">USD dollar revenue</div>
                                </div>
                                <div class="stat-block">
                                    <div class="stat-value">405,323,23</div>
                                    <div class="course-subtitle">Learners</div>
                                </div>

                                <div class="course-actions">
                                    <a href="#"> <button class="btn btn-primary1 ">Accept</button></a>
                                    <a href="#"> <button class="btn btn-primary2 ">Reject</button></a>

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
                              <div class="text-muted"><div class="dropdown">
                                <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     This Month<i class="las la-angle-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">This Year</a>
                                </div>
                            </div> </div>
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




