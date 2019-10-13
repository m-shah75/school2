<?php include_once 'header.php'; ?>
<?php include_once 'sidebar-student.php'; ?>
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>معلم</h3>
                <ul>
                    <li>
                        <a href="index.html">خانه</a>
                    </li>
                    <li>همه معلمان</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Teacher Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>اطلاعات همه معلمان</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>بستن</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>ویرایش</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>تازه کردن</a>
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
                                        <label class="form-check-label">شناسه</label>
                                    </div>
                                </th>
                                <th>عکس</th>
                                <th>نام</th>
                                <th>جنسیت</th>
                                <th>کلاس</th>
                                <th>موضوع</th>
                                <th>بخش</th>
                                <th>آدرس</th>
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
                                <td>علی زمانی</td>
                                <td>مرد</td>
                                <td>2</td>
                                <td>انگلیسی</td>
                                <td>A</td>
                                <td>اصفهان</td>
                                <td>0913 9988568</td>
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
                                <td>محمد زیایی</td>
                                <td>مرد</td>
                                <td>1</td>
                                <td>ریاضی</td>
                                <td>A</td>
                                <td>تهران</td>
                                <td>0912 6451384</td>
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
                                <td>سمیرا محمدی</td>
                                <td>خانم</td>
                                <td>3</td>
                                <td>فیزیک</td>
                                <td>A</td>
                                <td>اصفهان</td>
                                <td>+ 0913 54318523</td>
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
                                <td>مهدی توکلی</td>
                                <td>مرد</td>
                                <td>1</td>
                                <td>عربی</td>
                                <td>A</td>
                                <td>اصفهان</td>
                                <td>+ 0913 4981613</td>
                                <td>kazifahim93@gmail.com</td>


                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Teacher Table Area End Here -->
<?php include_once 'footer.php'; ?>