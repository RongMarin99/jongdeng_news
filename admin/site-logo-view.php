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
          <h4 class="m-0">WEBSITE LOGO</h4>
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
              <h5 class="m-0">List Post</h5>
            </div>
            <div class="card-body">
              <table id="TableView" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr>
                    <th>Thumbnail</th>
                    <th colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- @logo website -->
                  <?php
                  $sql_select_logo = "SELECT * FROM tbl_site_logo";
                  $result_select_logo = $con->query($sql_select_logo);
                  $row = mysqli_fetch_assoc($result_select_logo);
                  echo '<tr>
                                    <td>
                                      Logo Website
                                    </td>
                                    <td>
                                      <img height="70" src="../article/assets/image/' . $row['thumbnail'] . '">
                                    </td>
                                    <td>
                                      <a href="site-logo-update.php" class="btn btn-success">Edit</a>
                                    </td>
                                </tr>';
                  ?>

                  <!-- @logo footer -->
                  <?php
                  $sql_select_logo_footer = "SELECT * FROM tbl_footer_site_logo";
                  $result_select_logo_footer = $con->query($sql_select_logo_footer);
                  $row = mysqli_fetch_assoc($result_select_logo_footer);
                  echo '<tr>
                                      <td>
                                        Logo Footer
                                      </td>
                                      <td>
                                        <img height="70" src="../article/assets/image/' . $row['thumbnail'] . '">
                                      </td>
                                      <td>
                                        <a href="logo-footer-update.php" class="btn btn-success">Edit</a> 
                                      </td>
                                    </tr>';
                  ?>

                </tbody>
              </table>
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