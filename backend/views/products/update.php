<?php
require_once 'helpers/Helper.php';
require_once 'views/layouts/header.php';
?>

<!-- Content Wrapper. Contains page content -->
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
        <?php
        require_once 'views/layouts/error.php';
        ?>
        <h3>Cập nhật sản phẩm</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Chọn danh mục</label>

                <select name="category_id" class="form-control">
                    <?php foreach($categories AS $category):
                        $selected = "";
                    //tại từng vòng lặp, nếu category_id hiện tại cảu sản phẩm
//                    trùng với category id tương ứng thì gán giá trị cho biến
//                    selected
                        if ($product['category_id'] == $category['id']) {
                            $selected = "selected=TRUE";
                        }
                        ?>
                        <option <?php echo $selected; ?>
                                value="<?php echo $category['id'] ?>">
                            <?php echo $category['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text"
                       name="title"
                       class="form-control" value="<?php echo $product['title']?>" />
            </div>

            <div class="form-group">
                <label>Ảnh sản phẩm</label>
                <input type="file" name="avatar"
                       class="form-control" />
<!--                nếu trường avatar đang có giá trị, nghĩa là đã upload ảnh-->
<!--                thì cần hiển thị ảnh-->
                <?php if (!empty($product['avatar'])): ?>
                    <img src="assets/uploads/<?php echo $product['avatar']?>"
                         height="60px" />
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Nhập giá sản phẩm</label>
                <input type="number" name="price" class="form-control"
                       value="<?php echo isset($_POST['price']) ?
                           $_POST['price'] : $product['price']?>" />
            </div>

            <div class="form-group">
                <label>Mô tả ngắn sản phẩm</label>
                <textarea name="summary" class="form-control">
                    <?php echo isset($_POST['summary'])
                        ? $_POST['summary'] : $product['summary']?>
                </textarea>
            </div>

            <div class="form-group">
                <label>Mô tả chi tiết sản phẩm</label>
                <textarea id="ckeditor-content"
                          name="content" class="form-control">
                    <?php echo isset($_POST['content'])
                        ? $_POST['content'] : $product['content'] ?>
                </textarea>
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <?php
                $selected_inactive = '';
                $selected_active = '';
                switch ($product['status']) {
                    case Helper::STATUS_INACTIVE:
                        $selected_inactive = "selected=TRUE";
                        break;
                    case Helper::STATUS_ACTIVE:
                        $selected_active = "selected=TRUE";
                        break;
                }
                ?>
                <select name="status" class="form-control">
                    <option <?php echo $selected_inactive?>
                            value="<?php echo Helper::STATUS_INACTIVE ?>">
                        <?php echo Helper::STATUS_INACTIVE_TEXT; ?>
                    </option>
                    <option <?php echo $selected_active ?>
                            value="<?php echo Helper::STATUS_ACTIVE; ?>">
                        <?php echo Helper::STATUS_ACTIVE_TEXT; ?>
                    </option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary"
                       name="submit" value="Lưu" />
                <a class="btn btn-secondary"
                   href="index.php?controller=product&action=index">
                    Quay lại
                </a>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>

<?php
require_once 'views/layouts/footer.php';
?>

