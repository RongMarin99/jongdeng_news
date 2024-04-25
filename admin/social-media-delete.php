<?php 
  include('header.php');
  include('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">SOCIAL MEDIA</h4>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Remove Post</h5>
              </div>
                <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <?php 
                        $id = $_GET['id'];
                        $sql_select = " SELECT * FROM `tbl_social` WHERE id = $id ";
                        $result_select = $con->query($sql_select);
                        while($row = mysqli_fetch_assoc($result_select)) {
                          $id         = $row['id'];
                    ?>
                    <div class="card-body">
                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <span>Are you sure to remove post id = <?php echo $_GET['id']; ?>?</span>
                    </div>
                    <?php
                        }
                    ?>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="remove_social_media" class="btn btn-danger">Remove Post</button>
                      <a href="<?= "http://" . $_SERVER['SERVER_NAME'] ?>/cms-news/admin/social-media-view.php" class="btn btn-primary">Back to view Post</a>
                    </div>
                  </form>
                </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('footer.php'); ?>
<!-- ./wrapper -->


