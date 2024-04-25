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
          <h1 class="m-0">SPORT NEWS</h1>
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
                    <th>News Title</th>
                    <th>News Type</th>
                    <th>News Categories</th>
                    <th>News Post Date</th>
                    <th>News Thumbnail</th>
                    <th>News Banner</th>
                    <th>News Descriptions</th>
                    <th colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql_select = "SELECT *FROM tbl_news ORDER BY id DESC";
                  $result_select = $con->query($sql_select);
                  while ($row = mysqli_fetch_assoc($result_select)) {
                    echo '<tr>
                            <td style="font-family:content;font-size:10px;line-height:35px;overflow: hidden;
                            text-overflow: ellipsis;
                            display: -webkit-box;
                            -webkit-line-clamp: 2; /* number of lines to show */
                                    line-clamp: 2; 
                            -webkit-box-orient: vertical;">' . $row['title'] . '</td>
                            <td>' . $row['news_type'] . '</td>
                            <td>' . $row['category'] . '</td>
                            <td>' . $row['date'] . '</td>
                            <td><img width="70" height="70" src="../article/assets/image/' . $row['thumbnail'] . '"></td>
                            <td><img width="150" height="70" src="../article/assets/image/' . $row['banner'] . '"></td>
                            <td style="font-family:content;font-size:10px;line-height:35px;overflow: hidden;
                            text-overflow: ellipsis;
                            display: -webkit-box;
                            -webkit-line-clamp: 2; /* number of lines to show */
                                    line-clamp: 2; 
                            -webkit-box-orient: vertical;">' . $row['description'] . '</td>
                            <td>
                              <a href="sport-news-update.php?id=' . $row['id'] . '" class="btn btn-success">Edit</a> 
                              <form method="post">
                                  <input type="hidden" value="' . $row['id'] . '" name="id"/>
                                  <button name="delete_news" class="btn btn-danger" type="submit">Remove</button>
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