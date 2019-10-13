<?php include_once 'header.php'; ?>
<?php include_once 'sidebar-teacher.php'; ?>
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>روال کلاس</h3>
                <ul>
                    <li>
                        <a href="index.html">خانه</a>
                    </li>
                    <li>روال</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Class Routine Area Start Here -->
            <div class="row">

                <div class="col-8-xxxl col-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>روال کلاس</h3>
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
                                        <input type="text" placeholder="جستجو بر اساس روز ..." class="form-control">
                                    </div>
                                    <div class="col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="جستجو بر اساس کلاس ..." class="form-control">
                                    </div>
                                    <div class="col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="جستجو بر اساس بخش ..." class="form-control">
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
                                                <label class="form-check-label">روز</label>
                                            </div>
                                        </th>
                                        <th>کلاس</th>
                                        <th>موضوع</th>
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
                                                <label class="form-check-label">یکشنبه</label>
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>حسابداری</td>
                                        <td>A</td>
                                        <td>10.00 - 11.00 صبح</td>
                                        <td>20/06/1398</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">یکشنبه</label>
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>حسابداری</td>
                                        <td>A</td>
                                        <td>10.00 - 11.00 صبح</td>
                                        <td>20/06/1398</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">دوشنبه</label>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>حسابداری</td>
                                        <td>A</td>
                                        <td>10.00 - 11.00 صبح</td>
                                        <td>20/06/1398</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">سه شنبه</label>
                                            </div>
                                        </td>
                                        <td>3</td>
                                        <td>حسابداری</td>
                                        <td>A</td>
                                        <td>10.00 - 11.00 صبح</td>
                                        <td>20/06/1398</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">یکشنبه</label>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>حسابداری</td>
                                        <td>A</td>
                                        <td>10.00 - 11.00 صبح</td>
                                        <td>20/06/1398</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">یکشنبه</label>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>حسابداری</td>
                                        <td>A</td>
                                        <td>10.00 - 11.00 صبح</td>
                                        <td>20/06/1398</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Class Routine Area End Here -->
            <?php include_once 'footer.php'; ?>
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
<!-- Data Table Js -->
<script src="js/jquery.dataTables.min.js"></script>
<!-- Custom Js -->
<script src="js/main.js"></script>

</body>


<!-- Mirrored from https://centralfile.ir/product/akkhor-them/class-routine.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jul 2019 07:00:53 GMT -->
</html>