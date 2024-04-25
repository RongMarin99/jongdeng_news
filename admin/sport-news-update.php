<?php
include('header.php');
include('sidebar.php');
$id = $_GET['id'];
$sql_select = "SELECT * FROM tbl_news WHERE id=$id ";
$result_select = $con->query($sql_select);
$row = mysqli_fetch_assoc($result_select);
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
              <h5 class="m-0 text-primary">Update Post</h5>
            </div>
            <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label>News Title</label>
                    <input value="<?php echo $row['title'] ?>" name="title" type="text" class="form-control" placeholder="News Title">
                  </div>
                  <div class="form-group">
                    <label>Post Thumbnail</label> <small class="text-danger">( Recommend image size 300 x 300 pixel )</small>
                    <div class="input-group">
                      <div class="custom-file">
                        <input value="<?php echo $row['thumbnail'] ?>" name="thumbnail" type="file" class="custom-file-input">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Post Banner</label> <small class="text-danger">( Recommend image size 700 x 400 pixel )</small>
                    <div class="input-group">
                      <div class="custom-file">
                        <input value="<?php echo $row['banner'] ?>" name="banner" type="file" class="custom-file-input">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Post Categories</label>
                    <select class="form-control" value="<?php echo $row['category'] ?>" name="category">
                      <option value="national">National</option>
                      <option value="international">International</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Post Descriptions</label>
                    <textarea value="<?php echo $row['description'] ?>" name="description" class="form-control" cols="30" rows="10" placeholder="News Descriptions">
                    <?php echo $row['description'] ?>
                  </textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="edit_sport_news">Edit Post</button>
                  <a href="sport-news-view.php"" class=" btn btn-primary">Back to List View</a>
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