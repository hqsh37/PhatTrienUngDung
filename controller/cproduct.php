<?php
include_once("Model/mproduct.php");
class controlpro{
    function getallproducy1(){
        $p= new modelpro();
        $tblproduct= $p->selectallproduct1();
        return $tblproduct;
    }
    function getallproducy2(){
        $p= new modelpro();
        $tblproduct= $p->selectallproduct2();
        return $tblproduct;
    }
    function getallproducy3(){
        $p= new modelpro();
        $tblproduct= $p->selectallproduct3();
        return $tblproduct;
    }
    
    function getallproducy(){
        $p= new modelpro();
        $tblproduct= $p->selectallproduct();
        return $tblproduct;
    }
    function insertproduct($ten,$diengiai,$hangmuc){
       
        
                $p= new modelpro();
                $ins=$p->insertproduct($ten,$diengiai,$hangmuc);
                return $tblproduct;
                    
    }
    function inserthanmuc($ten,$hangmuc,$sotiencanhbao,$sotienhanmuc,$thoigianbatdau,$thoigianketthuc,$taikhoan){
       
        
        $p= new modelpro();
        $ins=$p->inserthanmuc($ten,$hangmuc,$sotiencanhbao,$sotienhanmuc,$thoigianbatdau,$thoigianketthuc,$taikhoan);
        if($ins){
            return 1;
        }else{
            return 0;
        }
            
}
    function Deletepro($ma){
        $p= new modelpro();
        $tblproduct= $p->Deleteproduct($ma);
        return $tblproduct;
    }
    function Deletehanmuc($ma){
        $p= new modelpro();
        $tblproduct= $p->Deletehanmuc($ma);
        return $tblproduct;
    }
    

    function editpro($ma){
        $p= new modelpro();
        $tblproduct= $p->editproduct($ma);
        return $tblproduct;
    }
    function updatepro($ten,$diengiai,$hangmuc,$ma){
       
       
                
        $p= new modelpro();
        $ins=$p->updateproduct($ten,$diengiai,$hangmuc,$ma);
        if($ins){
            return 1;
        }else{
            return 0;
        }
                    
                
           
    }
    function edithanmuc($ma){
        $p= new modelpro();
        $tblproduct= $p->edithanmuc($ma);
        return $tblproduct;
    }
    function updatehanmuc($ten,$hangmuc,$sotiencanhbao,$sotienhanmuc,$thoigianbatdau,$thoigianketthuc,$taikhoan,$ma){
       
       
                
        $p= new modelpro();
        $ins=$p->updatehanmuc($ten,$hangmuc,$sotiencanhbao,$sotienhanmuc,$thoigianbatdau,$thoigianketthuc,$taikhoan,$ma);
        if($ins){
            return 1;
        }else{
            return 0;
        }
                    
                
           
    }

}



?>