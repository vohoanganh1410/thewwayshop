<?php
require_once 'helpers/Helper.php';
require_once 'views/layouts/header.php';
?>
<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Cart</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <?php if (!isset($_SESSION['cart'])): ?>
                <h1 >Giỏ hàng trống</h1>
            <?php else: ?>
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <form action="" method="post">
                            <table method="post" class="table">
                                <thead>
                                <tr>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Xoá sản phẩm</th>
                                </tr>
                                </thead>
                                <?php foreach ($_SESSION['cart'] AS $id => $product):
                                    if (!is_numeric($id)) {
                                        continue;
                                    }
                                    $image_path = "../backend/assets/uploads/" . $product['avatar'];
                                    $alias = Helper::alias($product['title']);
                                    $product_detail_url = "chi-tiet-san-pham/$alias/$id";
                                    ?>
                                    <tbody>
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="<?php echo $product_detail_url ?>">
                                                <img class="img-fluid" src="<?php echo $image_path ?>" style="height: 100px"  alt=""/>
                                            </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="<?php echo $product_detail_url ?>">
                                                <?php echo $product['title'] ?>
                                            </a>
                                        </td>
                                        <td class="price-pr">
                                            <p>  <?php
                                                $price = $product['price'];
                                                $price =
                                                    number_format($price, 0, '.', '.');
                                                echo $price;
                                                ?></p>
                                        </td>
                                        <td class="quantity-box"><input type="number" size="4" value="<?php echo $product['quality']; ?>" min="0"
                                                                        step="" class="c-input-text qty text">
                                             </td>
                                        <td class="total-pr">
                                            <p><?php
                                                $price_total = $product['quality'] * $product['price'];
                                                echo number_format($price_total, 0, '.', '.');
                                                ?></p>
                                        </td>
                                        <td class="remove-pr">
                                            <a href="xoa-san-pham/<?php echo $id ?>">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                <?php endforeach; ?>
                                    <tr>
                                        <td>

                                         <div > <h2>Tổng giá tiền thanh toán: <?php

                                                            echo number_format($_SESSION['cart']['total'], 0, '.', ',');
                                                            ?> vnđ</h2>
                                                    </div>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="thanh-toan">THANH TOÁN</a>
                                        </td>
                                    </tr>
                                <tr>
                                    <td><h2>Trở lại mua hàng</h2></td>
                                    <td><a class="btn btn-primary" href="">MUA HÀNG</a><td>

                                    <
                                </tr>



                            </table>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>





    </div>
</div>

<!-- End Cart -->
<?php
require_once 'views/layouts/footer.php';
?>
