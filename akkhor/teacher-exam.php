<?php include_once 'header.php'; ?>
<?php include_once 'sidebar-teacher.php'; ?>
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
                <div class="col-4-xxxl col-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>افزودن آزمون جدید</h3>
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
                            <form class="new-added-form">
                                <div class="row">
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>نام امتحان</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>نوع موضوع *</label>
                                        <select class="select2">
                                            <option value="">لطفا انتخاب کنید</option>
                                            <option value="1">زبان</option>
                                            <option value="2">انگلیسی</option>
                                            <option value="3">ریاضیات</option>
                                            <option value="3">اقتصاد</option>
                                            <option value="3">شیمی</option>
                                        </select>
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>انتخاب کلاس *</label>
                                        <select class="select2">
                                            <option value="0">لطفا انتخاب کنید</option>
                                            <option value="1">پخش</option>
                                            <option value="2">مهد کودک</option>
                                            <option value="3">یک</option>
                                            <option value="3">دو</option>
                                            <option value="3">سه</option>
                                        </select>
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>Select Section</label>
                                        <select class="select2">
                                            <option value="0">لطفا انتخاب کنید</option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">C</option>
                                            <option value="3">D</option>
                                            <option value="3">E</option>
                                        </select>
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>انتخاب زمان</label>
                                        <input type="text" placeholder="" class="form-control">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>انتخاب تاریخ</label>
                                        <input type="text" placeholder="dd/mm/yyyy"
                                               class="form-control air-datepicker">
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="col-12 form-group mg-t-8">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">ذخیره</button>
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">تنظیم مجدد</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
            <?php include_once 'footer.php'; ?>
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
<!-- Select 2 Js -->
<script src="js/select2.min.js"></script>
<!-- Scroll Up Js -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Date Picker Js -->
<script src="js/datepicker.min.js"></script>
<!-- Data Table Js -->
<script src="js/jquery.dataTables.min.js"></script>
<!-- Custom Js -->
<script src="js/main.js"></script>

</body>


<!-- Mirrored from https://centralfile.ir/product/akkhor-them/exam-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jul 2019 07:02:38 GMT -->
</html>