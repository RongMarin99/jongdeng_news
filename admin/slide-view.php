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
          <h1 class="m-0">SLIDE BANNER VIEW</h1>
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
                    <th>Slide Banner</th>
                    <th colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql_select = "SELECT *FROM tbl_slide ORDER BY id DESC";
                  $result_select = $con->query($sql_select);
                  while ($row = mysqli_fetch_assoc($result_select)) {
                    echo '<tr>
                            <td><img width="350" height="130" src="../article/assets/image/' . $row['thumbnail'] . '" width="350px"></td>
                            <td>
                            <a href="slide-update.php?id=' . $row['id'] . '" class="btn btn-success">Edit</a> 
                              <form style="float:left; margin-right:10px" method="post">
                                  <input name="id" type="hidden" value="' . $row['id'] . '" />
                                  <button name="remove_slide_banner" class="btn btn-danger" type="submit">Remove</button>
                              </form>
                            
                            </td>
                        </tr>';
                  }
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