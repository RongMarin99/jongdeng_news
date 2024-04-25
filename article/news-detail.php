   <!-- @header -->
   <?php
    include('header.php');
    $id = $_GET['id'];
    $news_type = $_GET['news_type'];
    $category = $_GET['category'];
    ?>


   <!-- @detail news -->
   <div class="content news-detail">
       <section>
           <div class="container">
               <div class="bottom-wrap">
                   <div class="row">
                       <div class="col-9">
                           <?php
                            $sql_select = "SELECT * FROM tbl_news WHERE id=$id";
                            $result_select = $con->query($sql_select);
                            $row = mysqli_fetch_assoc($result_select);
                            echo '<div class="main-news">
                                        <div class="thumbnail">
                                        <img src="assets/image/' . $row['banner'] . '"> 
                                        </div>
                                        <div class="detail">
                                            <h4 class="title">' . $row['title'] . '</h4>
                                            <div class="border"></div>
                                            <div class="date"><i class="far fa-clock"></i> ' . $row['date'] . '</div>
                                            <div class="border"></div>
                                            <div class="description">
                                                ' . $row['description'] . '
                                            </div>
                                        </div>
                                    </div>';
                            ?>

                       </div>
                       <div class="col-3">
                           <div class="relate-news">
                               <h4 class="main-title">Related News</h4>
                               <div class="row">
                                   <?php
                                    $sql_select = "SELECT * FROM tbl_news WHERE news_type='" . $news_type . "' 
                                    AND category='" . $category . "'
                                    AND id!=$id
                                     ORDER BY id DESC";
                                    $result_select = $con->query($sql_select);
                                    while ($row = mysqli_fetch_assoc($result_select)) {
                                        echo '      <div class="col-12">
                                        <figure>
                                        <a href="news-detail.php?id=' . $row['id'] . '&news_type=' . $row['news_type'] . '&category=' . $row['category'] . '">

                                                <div class="thumbnail">
                                                    <img src="assets/image/' . $row['thumbnail'] . '" alt="">
                                                </div>
                                                <div class="detail">
                                                    <h4 class="title">' . $row['title'] . '</h4>
                                                    <div class="border"></div>
                                                    <div class="date"><i class="far fa-clock"></i> ' . $row['date'] . '</div>
                                                    <div class="border"></div>
                                                    <div class="description">
                                                  ' . $row['description'] . '
                                                    </div>
                                                </div>
                                            </a>
                                        </figure>
                                    </div>';
                                    }
                                    ?>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>


   <!-- @footer -->
   <?php include('footer.php'); ?>