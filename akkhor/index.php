<?php include_once 'header.php'; ?>
<?php include_once 'sidebar-management.php'; ?>

<!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>داشبورد مدیریت</h3>
                <ul>
                    <li>
                        <a href="index.html">خانه</a>
                    </li>
                    <li>مدیر</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Dashboard summery Start Here -->
            <div class="row gutters-20">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="dashboard-summery-one mg-b-20">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="item-icon bg-light-green ">
                                    <i class="flaticon-classmates text-green"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item-content">
                                    <div class="item-title">دانش آموزان</div>
                                    <div class="item-number"><span class="counter" data-num="150000">1,50,000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="dashboard-summery-one mg-b-20">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="item-icon bg-light-blue">
                                    <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item-content">
                                    <div class="item-title">معلمان</div>
                                    <div class="item-number"><span class="counter" data-num="2250">2,250</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="dashboard-summery-one mg-b-20">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="item-icon bg-light-yellow">
                                    <i class="flaticon-couple text-orange"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item-content">
                                    <div class="item-title">والدین</div>
                                    <div class="item-number"><span class="counter" data-num="5690">5,690</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="dashboard-summery-one mg-b-20">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="item-icon bg-light-red">
                                    <i class="flaticon-money text-red"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item-content">
                                    <div class="item-title">درآمد</div>
                                    <div class="item-number"><span>تومان</span><span class="counter" data-num="193000">1,93,000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard summery End Here -->
            <!-- Dashboard Content Start Here -->
            <div class="row gutters-20">
                <div class="col-12 col-xl-8 col-6-xxxl">
                    <div class="card dashboard-card-one pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>درآمد</h3>
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
                            <div class="earning-report">
                                <div class="item-content">
                                    <div class="single-item pseudo-bg-blue">
                                        <h4>کل مجموعه ها</h4>
                                        <span>75,000</span>
                                    </div>
                                    <div class="single-item pseudo-bg-red">
                                        <h4>مجموعه هزینه ها</h4>
                                        <span>15,000</span>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="date-dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                       aria-expanded="false">20 تیر 1398</a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">20 تیر 1398</a>
                                        <a class="dropdown-item" href="#">20 تیر 1400</a>
                                        <a class="dropdown-item" href="#">20 تیر 1399</a>
                                    </div>
                                </div>
                            </div>
                            <div class="earning-chart-wrap">
                                <canvas id="earning-line-chart" width="660" height="320"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-3-xxxl">
                    <div class="card dashboard-card-two pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>هزینه ها</h3>
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
                            <div class="expense-report">
                                <div class="monthly-expense pseudo-bg-Aquamarine">
                                    <div class="expense-date">تیر 1398</div>
                                    <div class="expense-amount"><span>ت</span> 15,000</div>
                                </div>
                                <div class="monthly-expense pseudo-bg-blue">
                                    <div class="expense-date">مرداد 1398</div>
                                    <div class="expense-amount"><span>ت</span> 10,000</div>
                                </div>
                                <div class="monthly-expense pseudo-bg-yellow">
                                    <div class="expense-date">شهر 1398</div>
                                    <div class="expense-amount"><span>ت</span> 8,000</div>
                                </div>
                            </div>
                            <div class="expense-chart-wrap">
                                <canvas id="expense-bar-chart" width="100" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6 col-3-xxxl">
                    <div class="card dashboard-card-three pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>دانش آموزان</h3>
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
                            <div class="doughnut-chart-wrap">
                                <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                            </div>
                            <div class="student-report">
                                <div class="student-count pseudo-bg-blue">
                                    <h4 class="item-title">دانش آموزان دختر</h4>
                                    <div class="item-number">45,000</div>
                                </div>
                                <div class="student-count pseudo-bg-yellow">
                                    <h4 class="item-title">دانش آموزان پسر</h4>
                                    <div class="item-number">1,05,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6 col-4-xxxl">
                    <div class="card dashboard-card-four pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>تقویم رویداد</h3>
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
                            <div class="calender-wrap">
                                <div id="fc-calender" class="fc-calender"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-4-xxxl">
                    <div class="card dashboard-card-five pd-b-20">
                        <div class="card-body pd-b-14">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>ترافیک وب سایت</h3>
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
                            <h6 class="traffic-title">بازدید کنندگان منحصر به فرد</h6>
                            <div class="traffic-number">2,590</div>
                            <div class="traffic-bar">
                                <div class="direct" data-toggle="tooltip" data-placement="top" title="مستقیم">
                                </div>
                                <div class="search" data-toggle="tooltip" data-placement="top" title="جستجو">
                                </div>
                                <div class="referrals" data-toggle="tooltip" data-placement="top" title="ارجاعات">
                                </div>
                                <div class="social" data-toggle="tooltip" data-placement="top" title="اجتماعی">
                                </div>
                            </div>
                            <div class="traffic-table table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="t-title pseudo-bg-Aquamarine">مستقیم</td>
                                        <td>12,890</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td class="t-title pseudo-bg-blue">جستجو</td>
                                        <td>7,245</td>
                                        <td>27%</td>
                                    </tr>
                                    <tr>
                                        <td class="t-title pseudo-bg-yellow">ارجاعات</td>
                                        <td>4,256</td>
                                        <td>8%</td>
                                    </tr>
                                    <tr>
                                        <td class="t-title pseudo-bg-red">اجتماعی</td>
                                        <td>500</td>
                                        <td>7%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-4-xxxl">
                    <div class="card dashboard-card-six pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1 mg-b-17">
                                <div class="item-title">
                                    <h3>تابلو اعلانات</h3>
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
                            <div class="notice-box-wrap">
                                <div class="notice-list">
                                    <div class="post-date bg-skyblue">16 مرداد 1398</div>
                                    <h6 class="notice-title"><a href="#">مدرسه عالی مدرسه متن اصلی چاپ
                                            .</a></h6>
                                    <div class="entry-meta"> سنترال فایل / <span>5 دقیقه پیش</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-yellow">16 مرداد 1398</div>
                                    <h6 class="notice-title"><a href="#">بزرگ مدرسه چاپ چاپ.</a></h6>
                                    <div class="entry-meta"> سنترال فایل / <span>5 دقیقه پیش</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-pink">16 مرداد 1398</div>
                                    <h6 class="notice-title"><a href="#">مدرسه بزرگ مدرسه مدرسه.</a></h6>
                                    <div class="entry-meta"> سنترال فایل / <span>5 دقیقه پیش</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-skyblue">16 مرداد 1398</div>
                                    <h6 class="notice-title"><a href="#">مدرسه عالی مدرسه متن اصلی چاپ
                                            .</a></h6>
                                    <div class="entry-meta"> سنترال فایل / <span>5 دقیقه پیش</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-yellow">16 مرداد 1398</div>
                                    <h6 class="notice-title"><a href="#">بزرگ مدرسه چاپ چاپ.</a></h6>
                                    <div class="entry-meta"> سنترال فایل / <span>5 دقیقه پیش</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-pink">16 مرداد 1398</div>
                                    <h6 class="notice-title"><a href="#">مدرسه بزرگ مدرسه مدرسه.</a></h6>
                                    <div class="entry-meta"> سنترال فایل / <span>5 دقیقه پیش</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Content End Here -->
            <!-- Social Media Start Here -->
            <div class="row gutters-20">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card dashboard-card-seven">
                        <div class="social-media bg-fb hover-fb">
                            <div class="media media-none--lg">
                                <div class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <h6 class="item-title">ما را در فیس بوک لایک کنید</h6>
                                </div>
                            </div>
                            <div class="social-like">30,000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card dashboard-card-seven">
                        <div class="social-media bg-twitter hover-twitter">
                            <div class="media media-none--lg">
                                <div class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <h6 class="item-title">ما را در توییتر دنبال کنید</h6>
                                </div>
                            </div>
                            <div class="social-like">1,11,000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card dashboard-card-seven">
                        <div class="social-media bg-gplus hover-gplus">
                            <div class="media media-none--lg">
                                <div class="social-icon">
                                    <i class="fab fa-google-plus-g"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <h6 class="item-title">ما را در گوگل پلاس دنبال کنید</h6>
                                </div>
                            </div>
                            <div class="social-like">19,000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card dashboard-card-seven">
                        <div class="social-media bg-linkedin hover-linked">
                            <div class="media media-none--lg">
                                <div class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <h6 class="item-title">ما را در لینکداین دنبال کنید</h6>
                                </div>
                            </div>
                            <div class="social-like">45,000</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Social Media End Here -->
            <!-- Footer Area Start Here -->
            <?php include_once 'footer.php';?>
            <!-- Footer Area End Here -->
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
<!-- jquery-->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Counterup Js -->
<script src="js/jquery.counterup.min.js"></script>
<!-- Moment Js -->
<script src="js/moment.min.js"></script>
<!-- Waypoints Js -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Scroll Up Js -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Full Calender Js -->
<script src="js/fullcalendar.min.js"></script>
<!-- Chart Js -->
<script src="js/Chart.min.js"></script>
<!-- Custom Js -->
<script src="js/main.js"></script>

</body>


<!-- Mirrored from https://centralfile.ir/product/akkhor-them/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jul 2019 07:00:43 GMT -->
</html>