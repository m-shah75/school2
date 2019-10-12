<?php include_once 'header.php';?>

<body>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    <div class="navbar navbar-expand-md header-menu-one bg-light">
        <div class="nav-bar-header-one">
            <div class="header-logo">
                <a href="index.html">
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>
            <div class="toggle-button sidebar-toggle">
                <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="d-md-none mobile-nav-bar">
            <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                <i class="far fa-arrow-alt-circle-down"></i>
            </button>
            <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
            <ul class="navbar-nav">
                <li class="navbar-item header-search-bar">
                    <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                        <input type="text" class="form-control" placeholder="پیدا کردن چیزی . . .">
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="navbar-item dropdown header-admin">
                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-expanded="false">
                        <div class="admin-title">
                            <h5 class="item-title">سنترال فایل</h5>
                            <span>مدیر</span>
                        </div>
                        <div class="admin-img">
                            <img src="img/figure/admin.jpg" alt="Admin">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="item-header">
                            <h6 class="item-title">سنترال فایل</h6>
                        </div>
                        <div class="item-content">
                            <ul class="settings-list">
                                <li><a href="#"><i class="flaticon-user"></i>پروفایل من</a></li>
                                <li><a href="#"><i class="flaticon-list"></i>وظیفه</a></li>
                                <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>پیام</a></li>
                                <li><a href="#"><i class="flaticon-gear-loading"></i>تنظیمات حساب</a></li>
                                <li><a href="#"><i class="flaticon-turn-off"></i>خروج</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="navbar-item dropdown header-message">
                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="far fa-envelope"></i>
                        <div class="item-title d-md-none text-16 mg-l-10">پیام</div>
                        <span>5</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="item-header">
                            <h6 class="item-title">05 پیام</h6>
                        </div>
                        <div class="item-content">
                            <div class="media">
                                <div class="item-img bg-skyblue author-online">
                                    <img src="img/figure/student11.png" alt="img">
                                </div>
                                <div class="media-body space-sm">
                                    <div class="item-title">
                                        <a href="#">
                                            <span class="item-name">سنترال فایل</span>
                                            <span class="item-time">18:30</span>
                                        </a>
                                    </div>
                                    <p>دلیل خرید این مورد چیست.
                                        آیا برای من مفید است.....</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img bg-yellow author-online">
                                    <img src="img/figure/student12.png" alt="img">
                                </div>
                                <div class="media-body space-sm">
                                    <div class="item-title">
                                        <a href="#">
                                            <span class="item-name">سنترال فایل</span>
                                            <span class="item-time">10:35</span>
                                        </a>
                                    </div>
                                    <p>دلیل خرید این مورد چیست.
                                        آیا برای من مفید است.....</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img bg-pink">
                                    <img src="img/figure/student13.png" alt="img">
                                </div>
                                <div class="media-body space-sm">
                                    <div class="item-title">
                                        <a href="#">
                                            <span class="item-name">آرش </span>
                                            <span class="item-time">02:35</span>
                                        </a>
                                    </div>
                                    <p>دلیل خرید این مورد چیست.
                                        آیا برای من مفید است.....</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-img bg-violet-blue">
                                    <img src="img/figure/student11.png" alt="img">
                                </div>
                                <div class="media-body space-sm">
                                    <div class="item-title">
                                        <a href="#">
                                            <span class="item-name">سنترال فایل</span>
                                            <span class="item-time">12:35</span>
                                        </a>
                                    </div>
                                    <p>دلیل خرید این مورد چیست.
                                        آیا برای من مفید است.....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="navbar-item dropdown header-notification">
                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="far fa-bell"></i>
                        <div class="item-title d-md-none text-16 mg-l-10">اطلاعیه</div>
                        <span>8</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="item-header">
                            <h6 class="item-title">03 اطلاعیه</h6>
                        </div>
                        <div class="item-content">
                            <div class="media">
                                <div class="item-icon bg-skyblue">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <div class="post-title">تکمیل کار امروز</div>
                                    <span>1 دقیقه پیش</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-icon bg-orange">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <div class="post-title">جلسه مدیر</div>
                                    <span>20 دقیقه پیش</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-icon bg-violet-blue">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <div class="post-title">به روز رسانی رمز عبور</div>
                                    <span>45 دقیقه پیش</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="navbar-item dropdown header-language">
                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>ان</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">انگلیسی</a>
                        <a class="dropdown-item" href="#">اسپانیایی</a>
                        <a class="dropdown-item" href="#">فرانسوی</a>
                        <a class="dropdown-item" href="#">چینی</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
            <div class="mobile-sidebar-header d-md-none">
                <div class="header-logo">
                    <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                </div>
            </div>
            <div class="sidebar-menu-content">
                <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                    <li class="nav-item sidebar-nav-item">
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">

                            </li>
                        </ul>
                    </li>
                    <li class="nav-item sidebar-nav-item">
                        <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>والدین</span></a>
                        <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                <a href="my-child.html" class="nav-link"><i class="fas fa-angle-right"></i>فرزند من</a>
                            </li>
                            <li class="nav-item">
                                <a href="class-routine-parent.html" class="nav-link"><i
                                        class="fas fa-angle-right"></i>برنامه کلاس</a>
                            </li>
                            <li class="nav-item">
                                <a href="exam-schedule-parent.html" class="nav-link"><i class="fas fa-angle-right"></i>برنامه امتحانات</a>
                            </li>
                            <li class="nav-item">
                                <a href="exam-result-parent.html" class="nav-link"><i class="fas fa-angle-right"></i>نتایج امتحانات</a>
                            </li>
                            <li class="nav-item">
                                <a href="student-attendence-parent.html" class="nav-link"><i class="fas fa-angle-right"></i>لیست حضور و غیاب</a>
                            </li>

                        </ul>
                    </li>



                </ul>
            </div>
        </div>
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>امتحان</h3>
                <ul>
                    <li>
                        <a href="index.html">خانه</a>
                    </li>
                    <li>برنامه امتحان</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Exam Schedule Area Start Here -->
            <div class="row">

                <div class="col-8-xxxl col-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>همه برنامه امتحانات</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                       aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-times text-orange-red"></i>بستن</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>ویرایش</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>تازه کردن</a>
                                    </div>
                                </div>
                            </div>
                            <form class="mg-b-20">
                                <div class="row gutters-8">
                                    <div class="col-lg-4 col-12 form-group">
                                        <input type="text" placeholder="جستجو بر اساس آزمون ..." class="form-control">
                                    </div>
                                    <div class="col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="جستجو بر اساس موضوع ..." class="form-control">
                                    </div>
                                    <div class="col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="جستجو براساس تاریخ ..." class="form-control">
                                    </div>
                                    <div class="col-lg-2 col-12 form-group">
                                        <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">جستجو</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">نام آزمون</label>
                                            </div>
                                        </th>
                                        <th>موضوع</th>
                                        <th>کلاس</th>
                                        <th>بخش</th>
                                        <th>زمان</th>
                                        <th>تاریخ</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">آزمون کلاس</label>
                                            </div>
                                        </td>
                                        <td>ریاضیات</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>10:00 صبح - 11:00 صبح</td>
                                        <td>20/06/2019</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                   aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>بستن</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>ویرایش</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>تازه کردن</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Exam Schedule Area End Here -->
       <?php include_once 'footer.php';?>