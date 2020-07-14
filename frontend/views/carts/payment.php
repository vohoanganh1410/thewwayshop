<?php
require_once 'helpers/Helper.php';
require_once 'views/layouts/header.php';
?>
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Checkout</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <?php if (!isset($_SESSION['cart'])): ?>
                <h2 style="color: hotpink ">Giỏ hàng trống</h2>
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
                                        <br>
                                        <div > <h2>Tổng giá tiền thanh toán: <?php

                                                echo number_format($_SESSION['cart']['total'], 0, '.', ',');
                                                ?> vnđ</h2>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="gio-hang-cua-ban">GIỎ HÀNG</a>
                                    </td>
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

<form method="post" action="">
    <div class="container" >
        <h2 class="center-align">Thông tin khách hàng</h2>
        <div class="form-group">
            <label>Họ tên khách hàng</label>
            <input type="text" name="fullname" value="" required class="form-control"
                   placeholder=""/>
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" name="address" value="" required class="form-control"
                   placeholder=""/>
        </div>
        <div class="form-group">
            <label>SĐT</label>
            <input type="number" min="0" name="mobile" value="" required class="form-control"
                   placeholder=""/>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" min="0" name="email" value="" required class="form-control"
                   placeholder=""/>
        </div>
        <div class="form-group">
            <label>Chọn size</label>
            <select class="form-control">
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
                <option>3XL</option>
                <option>4XL</option>
            </select>
        </div>
        <div class="form-group">
            <label>Ghi chú thêm</label>
            <textarea name="note" class="form-control"></textarea>
        </div>
        <div>
            <input type="submit" value="Mua hàng" class="btn btn-secondary "
                   name="muahang">
        </div>
    </div>
</form>


<?php
require_once 'views/layouts/footer.php';
?>

