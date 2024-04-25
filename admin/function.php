
<?php
session_start();
if (empty($_SESSION['id'])) {
    header("location:login.php");
}
//connection database
include('../database/connection.php');


//update site logo
function updateSiteLogo()
{
    global $con;
    if (isset($_POST['update_site_logo'])) {
        $filename = rand(1, 99999) . "-" . $_FILES['site_logo']['name'];
        $path_upload = "../article/assets/image/" . $filename;
        move_uploaded_file($_FILES['site_logo']['tmp_name'], $path_upload);

        $sql_update = "UPDATE tbl_site_logo SET `thumbnail`='" . $filename . "' WHERE id=1 ";
        $result_select = $con->query($sql_update);

        echo '<script type="text/javascript">
                    $(document).ready(function() {
                        swal({
                            title: "Update Success!",
                            text: "You clicked the button!",
                            icon: "success",
                            button: "Okay!",
                          });
                    });
                 </script>';
    }
}
updateSiteLogo();

//update footer logo
function updateFooterLogo()
{
    global $con;
    if (isset($_POST['update_footer_logo'])) {
        $filename = rand(1, 99999) . "-" . $_FILES['logo_footer']['name'];
        $path_upload = "../article/assets/image/" . $filename;
        move_uploaded_file($_FILES['logo_footer']['tmp_name'], $path_upload);
        $sql_update = "UPDATE tbl_footer_site_logo SET `thumbnail`='" . $filename . "' WHERE id=1 ";
        $result_update = $con->query($sql_update);
        if ($result_update == TRUE) {
            echo '<script type="text/javascript">
                    $(document).ready(function() {
                        swal({
                            title: "Update Success!",
                            text: "You clicked the button!",
                            icon: "success",
                            button: "Okay!",
                          });
                    });
                 </script>';
        }
    }
}
updateFooterLogo();

//Social Media Insert
function socialMediaInsert()
{
    global $con;
    if (isset($_POST['add_social_media'])) {
        $url = $_POST['url'];
        $filename = rand(1, 99999) . "-" . $_FILES['thumbnail']['name'];
        $path_upload = "../article/assets/image/" . $filename;
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $path_upload);
        //insert
        $sql_insert = "INSERT INTO tbl_footer_social VALUES(null,'" . $filename . "','" . $url . "')";
        $result_insert = $con->query($sql_insert);
        if ($result_insert == TRUE) {
            echo '<script type="text/javascript">
                        $(document).ready(function() {
                            swal({
                                title: "Insert Success!",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Okay!",
                            });
                        });
                 </script>';
        }
    }
}
socialMediaInsert();

//update social media
function updateSocialMedia()
{
    global $con;
    if (isset($_POST['update_social_media'])) {
        $id = $_POST['id'];
        $url = $_POST['url'];
        $filename = rand(1, 99999) . "-" . $_FILES['thumbnail']['name'];
        $path_upload = "../article/assets/image/" . $filename;
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $path_upload);

        //update script 
        $sql_update = "UPDATE tbl_footer_social SET `thumbnail`='" . $filename . "',
                     `url`='" . $url . "' WHERE `id`=$id ";
        //excute script
        $result_update = $con->query($sql_update);
        if ($result_update == TRUE) {
            echo '<script type="text/javascript">
                    $(document).ready(function() {
                        swal({
                            title: "Update Success!",
                            text: "You clicked the button!",
                            icon: "success",
                            button: "Okay!",
                          });
                    });
                 </script>';
        }
    }
}
updateSocialMedia();

//remove social media
function removeSocialMedia()
{
    global $con;
    if (isset($_POST['remove_social_media'])) {
        $id = $_POST['id'];
        $sql_delete = "DELETE FROM `tbl_footer_social` WHERE id=$id ";
        $result_delete = $con->query($sql_delete);
        if ($result_delete == TRUE) {
            echo '<script type="text/javascript">
                        $(document).ready(function() {
                            swal({
                                title: "Delete Success!",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Okay!",
                            });
                        });
                </script>';
        }
    }
}
removeSocialMedia();

//insert slide banner
function insertSlideBanner()
{
    global $con;
    if (isset($_POST['add_slide_banner'])) {
        $filename = rand(1, 99999) . "-" . $_FILES['slide_banner']['name'];
        $path_upload = "../article/assets/image/" . $filename;
        move_uploaded_file($_FILES['slide_banner']['tmp_name'], $path_upload);
        $sql_insert = "INSERT INTO tbl_slide VALUES(null,'" . $filename . "')";
        $result_insert = $con->query($sql_insert);
        if ($result_insert == TRUE) {
            echo '<script type="text/javascript">
                        $(document).ready(function() {
                            swal({
                                title: "Insert Success!",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Okay!",
                            });
                        });
                </script>';
        }
    }
}
insertSlideBanner();

