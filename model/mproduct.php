<?php
include_once("Model/connect.php");
class modelpro{
    // kết nối 2 bảng hạng mục và hạng mục con
    function selectallproduct(){
        $con;
        $p=new ketnoidatabase();
        if($p->connect($con)){
            $string="SELECT hangmuccon.id,hangmuccon.ten,hangmuccon.diengiai,hangmuc.tenhangmuc FROM hangmuccon INNER JOIN hangmuc ON hangmuccon.id_hangmuc = hangmuc.id";
            $table=mysql_query($string);
            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }
    }
    // Hạng mục
    function selectallproduct1(){
        $con;
        $p=new ketnoidatabase();
        if($p->connect($con)){
            $string="SELECT * FROM hangmuc";
            $table=mysql_query($string);
            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }
    }
    //Tài khoản
    function selectallproduct2(){
        $con;
        $p=new ketnoidatabase();
        if($p->connect($con)){
            $string="SELECT * FROM taikhoan";
            $table=mysql_query($string);
            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }

    }
    // kết nối 3 bảng hạng mục và hạng mức chi và tài khoản
    function selectallproduct3(){
        $con;
        $p=new ketnoidatabase();
        if($p->connect($con)){
            
            $string="SELECT hanmucchi.id, hanmucchi.tenhanmuc, hangmuc.tenhangmuc, hanmucchi.sotiencanhbao, hanmucchi.sotienhanmuc, hanmucchi.thoigianbatdau, hanmucchi.thoigianketthuc, taikhoan.tenTaiKhoan, SUM(CASE WHEN khoanthuchi.loaigiaodich = 2 THEN khoanthuchi.sotien ELSE 0 END) AS tongchi 
            FROM hanmucchi 
            INNER JOIN hangmuc ON hanmucchi.id_hangmuc = hangmuc.id 
            INNER JOIN taikhoan ON hanmucchi.id_taikhoan = taikhoan.id 
            INNER JOIN khoanthuchi ON taikhoan.id = khoanthuchi.id_taikhoan AND hangmuc.id = khoanthuchi.id_hangmuc
            GROUP BY hanmucchi.id, hanmucchi.tenhanmuc, hangmuc.tenhangmuc, hanmucchi.sotiencanhbao, hanmucchi.sotienhanmuc, hanmucchi.thoigianbatdau, hanmucchi.thoigianketthuc, taikhoan.tenTaiKhoan ";
            $table=mysql_query($string);
            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }
    }
    // Thêm hạng mục con
    function insertproduct($ten,$diengiai,$hangmuc){
        $con;
        $p= new ketnoidatabase();
        if($p->connect($con)){
            $string = "INSERT INTO hangmuccon(ten,diengiai,id_hangmuc) values";
			$string .= "(N'".$ten."',N'".$diengiai."',".$hangmuc.")";	
            $kq=mysql_query($string);

            $p->disconnect($con);
            return $kq;
        }else{
            return false;
        }

    }
    // Thêm hạn mức chi
    function inserthanmuc($ten,$hangmuc,$sotiencanhbao,$sotienhanmuc,$thoigianbatdau,$thoigianketthuc,$taikhoan){
        $con;
        $p= new ketnoidatabase();
        if($p->connect($con)){
            $string = "INSERT INTO hanmucchi(tenhanmuc,id_hangmuc,sotiencanhbao,sotienhanmuc,thoigianbatdau,thoigianketthuc,id_taikhoan) values";
			$string .= "(N'".$ten."',".$hangmuc.",".$sotiencanhbao.",".$sotienhanmuc.",".$thoigianbatdau.",".$thoigianketthuc.",".$taikhoan.")";	
            $kq=mysql_query($string);

            $p->disconnect($con);
            return $kq;
        }else{
            return false;
        }

    }
    //Xóa hạng mục con
    function Deleteproduct($ma){
        $con;
        $p= new ketnoidatabase();
        if($p->connect($con)){
            $string="DELETE FROM hangmuccon WHERE id=".$ma;
            $table=mysql_query($string);

            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }


    }
    //Xóa hạn mức chi
    function Deletehanmuc($ma){
        $con;
        $p= new ketnoidatabase();
        if($p->connect($con)){
            $string="DELETE FROM hanmucchi WHERE id=".$ma;
            $table=mysql_query($string);

            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }

    }
   //Sửa hạng mục con
    function editproduct($ma){
        $con;
        $p= new ketnoidatabase();
        if($p->connect($con)){
            $string="SELECT * FROM hangmuccon WHERE id=".$ma;
            $table=mysql_query($string);

            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }

    }
    function updateproduct($ten,$diengiai,$hangmuc,$ma){
        $con;
        $p= new ketnoidatabase();
        if($p->connect($con)){
            $string="UPDATE hangmuccon set ten='$ten',
                                        diengiai='$diengiai' ,
                                        id_hangmuc='$hangmuc' WHERE id='$ma' ";
            $table=mysql_query($string);

            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }

    }

    //Sửa hạn mức chi
    function edithanmuc($ma){
        $con;
        $p= new ketnoidatabase();
        if($p->connect($con)){
            $string="SELECT * FROM hanmucchi WHERE id=".$ma;
            $table=mysql_query($string);

            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }

    }
    function updatehanmuc($ten,$hangmuc,$sotiencanhbao,$sotienhanmuc,$thoigianbatdau,$thoigianketthuc,$taikhoan,$ma){
        $con;
        $p= new ketnoidatabase();
        if($p->connect($con)){
            $string="UPDATE hanmucchi set tenhanmuc='$ten' ,
                                        id_hangmuc='$hangmuc',
                                        sotiencanhbao='$sotiencanhbao',
                                        sotienhanmuc='$sotienhanmuc',
                                        thoigianbatdau='$thoigianbatdau',
                                        thoigianketthuc='$thoigianketthuc',
                                        id_taikhoan='$taikhoan' WHERE id='$ma' ";
            $table=mysql_query($string);

            $p->disconnect($con);
            return $table;
        }else{
            return false;
        }

    }
    
}


?>