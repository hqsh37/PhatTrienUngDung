<?php
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = '';
    }
    require_once 'layout/header.php';
    switch($page){
        case 'thuchi':{
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
            require_once("view/vQLTaiKhoan.php");
            break;}
        case 'home':{
            require_once("view/vHome.php");
            break;}
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
    require_once 'layout/footer.php';
?>