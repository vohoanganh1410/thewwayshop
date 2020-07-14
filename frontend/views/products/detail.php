<?php
require_once 'helpers/Helper.php';
require_once 'views/layouts/header.php';
?>
<?php
$product_id = $product['id'];

?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->

    <div class="shop-detail-box-main">
    <div class="container">
    <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-6">
            <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><img class="d-block w-100"
                                                           src="<?php echo $image_path = "../backend/assets/uploads/" . $product['avatar']; ?>"
                                                           alt="First slide"></div>
                    <div class="carousel-item"><img class="d-block w-100"
                                                    src="<?php echo $image_path = "../backend/assets/uploads/" . $product['avatar']; ?>"
                                                    alt="Second slide"></div>
                    <div class="carousel-item"><img class="d-block w-100"
                                                    src="<?php echo $image_path = "../backend/assets/uploads/" . $product['avatar']; ?>"
                                                    alt="Third slide"></div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                        <img class="d-block w-100 img-fluid"
                             src="<?php echo $image_path = "../backend/assets/uploads/" . $product['avatar']; ?>"
                             alt=""/>
                    </li>
                    <li data-target="#carousel-example-1" data-slide-to="1">
                        <img class="d-block w-100 img-fluid"
                             src="<?php echo $image_path = "../backend/assets/uploads/" . $product['avatar']; ?>"
                             alt=""/>
                    </li>
                    <li data-target="#carousel-example-1" data-slide-to="2">
                        <img class="d-block w-100 img-fluid"
                             src="<?php echo $image_path = "../backend/assets/uploads/" . $product['avatar']; ?>"
                             alt=""/>
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-6">
            <div class="single-product-details">
                <h2><?php echo $product['title'] ?></h2>
                <h5><b>Giá: </b><?php $price = $product['price'];
                    $price =
                        number_format($price, 0, '.', '.');
                    echo $price; ?> VNĐ</h5>
                <p class="available-stock"><span> <?php echo $product['summary'] ?> </span>
                <p>
                <h4>Chi tiết sản phẩm:</h4>
                <p><?php echo $product['content'] ?> </p>
                <ul>
                    <li>
                        <div class="form-group size-st">
                            <label class="size-label">Size</label>
                            <select id="basic" class="selectpicker show-tick form-control">
                                <option value="0">Size</option>
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                                <option value="5">XXL</option>
                                <option value="6">3XL</option>
                                <option value="7">4XL</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="form-group quantity-box">
                            <label class="control-label">Quantity</label>
                            <input class="form-control" value="1" min="0" max="20" type="number">
                        </div>
                    </li>
                </ul>

                <div class="price-box-bar">
                    <div class="cart-and-bay-btn">
                        <a class="btn hvr-hover" data-fancybox-close="" href="">Buy New</a>
                        <a class="btn hvr-hover" data-fancybox-close=""
                           href="<?php echo $cart_url = "them-gio-hang/$product_id" ?>">Add to cart</a>
                    </div>
                </div>

                <div class="add-to-btn">
                    <div class="add-comp">
                        <a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Add to wishlist</a>
                        <a class="btn hvr-hover" href="#"><i class="fas fa-sync-alt"></i> Add to Compare</a>
                    </div>
                    <div class="share-bar">
                        <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                        <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                        <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require_once 'views/layouts/footer.php';
?>