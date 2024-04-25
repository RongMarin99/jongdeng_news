<?php
$con = mysqli_connect("localhost", "root", "", "jongdeng_news");
if (!$con->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $con->error);
    exit();
}
