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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="page-title">Bookings</h4>
                                </div><!--end col-->

                                <div class="col-auto">
                                   
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>

                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <div
                                    class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                    <div class="datatable-top">
                                        <div class="datatable-dropdown">
                                            <label>
                                                <select class="datatable-selector" name="per-page">
                                                    <option value="5">5</option>
                                                    <option value="10" selected="">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                </select> entries per page
                                            </label>
                                        </div>
                                        <div class="datatable-search">
                                            <input class="datatable-input" placeholder="Search..." type="search"
                                                name="search" title="Search within table" aria-controls="datatable_1">
                                        </div>
                                    </div>
                                    <div class="datatable-container">
                                        <table class="table datatable datatable-table" id="datatable_1">
                                            <thead>
                                                <tr>
                                                    <th data-sortable="true" style="width: 21.806346623270954%;"><button
                                                            class="datatable-sorter">Date</button></th>
                                                    <th data-sortable="true" style="width: 16.354759967453212%;"><button
                                                            class="datatable-sorter">Student Name</button></th>
                                                    <th data-sortable="true" style="width: 12.693246541903989%;"><button
                                                            class="datatable-sorter">Category</button></th>
                                                    <th data-sortable="true" style="width: 15.947925142392188%;"><button
                                                            class="datatable-sorter">Sub Category</button></th>
                                                    <th data-sortable="true" style="width: 12.286411716842961%;"><button
                                                            class="datatable-sorter">Duration</button></th>
                                                    <th data-sortable="true" style="width: 10.496338486574452%;"><button
                                                            class="datatable-sorter">Status</button></th>
                                                    <th data-sortable="true" style="width: 10.414971521562245%;"><button
                                                            class="datatable-sorter">Action</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-index="0">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="active1">Active</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="pending">Pending</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="active1">Active</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="pending">Pending</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="active1">Active</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="pending">Pending</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="active1">Active</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="pending">Pending</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="8">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="active1">Active</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="9">
                                                    <td>21 Sep, 2021 at 2:14 AM</td>
                                                    <td>Calvin Carl </td>
                                                    <td>Dentist</td>
                                                    <td>Dental Core</td>
                                                    <td>45 Minutes</td>
                                                    <td class="pending">Pending</td>
                                                    <td>
                                                        <div class="dropdown-wrapper">
                                                            <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                            <ul class="dropdown-menu">
                                                                <li onclick="selectItem(this)">Cancel Booking</li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="datatable-bottom">
                                        <div class="datatable-info">Showing 1 to 10 of 20 entries</div>
                                        <nav class="datatable-pagination">
                                            <ul class="datatable-pagination-list">
                                                <li
                                                    class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                                    <button data-page="1" class="datatable-pagination-list-item-link"
                                                        aria-label="Page 1">‹</button></li>
                                                <li class="datatable-pagination-list-item datatable-active"><button
                                                        data-page="1" class="datatable-pagination-list-item-link"
                                                        aria-label="Page 1">1</button></li>
                                                <li class="datatable-pagination-list-item"><button data-page="2"
                                                        class="datatable-pagination-list-item-link"
                                                        aria-label="Page 2">2</button></li>
                                                <li class="datatable-pagination-list-item"><button data-page="2"
                                                        class="datatable-pagination-list-item-link"
                                                        aria-label="Page 2">›</button></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->


        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->

        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->
        <!--Start Footer-->

        <?php include 'partials/footer.php'; ?>