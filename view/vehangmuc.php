<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hạng mục</title>
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
    $kq=$p->editpro($_REQUEST['editpro']);
    if(mysql_num_rows($kq)>0){
        $row=mysql_fetch_assoc($kq);
        $id=$row['id'];
        $name=$row['ten'];
        $diengiai=$row['diengiai'];
        $hangm=$row['id_hangmuc'];

    }
   

    
    
    ?>
    <form action="#" method="post" enctype="multipart/form-data" >
        <table style="margin:auto;text-align:left">
        <center><h2>sửa hạng mục</h2></center>
        
           <tr>
               
               <td><input type="hidden" name="id" value="<?php echo $id; ?>" ></td>
           </tr>
           <tr>
                <td>Tên hạng mục :</td>
                <td><input type="text" name="tenhm" value="<?php echo $name; ?>" required ></td>
            </tr>
            <tr>
                <td>Diễn giải :</td>
                <td><textarea name="diengiai" cols="21" rows="4"><?php echo $diengiai; ?></textarea></td>
            </tr>
            
            <tr>
                <td>hạng mục cha</td>
                <td>
                    <select name="hangm" >
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
 if(isset($_REQUEST['btnsub'])){
    $ten=$_REQUEST['tenhm'];
    $hangmuc=$_REQUEST['hangm'];
    $diengiai=$_REQUEST['diengiai'];
    $ma=$_REQUEST['id'];
    $p=new controlpro();
    $kq=$p->updatepro($ten,$diengiai,$hangmuc,$ma);
    
    if($kq==1){
        echo"<script>alert('cập nhật dữ liệu thành công')</script>";
        
    }elseif($kq==0){
        echo"<script>alert('ko cập nhật đc')</script>";
    }
  
  
   
 }
?>