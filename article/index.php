  <!-- @header -->
  <?php include('header.php'); ?>

  <!-- @content -->
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

      <!-- @main-content -->
      <section>
          <div class="container">
              <div class="top-wrap">
                  <h3 class="title">SPORTS NEWS</h3>
                  <a href="">View More&ensp;<i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <div class="bottom-wrap">
                  <div class="row">
                      <?php
                        $sql_select = "SELECT * FROM tbl_news WHERE news_type='sport' ORDER BY id DESC LIMIT 4";
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


      <!-- @social news -->
      <section>
          <div class="container">
              <div class="top-wrap">
                  <h3 class="title">SOCIAL NEWS</h3>
                  <a href="">View More&ensp;<i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <div class="bottom-wrap">
                  <div class="row">
                      <?php for ($i = 1; $i <= 4; $i++) { ?>
                          <div class="col-3">
                              <figure>
                                  <a href="#">
                                      <div class="thumbnail">
                                          <img src="https://via.placeholder.com/255x200" alt="">
                                      </div>
                                      <div class="detail">
                                          <h4 class="title">Messi ​បំបែក​កំណត់​ត្រា​របស់​ Pele បាត់​ក្រោយ​ស៊ុត Hat-trick​ មុន​នេះ​</h4>
                                          <div class="border"></div>
                                          <div class="date"><i class="far fa-clock"></i> 12-May-2021</div>
                                          <div class="border"></div>
                                          <div class="description">
                                              ​​ខ្សែ​ប្រយុទ្ធ​​ Lionel Messi ​បាន​បំបែក​កំណត់​ត្រា​ស៊ុត​ច្រើន​ជាង​គេ​​របស់ Pele ​នៅ​តំបន់ Conmebol ​ក្រោយ​ធ្វើ​​ Hat-trick​ (ស៊ុត​បាន​៣​គ្រាប់​ម្នាក់​ឯង​) ដើម្បី​ជួយ​ក្រុម​ជម្រើស​ជាតិ​អាហ្សង់ទីន​យក​ឈ្នះ​​បូលីវី ៣-០ ក្នុង​វគ្គ​ជម្រុះ World Cup មុន​នេះ។
                                          </div>
                                      </div>
                                  </a>
                              </figure>
                          </div>
                      <?php } ?>
                  </div>
              </div>
          </div>
      </section>

      <!-- @entertianment news -->
      <section>
          <div class="container">
              <div class="top-wrap">
                  <h3 class="title">ENTERTIANMENT NEWS</h3>
                  <a href="">View More&ensp;<i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <div class="bottom-wrap">
                  <div class="row">
                      <?php for ($i = 1; $i <= 4; $i++) { ?>
                          <div class="col-3">
                              <figure>
                                  <a href="#">
                                      <div class="thumbnail">
                                          <img src="https://via.placeholder.com/255x200" alt="">
                                      </div>
                                      <div class="detail">
                                          <h4 class="title">Messi ​បំបែក​កំណត់​ត្រា​របស់​ Pele បាត់​ក្រោយ​ស៊ុត Hat-trick​ មុន​នេះ​</h4>
                                          <div class="border"></div>
                                          <div class="date"><i class="far fa-clock"></i> 12-May-2021</div>
                                          <div class="border"></div>
                                          <div class="description">
                                              ​​ខ្សែ​ប្រយុទ្ធ​​ Lionel Messi ​បាន​បំបែក​កំណត់​ត្រា​ស៊ុត​ច្រើន​ជាង​គេ​​របស់ Pele ​នៅ​តំបន់ Conmebol ​ក្រោយ​ធ្វើ​​ Hat-trick​ (ស៊ុត​បាន​៣​គ្រាប់​ម្នាក់​ឯង​) ដើម្បី​ជួយ​ក្រុម​ជម្រើស​ជាតិ​អាហ្សង់ទីន​យក​ឈ្នះ​​បូលីវី ៣-០ ក្នុង​វគ្គ​ជម្រុះ World Cup មុន​នេះ។
                                          </div>
                                      </div>
                                  </a>
                              </figure>
                          </div>
                      <?php } ?>
                  </div>
              </div>
          </div>
      </section>

      <!-- @video -->
      <section>
          <div class="container">
              <div class="top-wrap">
                  <h3 class="title">VIDEO</h3>
                  <a href="">View More&ensp;<i class="fas fa-arrow-circle-right"></i></a>
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

  <!-- @footer -->
  <?php include('footer.php'); ?>