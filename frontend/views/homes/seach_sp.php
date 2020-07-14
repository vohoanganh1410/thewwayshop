<?php
require_once 'helpers/Helper.php';
require_once 'views/layouts/header.php';
?>
    <!-- Start Top Search -->
    <main>
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <!-- Start Slider -->
        <div id="slides-shop" class="cover-slides">
            <ul class="slides-container">
                <li class="text-left">
                    <img src="assets/images/banner-01.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>Welcome To <br> Thewayshop</strong></h1>
                                <p class="m-b-40">Đến với shop Moto chúng tôi, bạn sẽ có những mẫu sản phẩm đẹp nhất
                                    <br> đầy đủ những mẫu áo quần, ví tiền, giày dép dành cho bạn.</p>
                                <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="text-center">
                    <img src="assets/images/banner-02.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>Welcome To <br> Thewayshop</strong></h1>
                                <p class="m-b-40">Đến với shop Moto chúng tôi, bạn sẽ có những mẫu sản phẩm đẹp nhất
                                    <br> đầy đủ những mẫu áo quần, ví tiền, giày dép dành cho bạn.</p>
                                <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="text-right">
                    <img src="assets/images/banner-03.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>Welcome To <br> Thewayshop</strong></h1>
                                <p class="m-b-40">Đến với shop Moto chúng tôi, bạn sẽ có những mẫu sản phẩm đẹp nhất
                                    <br> đầy đủ những mẫu áo quần, ví tiền, giày dép dành cho bạn.</p>
                                <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="slides-navigation">
                <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Slider -->

        <!-- Start Categories  -->
        <!-- Start Shop Page  -->
        <div class="shop-box-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                        <div class="product-categori">
                            <div class="search-product">
                                <form action="" method="get">
                                    <input type="hidden" name="controller" value="home">
                                    <input class="form-control" name="tukhoa" placeholder="Search here..." type="text">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                    <input type="hidden" name="action" value="timkiem">

                                </form>
                            </div>
                            <div class="filter-sidebar-left">
                                <div class="title-left">
                                    <h3>Categories</h3>
                                </div>
                                <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men"
                                     data-children=".sub-men">
                                    <div class="list-group-collapse sub-men">
                                        <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse"
                                           aria-expanded="true" aria-controls="sub-men1">Sản phẩm
                                            <small class="text-muted">(100)</small>
                                        </a>
                                        <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                            <div class="list-group">
                                                <a href="index.php?controller=home&action=timkiem" class="list-group-item list-group-item-action active">Áo khoác
                                                    <small class="text-muted">(50)</small>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">Áo sơ mi
                                                    <small class="text-muted">(10)</small>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">Quần Jean
                                                    <small class="text-muted">(10)</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-collapse sub-men">
                                        <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse"
                                           aria-expanded="false" aria-controls="sub-men2">Footwear
                                            <small class="text-muted">(50)</small>
                                        </a>
                                        <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action">Sports Shoes
                                                    <small class="text-muted">(10)</small>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">Sneakers
                                                    <small class="text-muted">(20)</small>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">Formal Shoes
                                                    <small class="text-muted">(20)</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="list-group-item list-group-item-action"> Men
                                        <small class="text-muted">(150)</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">Accessories
                                        <small class="text-muted">(11)</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">Bags
                                        <small class="text-muted">(22)</small>
                                    </a>
                                </div>
                            </div>
                            <div class="filter-price-left">
                                <div class="title-left">
                                    <h3>Price</h3>
                                </div>
                                <div class="price-box-slider">
                                    <div id="slider-range"></div>
                                    <p>
                                        <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                        <button class="btn hvr-hover" type="submit">Filter</button>
                                    </p>
                                </div>
                            </div>
                            <div class="filter-brand-left">
                                <div class="title-left">
                                    <h3>Brand</h3>
                                </div>
                                <div class="brand-box">
                                    <ul>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios1" value="Yes" type="radio">
                                                <label for="Radios1"> Supreme </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios2" value="No" type="radio">
                                                <label for="Radios2"> A Bathing Ape </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios3" value="declater" type="radio">
                                                <label for="Radios3"> The Hundreds </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios4" value="declater" type="radio">
                                                <label for="Radios4"> Alife </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios5" value="declater" type="radio">
                                                <label for="Radios5"> Neighborhood </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios6" value="declater" type="radio">
                                                <label for="Radios6"> CLOT </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios7" value="declater" type="radio">
                                                <label for="Radios7"> Acapulco Gold </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios8" value="declater" type="radio">
                                                <label for="Radios8"> UNDFTD </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios9" value="declater" type="radio">
                                                <label for="Radios9"> Mighty Healthy </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio radio-danger">
                                                <input name="survey" id="Radios10" value="declater" type="radio">
                                                <label for="Radios10"> Fiberops </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                        <div class="right-product-box">
                            <div class="product-item-filter row">
                                <div class="col-12 col-sm-8 text-center text-sm-left">
                                    <div class="toolbar-sorter-right">
                                        <span>Sort by </span>
                                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                                            <option data-display="Select">Nothing</option>
                                            <option value="1">Popularity</option>
                                            <option value="2">High Price → High Price</option>
                                            <option value="3">Low Price → High Price</option>
                                            <option value="4">Best Selling</option>
                                        </select>
                                    </div>
                                    <p>Showing all 4 results</p>
                                </div>
                                <div class="col-12 col-sm-4 text-center text-sm-right">
                                    <ul class="nav nav-tabs ml-auto">
                                        <li>
                                            <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>




                            <div class="row product-categorie-box">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                        <?php if (empty($products)): ?>
                                            <h2>Không có sản phẩm nào</h2>
                                        <?php else: ?>
                                            <div class="row">
                                                <?php
                                                foreach ($products AS $product):
                                                    $alias = Helper::alias($product['title']);
                                                    $product_id = $product['id'];
                                                    $product_link = "chi-tiet-san-pham/$alias/$product_id";
                                                    $product_image_path = "../backend/assets/uploads/" . $product['avatar'];
                                                    //format lại giá sản phẩm theo dạng 1.000.000
                                                    $product_price =
                                                        number_format($product['price'],
                                                            0, '.', '.');
                                                    //tạo url rewrite cho trang giỏ hàng và thanh toán
                                                    $cart_url = "them-gio-hang/$product_id";
                                                    $payment_url = 'thanh-toan';
                                                    ?>
                                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                        <div class="products-single fix">
                                                            <div class="box-img-hover">
                                                                <div class="type-lb">
                                                                    <p class="sale">Sale</p>
                                                                </div>
                                                                <img src="<?php echo $product_image_path ?>" class="img-fluid" alt="Image">
                                                                <div class="mask-icon">
                                                                    <ul>
                                                                        <li><a href="<?php echo $product_link ?>" data-toggle="tooltip" data-placement="right" title="View"><i
                                                                                    class="fas fa-eye"></i></a></li>
                                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                                                    class="fas fa-sync-alt"></i></a></li>
                                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i
                                                                                    class="far fa-heart"></i></a></li>
                                                                    </ul>
                                                                    <a class="cart" href="<?php echo $cart_url?>">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="why-text">
                                                                <h4><?php echo $product['title'] ?></h4>
                                                                <h5> <?php echo $product_price; ?></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="list-view">
                                        <?php if (empty($products)): ?>
                                            <h2>Không có sản phẩm nào</h2>
                                        <?php else: ?>
                                            <div class="list-view-box">
                                                <?php
                                                foreach ($products AS $product):
                                                    //set link url đã được rewrite
