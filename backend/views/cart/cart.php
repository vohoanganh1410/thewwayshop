<?php
require_once 'helpers/Helper.php';
require_once 'views/layouts/header.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <h1>Chi tiết khách hàng</h1>
        <table class="table table-bordered">
            <tr>
                <th>STT</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Email</th>
                <th>Chọn Size</th>
                <th>Ghi chú thêm</th>
                <th>Tổng thanh toán</th>
                <th>Ngày mua</th>

            </tr>
            <tr>
                <td>1</td>
                <td>Võ Hoàng Anh</td>
                <td>Xóm 6</td>
                <td>01245</td>
                <td>Áo khoác nam HKT001</td>
                <td>1</td>
                <td>Vohaong@gmail.com</td>
                <td>L</td>
                <td>đẹp</td>
                <td>800.000 VNĐ</td>
                <td>2020-01-08 22:07:42</td>

            </tr>

        </table>
        <a href="index.php?controller=category" class="btn btn-secondary">Back</a>
    </section>
    <!-- /.content -->
</div>
<?php
require_once 'views/layouts/footer.php';
?>
