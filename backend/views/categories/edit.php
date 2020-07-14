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
        <h1>Sửa danh mục <?php echo $category['id'] ?></h1>
      <?php
      require_once 'views/layouts/error.php'
      ?>
        <form method="post" action="">
            <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" name="name"
                       value="<?php echo isset($_POST['name']) ? $_POST['name'] : $category['name'] ?>"
                       class="form-control"/>
            </div>
            <div class="form-group">
                <label>Trạng thái</label>
              <?php
              $selected_active = '';
              $selected_inactive = '';
              $status = $category['status'];
              if (isset($_POST['status'])) {
                $status = $_POST['status'];
              }
              switch ($status) {
                case Helper::STATUS_ACTIVE:
                  $selected_active = "selected='true'";
                  break;
                case Helper::STATUS_INACTIVE:
                  $selected_inactive = "selected='true'";
                  break;
              }
              ?>
                <select name="status" class="form-control">
                    <option value="<?php echo Helper::STATUS_ACTIVE ?>" <?php echo $selected_active ?>>
                      <?php echo Helper::STATUS_ACTIVE_TEXT ?>
                    </option>
                    <option value="<?php echo Helper::STATUS_INACTIVE ?>" <?php echo $selected_inactive ?>>
                      <?php echo Helper::STATUS_INACTIVE_TEXT ?>
                    </option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
                <a href="index.php?controller=category" class="btn btn-secondary">Cancel</a>
            </div>
        </form>

    </section>
    <!-- /.content -->
</div>

<?php
require_once 'views/layouts/footer.php';
?>

