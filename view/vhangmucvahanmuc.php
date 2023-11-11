<?php
require_once_once("Controller/cproduct.php");
class viewpro{
 function viewadpro(){
    $p=new controlpro();
    if(isset($_REQUEST['hangmuc'])){
        $tblad=$p->getallproducy();
    }
    
    if(isset($_REQUEST['hanmuc'])){
        $tblad3=$p->getallproducy3();
    }
   
    
    if($tblad){
   
        if(mysql_num_rows($tblad)>0){
            
            echo"<br>";
            echo"<center><h4 style=' width:400px;border: 1px solid black;border-radius: 20px;text-align: center;background-color: rgb(30, 144, 255);
            color: aliceblue;'>Quản lý hạng mục</h4></center>";
            echo"<table border='1px solid' style='width:100%;margin:auto;text-align:center;background-color:aliceblue'>";
            echo"<tr><th>ID</th><th>Tên hạng mục</th><th>Diễn giải</th><th>tên hạng mục cha</th><th>Action</th></tr>";
            while($row= mysql_fetch_assoc($tblad)){
               
                echo"<tr><td>".$row["id"]."</td><td>".$row["ten"]."</td><td>".$row["diengiai"]."</td><td>".$row["tenhangmuc"]."</td><td><button><a href='index.php?editpro=".$row['id']."' style='text-decoration:none; color:black;'>Sửa</a></button> || <button><a style='text-decoration:none; color:black;' href='index.php?Delpro=".$row['id']."' onclick='return confirm(\""."Bạn chắc có muốn xóa không"."\")'>Xóa</a></button>"."</td>";
               
            }
            echo"</table>";
        }else{
            echo "0 result" ;
        }
    }
    if($tblad3){
   
        if(mysql_num_rows($tblad3)>0){
            
            echo"<br>";
            echo"<center><h4 style=' width:400px;border: 1px solid black;border-radius: 20px;text-align: center;background-color: rgb(30, 144, 255);
            color: aliceblue;'>Quản lý hạn mức chi</h4></center>";
            echo"<table border='1px solid' style='width:100%;margin:auto;text-align:center;background-color:aliceblue'>";
            echo"<tr><th>ID</th><th>Tên hạn mức</th><th>tên hạng mục</th><th>số tiền cảnh báo</th><th>số tiền hạn mức</th><th>thời gian bắt đầu</th><th>thời gian kết thúc</th><th>Tên tài khoản</th><th>Action</th></tr>";
            while($row= mysql_fetch_assoc($tblad3)){
               
                echo"<tr><td>".$row["id"]."</td><td>".$row["ten"]."</td><td>".$row["tenhangmuc"]."</td><td>".$row["sotiencanhbao"]."</td><td>".$row["sotienhanmuc"]."</td><td>".$row["thoigianbatdau"]."</td><td>".$row["thoigianketthuc"]."</td><td>".$row["tenTaiKhoan"]."</td><td><button> <a style='text-decoration:none; color:black;' href='index.php?edithm=".$row['id']."'>Sửa</a></button> || <button><a style='text-decoration:none; color:black;' href='index.php?Delhm=".$row['id']."' onclick='return confirm(\""."Bạn chắc có muốn xóa không"."\")'>Xóa</a></button>"."</td>";
               
            }
            echo"</table>";
        }else{
            echo "0 result" ;
        }
    }
    
    
}
}



?>