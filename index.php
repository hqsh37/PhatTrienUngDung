<?php
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = '';
    }
    // require_once 'model/connect.php';
    // $conn;
    // $c = new ketnoidatabase();
    // $c -> connect($conn);
    require_once 'layout/header.php';
    switch($page){
        case 'thuchi':{
            require_once("view/vDanhSachCacKhoanChiTieu.php");
            break;}
        case 'canhbao':{
            require_once("view/vCanhBao.php");
            break;}
        case 'phantichchitieu':{
            require_once("view/vPhanTichChiTieu.php");
            break;}
        case 'kehoachduthu':{
            require_once("view/vKeHoachDuThu.php");
            break;}
        default: {
            require_once("view/vHome.php");}
    }
    require_once 'layout/footer.php';
?>