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
                <th>ID</th>
                <th>Họ Tên</th>
                <th>Email</th>
                <th>Nội dung</th>
                <th>Comment</th>
                <th>Thời gian nhận xét</th>
                <th>Phản hồi khách</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Hoang anh</td>
                <td>Vohoanganh@gmail.com</td>
                <td>sản phẩm tốt</td>
                <td>áo khoác rất tốt</td>
                <td>
                    2020-01-12 14:27:24</td>
                <td><a>phản hồi</a></td>
            </tr>


        </table>
        <a href="index.php?controller=category" class="btn btn-secondary">Back</a>
    </section>
    <!-- /.content -->
</div>
<?php
require_once 'views/layouts/footer.php';
?>
