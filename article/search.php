<?php
include('header.php');
$search = $_GET['search'];
?>

<div class="content search">
    <section>
        <div class="container">
            <div class="top-wrap">
                <h3 class="title">Result search of <span><?php echo $search ?></span></h3>
            </div>
            <div class="bottom-wrap">
                <div class="row">
                    <?php
                    $sql_select = "SELECT * FROM tbl_news WHERE title LIKE '%" . $search . "%' ORDER BY id DESC";
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

<?php include('footer.php'); ?>