<?php include_once 'header.php'; ?>
<?php include_once 'sidebar-management.php'; ?>
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>دانش آموزان</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>همه دانش آموزان</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>اطلاعات همه دانش آموزان</h3>
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
                            <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="جستجو بر اساس شناسه ..." class="form-control">
                            </div>
                            <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="جستجو براساس نام ..." class="form-control">
                            </div>
                            <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="جستجو بر اساس تلفن ..." class="form-control">
                            </div>
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">جستجو</button>
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
                                        <label class="form-check-label">رول</label>
                                    </div>
                                </th>
                                <th>عکس</th>
                                <th>نام</th>
                                <th>جنسیت</th>
                                <th>کلاس</th>
                                <th>بخش</th>
                                <th>والدین</th>
                                <th>آدرس</th>
                                <th>تاریخ تولد</th>
                                <th>تلفن</th>
                                <th>ایمیل</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label">#0021</label>
                                    </div>
                                </td>
                                <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                <td>محمد عباسی</td>
                                <td>مرد</td>
                                <td>2</td>
                                <td>A</td>
                                <td>علی عباسی</td>
                                <td>اصفهان</td>
                                <td>02/05/1981</td>
                                <td>+ 123 9988568</td>
                                <td>kazifahim93@gmail.com</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label">#0021</label>
                                    </div>
                                </td>
                                <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                <td>محمد عباسی</td>
                                <td>مرد</td>
                                <td>2</td>
                                <td>A</td>
                                <td>علی عباسی </td>
                                <td>اصفهان</td>
                                <td>02/05/1981</td>
                                <td>+ 123 9988568</td>
                                <td>kazifahim93@gmail.com</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label">#0021</label>
                                    </div>
                                </td>
                                <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                <td>محمد عباسی</td>
                                <td>مرد</td>
                                <td>1</td>
                                <td>A</td>
                                <td>علی عباسی </td>
                                <td>اصفهان</td>
                                <td>02/05/1981</td>
                                <td>+ 123 9988568</td>
                                <td>kazifahim93@gmail.com</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label">#0021</label>
                                    </div>
                                </td>
                                <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                <td>محمد عباسی</td>
                                <td>مرد</td>
                                <td>3</td>
                                <td>A</td>
                                <td>علی عباسی </td>
                                <td>اصفهان</td>
                                <td>02/05/1981</td>
                                <td>+ 123 9988568</td>
                                <td>kazifahim93@gmail.com</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Student Table Area End Here -->
            <?php include_once 'footer.php'; ?>
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
<!-- Scroll Up Js -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Data Table Js -->
<script src="js/jquery.dataTables.min.js"></script>
<!-- Custom Js -->
<script src="js/main.js"></script>

</body>


<!-- Mirrored from https://centralfile.ir/product/akkhor-them/all-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jul 2019 07:00:53 GMT -->
</html>