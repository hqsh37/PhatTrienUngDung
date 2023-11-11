
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
        
    </style>
    
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Trang Chủ</title>
</head>

<body>
    <div class="container">
        <?php require_once './header.php'; ?>
        <div class="body"></div>
        <?php require_once './footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
        
       
        <button ><a href="" style="text-decoration:none; color:black">Đặt hạn mức</a></button>
      
      <?php 
      echo"<center>";
       echo"<h2>Quản lý hạn mức</h2>";
       echo"<table border='1px solid' style='width:100%;margin:auto;text-align:center;background-color:aliceblue'>";
       echo"<tr><th>ID</th><th>Tên hạn mức</th><th>số tiền cảnh báo</th><th>số tiền hạn mức</th><th>Loại hạng mục</th><th>Loại tài khoản</th><th>thời gian bắt đầu</th><th>thời gian kết thúc</th><th>Action</th></tr>";
       echo"<tr><td>1</td><td>Du lịch</td><td>".number_format(8000000,0,',','.')."VNĐ</td><td>".number_format(10000000,0,',','.')."VNĐ</td><td>Du lịch</td><td>Ví</td><td>01/01/2023</td><td>31/01/2023</td><td>  <button><a href='' style='text-decoration:none;color:black' onclick='return confirm(\""."Bạn chắc có muốn xóa không"."\")'>Xóa</a></button> / <button><a href='' style='text-decoration:none;color:black'>Sửa</a></button></td></tr>";
       echo"<tr><td>2</td><td>sinh hoạt</td><td>".number_format(8000000,0,',','.')."VNĐ</td><td>".number_format(10000000,0,',','.')."VNĐ</td><td>sinh hoạt</td><td>Ví</td><td>01/03/2023</td><td>31/03/2023</td><td>  <button><a href='' style='text-decoration:none;color:black' onclick='return confirm(\""."Bạn chắc có muốn xóa không"."\")'>Xóa</a></button> / <button><a href='' style='text-decoration:none;color:black'>Sửa</a></button></td></tr>";

       echo"</center>";
      ?>
       
    </div>
    
        
   
</body>

</html>
   
</body>
</html>
