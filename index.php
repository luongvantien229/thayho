<?php
include "view/header.php";
if (isset($_GET["pg"])) {
    $pg = $_GET["pg"];
    switch ($pg) {
        case 'course':
            include "view/course.php";
            break;
        case 'teacher':
            include "view/teacher.php";
            break;
        case 'about':
            include "view/about.php";
            break;
        case 'blog':
            include "view/blog.php";
            break;
        case 'single':
            include "view/single.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
