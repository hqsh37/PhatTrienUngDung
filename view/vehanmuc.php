
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hạn mức chi</title>
    <style>
       h2{
            width:400px;
            border: 1px solid black;
            border-radius: 20px;
            text-align: center;
            background-color: rgb(30, 144, 255);
            color: aliceblue;
        }
        input,textarea{
            width:400px;
        }
        #but{
            width:200px;
        }
       
    </style>
    
</head>
<body>
<?php
    require_once_once("Controller/cproduct.php");
    $p=new controlpro();
    $kq=$p->edithanmuc($_REQUEST['edithm']);
    if(mysql_num_rows($kq)>0){
        $row=mysql_fetch_assoc($kq);
        $id=$row['id'];
        $name=$row['ten'];
        $hangmuc=$row['id_hangmuc'];
        $stcb1=$row['sotiencanhbao'];
        $sthm1=$row['sotienhanmuc'];
        $tgbd1=$row['thoigianbatdau'];
        $tgkt1=$row['thoigianketthuc'];
        $tk=$row['id_taikhoan'];
    }
   

    
    
    ?>
    <form action="#" method="post" enctype="multipart/form-data" >
        <table style="margin:auto;text-align:left">
        <center><h2>Đặt hạn mức</h2></center>
             <tr>
               
               <td><input type="hidden" name="id" value="<?php echo $id; ?>" ></td>
           </tr>
            <tr>
                <td>Tên hạn mức :</td>
                <td><input type="text" name="ten" value="<?php echo $name; ?>"  required ></td>
            </tr>
            <tr>
                <td>số tiền cảnh báo:</td>
                <td><input type="number" name="stcb"  value="<?php echo $stcb1; ?>" required></td>
            </tr>
            <tr>
                <td>số tiền hạn mức:</td>
                <td><input type="number" name="sthm"  value="<?php echo $sthm1; ?>" required></td>
            </tr>
            <tr>
                <td>Loại hạng mục:</td>
                <td>
                    <select name="hangm">
                    <?php
                    require_once_once("Controller/cproduct.php");
                    $pro= new controlpro();
                    $table=$pro->getallproducy1();
                    if(mysql_num_rows($table)){
                        while($row=mysql_fetch_assoc($table)){
                            echo "<option value=".$row["id"].">".$row["tenhangmuc"]."</option>";
                        }
                    }
                    
                    
                    ?>
                  
                    </select>
                </td>
            </tr>
<br>
            <tr>
                <td>Loại tài khoản:</td>
                <td>
                    <select name="tk" >
                    <?php
                    require_once_once("Controller/cproduct.php");
                    $pro= new controlpro();
                    $table=$pro->getallproducy2();
                    if(mysql_num_rows($table)){
                        while($row=mysql_fetch_assoc($table)){
                            echo "<option value=".$row["id"].">".$row["tenTaiKhoan"]."</option>";
                        }
                    }
                    
                    
                    ?>
                     
                    </select>
                </td>
            </tr> 
            <tr>
                <td>Thời gian bắt đầu:</td>
                <td><input type="date" name="tgbd" value="<?php echo $tgbd1; ?>"></td>
            </tr>
            <tr>
                <td>Thời gian kết thúc:</td>
                <td><input type="date" name="tgkt" value="<?php echo $tgkt1; ?>" required></td> 
            </tr>
            
           
            
            
            
        </table>
        <br>
        <center>
        <input type="reset" value="reset" id="but">
            <input type="submit" name="btnsub"  value="Lưu" id="but">
        
            </center>
    </form>
</body>
</html>
<?php
require_once_once("Controller/cproduct.php");
if(isset($_REQUEST['btnsub'])){
    $ten=$_REQUEST['ten'];
    $stcb=$_REQUEST['stcb'];
    $sthm=$_REQUEST['sthm'];
    $hangmuc=$_REQUEST['hangm'];
    $taikhoan=$_REQUEST['tk'];
    $tgbd=$_REQUEST['tgbd'];
    $tgkt=$_REQUEST['tgkt'];
    $ma=$_REQUEST['id'];
    
    $p=new controlpro();
    if ( $stcb <= 0 || $sthm <= 0) {
        echo"<script>alert('số tiền lớn hơn 0')</script>";
    }elseif($stcb >= $sthm){
        echo "<script>alert('số tiền cảnh báo phải nhở hơn số tiền hạn mức')</script>";
    }else{
        $kq=$p->updatehanmuc($ten,$hangmuc,$stcb,$sthm,$tgbd,$tgkt,$taikhoan,$ma);
        if($kq==1){
            echo"<script>alert('cập nhật dữ liệu thành công')</script>";
            
        }elseif($kq==0){
            echo"<script>alert('ko cập nhật đc')</script>";
        }
        
       
        
    }
    

}


?>