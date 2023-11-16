<?php
include "model/connectnew.php";
// SELECT * FROM `khoanthuchi` INNER JOIN `taikhoan` ON `khoanthuchi`.`id_taikhoan` = `taikhoan`.`id` WHERE `taikhoan`.`id_user` = '18';
class ModelKhoanCT{
    function viewKhoanCT($userId){
        $conn;
        $p=new ketnoidatabase();
        if($p->connect($conn)){
            $sql = "SELECT `khoanthuchi`.`id`, `khoanthuchi`.`id_taikhoan`, `khoanthuchi`.`sotien`, `khoanthuchi`.`diengiai`,
                `khoanthuchi`.`thoigian`, `khoanthuchi`.`hinhanh`, `khoanthuchi`.`loaigiaodich`, `taikhoan`.`tenTaiKhoan`,
                `hangmuc`.`tenhangmuc`, `hangmuc`.`id` AS 'idHangmuc', `taikhoan`.`id` AS 'idTK'
            FROM `khoanthuchi` 
            INNER JOIN `taikhoan` ON `khoanthuchi`.`id_taikhoan` = `taikhoan`.`id` 
            INNER JOIN `hangmuc` ON `khoanthuchi`.`id_hangmuc` = `hangmuc`.`id` WHERE `taikhoan`.`id_user` = '".$userId."';";
            $result = mysqli_query($conn, $sql);
            $p->disconnect($conn);
            return $result;
        }else{
            return false;
        }
    }

    function suaKhoanCT($idTK, $sotien, $diengiai, $thoigian, $hinhanh, $loaiGD, $idHangmuc, $idKhoanCT){
        $conn;
        $p=new ketnoidatabase();
        if($p->connect($conn)){
            $sql = "UPDATE `khoanthuchi` SET `id_taikhoan` = '".$idTK."', `sotien` = '".$sotien."', `diengiai` = '".$diengiai."', `thoigian` = '".$thoigian."', `hinhanh` = '".$hinhanh."', `loaigiaodich` = '".$loaiGD."', `id_hangmuc` = '".$idHangmuc."' WHERE `khoanthuchi`.`id` = ".$idKhoanCT;
            $result = mysqli_query($conn, $sql);
            $p->disconnect($conn);
            return $result;
        }else{
            return false;
        }
    }
    
    function themKhoanCT($idTK, $sotien, $diengiai, $thoigian, $hinhanh, $loaiGD, $idHangmuc) {
        $conn;
        $p=new ketnoidatabase();
        if($p->connect($conn)){
            $sql = "INSERT INTO `khoanthuchi`(`id_taikhoan`, `sotien`, `diengiai`, `thoigian`, `hinhanh`, `loaigiaodich`, `id_hangmuc`) VALUES ('".$idTK."','".$sotien."','".$diengiai."','".$thoigian."','".$hinhanh."','".$loaiGD."','".$idHangmuc."')";
            $result = mysqli_query($conn, $sql);
            $p->disconnect($conn);
            return $result;
        }else{
            return false;
        }
    }

    // Tai khoan
    function viewTk($userId){
        $conn;
        $p=new ketnoidatabase();
        if($p->connect($conn)){
            $sql = "SELECT * FROM `taikhoan` WHERE `id_user` = '".$userId."'";
            $result = mysqli_query($conn, $sql);
            $p->disconnect($conn);
            return $result;
        }else{
            return false;
        }
    }

    // Hang muc
    function viewHangMuc($userId){
        $conn;
        $p=new ketnoidatabase();
        if($p->connect($conn)){
            $sql = "SELECT * FROM `hangmuc` WHERE `id_user` = '0' OR `id_user` = '".$userId."'";
            $result = mysqli_query($conn, $sql);
            $p->disconnect($conn);
            return $result;
        }else{
            return false;
        }
    }

}