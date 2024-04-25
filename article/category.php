   <!-- @header -->
   <?php
    include('header.php');
    $news_type = $_GET['news_type'];
    $category = $_GET['category'];
    ?>


   <div class="content home">

       <!-- @slide -->
       <section>
           <div class="main-slide-banner">
               <?php
                $sql_select = "SELECT * FROM tbl_slide ORDER BY id DESC";
                $result_select = $con->query($sql_select);
                while ($row = mysqli_fetch_assoc($result_select)) {
                    echo '<div class="slide">
                                    <img src="assets/image/' . $row['thumbnail'] . '" alt="">
                              </div>';
                }
                ?>
           </div>
       </section>

       <!-- @select content -->
       <section>
           <div class="container">
               <div class="top-wrap">
                   <h3 class="title text-center"><?php echo strtoupper($category); ?> <?php echo strtoupper($news_type); ?> NEWS</h3>
               </div>
               <div class="bottom-wrap">
                   <div class="row">
                       <?php
                        $sql_select = "SELECT * FROM tbl_news WHERE news_type='" . $news_type . "' AND category='" . $category . "' ORDER BY id DESC";
                        $result_select = $con->query($sql_select);
                        while ($row = mysqli_fetch_assoc($result_select)) {
                            echo '<div class="col-3">
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
       </section>


   </div>


   <!-- @footer -->
   <?php include('footer.php'); ?>