<?php include_once 'header.php'; ?>
<?php include_once 'sidebar-student.php'; ?>
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

                <div class="col-12-xxxl col-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3> برنامه امتحانات</h3>
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
                                        <td>20/06/1398</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">آزمون کلاس</label>
                                            </div>
                                        </td>
                                        <td>فیزیک</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>9:00 صبح - 10:00 صبح</td>
                                        <td>03/07/1398</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">آزمون کلاس</label>
                                            </div>
                                        </td>
                                        <td>عربی</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>08:00 صبح - 09:00 صبح</td>
                                        <td>01/08/1398</td>
                                    </tr>
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
                                        <td>11/08/1398</td>
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