//update slide banner
function updateSlideBanner()
{
    global $con;
    if (isset($_POST['update_slide_banner'])) {
        $id = $_POST['id'];
        $filename = rand(1, 99999) . "-" . $_FILES['slide_banner']['name'];
        $path_upload = "../article/assets/image/" . $filename;
        move_uploaded_file($_FILES['slide_banner']['tmp_name'], $path_upload);
        $sql_update = "UPDATE tbl_slide SET `thumbnail`='" . $filename . "' WHERE id=$id ";
        $result_update = $con->query($sql_update);
        if ($result_update == TRUE) {
            echo '<script type="text/javascript">
                        $(document).ready(function() {
                            swal({
                                title: "Update Success!",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Okay!",
                            });
                        });
                </script>';
        }
    }
}
updateSlideBanner();

//delete slide banner
function deleteSlideBanner()
{
    global $con;
    if (isset($_POST['remove_slide_banner'])) {
        $id = $_POST['id'];
        $sql_delete = "DELETE FROM tbl_slide WHERE id=$id";
        $result_delete = $con->query($sql_delete);
        if ($result_delete == TRUE) {
            echo '<script type="text/javascript">
                            $(document).ready(function() {
                                swal({
                                    title: "Delete Success!",
                                    text: "You clicked the button!",
                                    icon: "success",
                                    button: "Okay!",
                                });
                            });
                        </script>';
        }
    }
}
deleteSlideBanner();

//insert sport news
function insertSportNews()
{
    if (isset($_POST['add_sport_news'])) {
        global $con;
        date_default_timezone_set('Asia/Phnom_Penh');
        $title = $_POST['title'];
        $news_type = 'sport';
        $sub_category = $_POST['category'];
        $description = $_POST['description'];
        $date = date("F j, Y, g:i a");
        //thumbnail
        $thumbnail = rand(1, 99999) . "-" . $_FILES['thumbnail']['name'];
        $path_upload1 = "../article/assets/image/" . $thumbnail;
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $path_upload1);

        //banner
        $banner = rand(1, 99999) . "-" . $_FILES['banner']['name'];
        $path_upload2 = "../article/assets/image/" . $banner;
        move_uploaded_file($_FILES['banner']['tmp_name'], $path_upload2);


        $sql_insert = "INSERT INTO `tbl_news` (`id`, `title`, `date`, `description`, `thumbnail`, `banner`, `news_type`, `category`)
             VALUES(null,'" . $title . "','" . $date . "','" . $description . "',
                        '" . $thumbnail . "','" . $banner . "','" . $news_type . "','" . $sub_category . "')";
        $result_insert = $con->query($sql_insert);
        if ($result_insert == TRUE) {
            echo '<script type="text/javascript">
                        $(document).ready(function() {
                            swal({
                                title: "Insert Success!",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Okay!",
                            });
                        });
                     </script>';
        }
    }
}
echo insertSportNews();

//update sport news
function updateSportNews()
{
    if (isset($_POST['edit_sport_news'])) {
        global $con;
        date_default_timezone_set('Asia/Phnom_Penh');
        $id = $_POST['id'];
        $title = $_POST['title'];
        $news_type = 'sport';
        $sub_category = $_POST['category'];
        $description = $_POST['description'];
        $date = date("F j, Y, g:i a");
        //thumbnail
        $thumbnail = rand(1, 99999) . "-" . $_FILES['thumbnail']['name'];
        $path_upload1 = "../article/assets/image/" . $thumbnail;
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $path_upload1);

        //banner
        $banner = rand(1, 99999) . "-" . $_FILES['banner']['name'];
        $path_upload2 = "../article/assets/image/" . $banner;
        move_uploaded_file($_FILES['banner']['tmp_name'], $path_upload2);


        $sql_update = "UPDATE `tbl_news` SET `title` = '" . $title . "', 
        `date`='" . $date . "', `description`='" . $description . "', 
        `thumbnail`='" . $thumbnail . "', `banner`='" . $banner . "',
         `news_type`='" . $news_type . "', `category`='" . $sub_category . "'
         WHERE `id`=$id
        ";
        $result_update = $con->query($sql_update);
        if ($result_update == TRUE) {
            echo '<script type="text/javascript">
                        $(document).ready(function() {
                            swal({
                                title: "Update Success!",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Okay!",
                            });
                        });
                     </script>';
        }
    }
}
echo updateSportNews();

//delete sport news
function deleteSportNews()
{
    global $con;
    if (isset($_POST['delete_news'])) {
        $id = $_POST['id'];
        $sql_delete = "DELETE FROM tbl_news WHERE id=$id";
        $result_delete = $con->query($sql_delete);
        if ($result_delete == TRUE) {
            echo '<script type="text/javascript">
                    $(document).ready(function() {
                        swal({
                            title: "Delete Success!",
                            text: "You clicked the button!",
                            icon: "success",
                            button: "Okay!",
                        });
                    });
                </script>';
        }
    }
}
deleteSportNews();
?>