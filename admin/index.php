<?php

session_start();
ob_start();
include "../dao/pdo.php";
include "../dao/danhmuc.php";
include "../dao/user.php";
include "view/header.php";
if (isset($_GET["pg"])) {
    $pg = $_GET["pg"];
    switch ($pg) {
        case 'order':
            include "view/order.php";
            break;
        case 'caterogies':

            $kq = getall_dm();
            include "view/caterogies.php";
            break;
        case 'caterogies_add':
            if (isset($_POST["btnadd"])) {
                $name = $_POST['name'];
                // danhmuc_insert($name);
                $no = "complete Notification ";
            }
            include "view/caterogies_add.php";
            break;
        case 'caterogies_edit':
            if (isset($_GET["id"])) {
                $id = $_GET['id'];
                $kq1 = getonedm($id);
                $kq = getall_dm();
                include "view/caterogies_edit.php";
            }
            if (isset($_POST["id"])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $home = $_POST['home'];
                $stt = $_POST['stt'];
                caterogies_edit($id, $name, $home, $stt);
                $kq = getall_dm();
                include "view/caterogies.php";
            }
          
            break;
        case 'caterogies_delete':
            if (isset($_GET["id"])) {
                $id = $_GET['id'];
                caterogies_delete($id);
            }
            $kq = getall_dm();
            include "view/caterogies.php";
            break;
        case 'products':
            include "view/products.php";
            break;
        case 'users':
            include "view/users.php";
            break;
        case 'users_add':
            if (isset($_POST["btnadd"])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ten = $_POST['ten'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $dienthoai = $_POST['dienthoai'];
                // users_insert($name, $password, $ten, $diachi, $email, $dienthoai);
                // users_insert($username, $password);
                $no = "complete Notification ";
            }
            include "view/users_add.php";
            break;
        case 'banner':
            include "view/banner.php";
            break;
        case 'comment':
            include "view/comment.php";
            break;


        default:
            include "view/index.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