//       $product_link = 'index.php?controller=product&action=detail&id=';
                                                    $alias = Helper::alias($product['title']);
                                                    $product_id = $product['id'];
                                                    $product_link = "chi-tiet-san-pham/$alias/$product_id";
                                                    $product_image_path = "../backend/assets/uploads/" . $product['avatar'];
                                                    //format lại giá sản phẩm theo dạng 1.000.000
                                                    $product_price =
                                                        number_format($product['price'],
                                                            0, '.', '.');
                                                    //tạo url rewrite cho trang giỏ hàng và thanh toán
                                                    $cart_url = "them-gio-hang/$product_id";
                                                    $payment_url = 'thanh-toan';
                                                    ?>

                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                    <div class="type-lb">
                                                                        <p class="new">New</p>
                                                                    </div>
                                                                    <img src="<?php echo $product_image_path ?>" class="img-fluid" alt="Image">
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                                                        class="fas fa-eye"></i></a></li>
                                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                                                        class="fas fa-sync-alt"></i></a></li>
                                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                                   title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                            <div class="why-text full-width">
                                                                <h4><?php echo $product['title'] ?></h4>
                                                                <h5>
                                                                    <b>Giá</b>
                                                                    <?php echo $product_price; ?>
                                                                </h5>
                                                                <p><?php echo $product['content'] ?></p>
                                                                <a class="btn hvr-hover" href="<?php echo $cart_url ?>">Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shop Page -->
        <!-- End Categories -->
    </main>
<?php
require_once 'views/layouts/footer.php';
?>