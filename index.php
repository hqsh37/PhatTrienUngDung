<?php
if (isset($_GET['page'])) {
$page = $_GET['page'];
} else {
$page = '';
}
require_once 'layout/header.php';
$user_id = 0;
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}

if ($user_id == 0) {
    require_once("view/vHome.php");
} else {

    switch($page){
        case 'thuchi':{
            if (isset($_GET['loai'])) {
                include "view/QLThuChi/xlyThuchi.php";
            }
            require_once("view/vDanhSachCacKhoanChiTieu.php");
            break;}
        case 'duchi':{
            require_once("view/vDanhSachKeHoachDuChi.php");
            break;}
        case 'taichinhhientai':{
            require_once("view/vTaiChinhHienTai.php");
            break;}
        case 'phantichthu':{
            require_once("view/vPhanTichThu.php");
            break;}
        case 'taikhoan':{
            if (isset($_GET['loai'])) {
                include "view/QLTaiKhoan/xlyTK.php";
            }
            require_once("view/vQLTaiKhoan.php");
            break;}
        case 'phantichchitieu':{
            require_once("view/vPhanTichChiTieu.php");
            break;}
        case 'canhbao':{
            require_once("view/vCanhBao.php");
            break;}
        case 'duthu':{
            require_once("view/vKeHoachDuThu.php");
            break;}
        case 'nhacnho':{
            require_once("view/vNhacNhoNhapLieu.php");
            break;
        }
        case 'xuat':{
            require_once("view/vXuatDuLieu.php");
            break;}
        case 'home':{
            require_once("view/vHome.php");
            break;}
        case 'dxuat':{
            $_SESSION['user_id'] = 0;
            echo '<script>';
            echo 'alert("Đăng Xuất thành công!");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
            break;
        }
        case 'dnhap':{
            $_SESSION['user_id'] = 1;
            echo '<script>';
            echo 'alert("Đăng nhập thành công!");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
            break;
        }
        default: {
            require_once("index.php");}
    }
    include_once("view/vhangmucvahanmuc.php");
            $p = new viewpro();
            //Hạng mục
            if(isset($_REQUEST['hangmuc'])){
                echo "<button style='float: right;'><a href='index.php?addProd'  style='text-decoration:none; color:black;'>Thêm sản phẩm</a></button>"."<br>";
                $p->viewadpro();
            }elseif(isset($_REQUEST['addProd'])){
                include_once("view/vaddhangmuc.php");
            }elseif(isset($_REQUEST['Delpro'])){
                include_once("view/vdelhangmuc.php");}
            elseif(isset($_REQUEST['editpro'])){
                include_once("view/vehangmuc.php");} 
    //Hạn mức
                if(isset($_REQUEST['hanmuc'])){
                    echo "<button style='float: right;'><a href='index.php?addProd1'  style='text-decoration:none; color:black'>Thêm hạn mức</a></button>"."<br>";
                    $p->viewadpro();
                }elseif(isset($_REQUEST['addProd1'])){
                    include_once("view/vhanmuc.php");
                }elseif(isset($_REQUEST['Delhm'])){
                    include_once("view/vdelhanmuc.php");}
                elseif(isset($_REQUEST['edithm'])){
                    include_once("view/vehanmuc.php");}
    if(isset($_REQUEST['vtinhhinh'])){
                include_once("view/vtinhhinh.php");
                    }elseif(isset($_REQUEST['xem'])){
                    include_once("view/vtinhhinh.php");}
}
require_once 'layout/footer.php';
?>