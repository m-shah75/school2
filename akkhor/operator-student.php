<?php include_once 'header.php'; ?>
<?php include_once 'sidebar-operator.php'; ?>

<!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>دانش آموزان</h3>
                <ul>
                    <li>
                        <a href="index.html">خانه</a>
                    </li>
                    <li>دانش آموز</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Class Routine Area Start Here -->
            <div class="row">
                <div class="col-4-xxxl col-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>افزودن دانش آموز</h3>
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
                                        <label>نام *</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>نام خانوادگی *</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>نام پدر</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>شماره شناسنامه *</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>کلاس *</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>شماره تماس *</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>آدرس*</label>
                                        <input type="text" placeholder="" class="form-control">
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
                                    <h3>لیست دانش آموزان</h3>
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
                                        <input type="text" placeholder="جستجو بر اساس نام ..." class="form-control">
                                    </div>
                                    <div class="col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="جستجو بر اساس کد ملی ..." class="form-control">
                                    </div>
                                    <div class="col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="جستجو بر اساس نام پدر ..." class="form-control">
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
                                                <label class="form-check-label">نام</label>
                                            </div>
                                        </th>
                                        <th>نام خانوادگی</th>
                                        <th>نام پدر</th>
                                        <th>شماره شناسنامه</th>
                                        <th>کلاس</th>
                                        <th>شماره تماس</th>
                                        <th>آدرس</th>
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
                                        <td>سنترال فایل</td>
                                        <td>10.00 - 11.00 صبح</td>
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
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">دوشنبه</label>
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>انگلیسی</td>
                                        <td>A</td>
                                        <td>سنترال فایل</td>
                                        <td>10.00 - 11.00 صبح</td>
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
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">سه شنبه</label>
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>اقتصاد</td>
                                        <td>A</td>
                                        <td>سنترال فایل</td>
                                        <td>10.00 - 11.00 صبح</td>
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
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">چهارشنبه</label>
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>نقاشی</td>
                                        <td>A</td>
                                        <td>سنترال فایل</td>
                                        <td>10.00 - 11.00 صبح</td>
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
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">پنجشنبه</label>
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>انگلیسی</td>
                                        <td>A</td>
                                        <td>سنترال فایل</td>
                                        <td>10.00 - 11.00 صبح</td>
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
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">جمعه</label>
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>شیمی</td>
                                        <td>A</td>
                                        <td>سنترال فایل</td>
                                        <td>10.00 - 11.00 صبح</td>
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
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">شنبه</label>
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>انگلیسی</td>
                                        <td>A</td>
                                        <td>سنترال فایل</td>
                                        <td>10.00 - 11.00 صبح</td>
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
            <!-- Class Routine Area End Here -->
            <?php include_once 'footer.php'; ?>
