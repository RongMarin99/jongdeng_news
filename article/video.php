<?php include('header.php'); ?>
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
    <section>
        <div class="container">
            <div class="top-wrap">
                <h3 class="title">VIDEO</h3>
            </div>
            <div class="bottom-wrap">
                <div class="row">
                    <?php
                    $sql_select = "SELECT * FROM tbl_video ORDER BY id DESC";
                    $result_select = $con->query($sql_select);
                    while ($row = mysqli_fetch_assoc($result_select)) {
                        echo ' <div class="col-3">
                                    <figure>
                                        <a data-fancybox data-type="gellary" 
                                        href="' . $row['url'] . '"
                                        >
                                            <i class="far fa-play-circle"></i>
                                            <div class="thumbnail">
                                                <img src="assets/image/' . $row['thumbnail'] . '" alt="">
                                            </div>
                                            <div class="detail">
                                                <h4 class="title">
                                                    ' . $row['title'] . '
                                                </h4>
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
<?php include('footer.php'); ?>