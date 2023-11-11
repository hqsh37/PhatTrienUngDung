<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <style>
        .container{
            max-width: 80%;
        }
        .nav-item{
            padding: 0;}

        #menu{
            padding: 0;
        }

        .navbar{
            padding: 0;
        }

        #menu_nav {
        width: 155px; /* Đặt chiều rộng mong muốn */
        height: 45px; /* Đặt chiều cao mong muốn */
        }

        .form-control{
            max-width: 450px;
            padding: 0;
        }
        .content > p{
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        table{
            border: 1px solid black !important;
            background-color: white; 
        }
        thead > tr > th{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php require_once '../header.php'; ?>
        <div class="body">
        <section>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-8 d-flex align-items-center justify-content-center content mx-auto">
                    <p class="bg-primary p-2">Danh Sách Kế Hoạch Dự Chi</p>
                </div>
            </div>
            <div class="container">
            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Tên</th>
      <th scope="col">Số Tiền </th>
      <th scope="col">Thời Gian</th>
      <th scope="col">Hoạt Động</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Đi Đà Lạt</td>
      <td>4 500 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">Sửa </button> /
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">xóa </button>
        </td>
    </tr>
    <tr>
      <td scope="row">Mua IP 15</td>
      <td>35 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">Sửa </button> /
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">xóa </button>
        </td>
    </tr>
    <tr>
      <td scope="row">Mua MacBook</td>
      <td>45 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">Sửa </button> /
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">xóa </button>
        </td>
    </tr>
    <tr>
      <td scope="row">Đi Hà Nội</td>
      <td>5 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">Sửa </button> /
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">xóa </button>
        </td>
    </tr>
    <tr>
      <td scope="row">Mua Nhà</td>
      <td>2 445 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">Sửa </button>/
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">xóa </button>
        </td>
    </tr>
  </tbody>
</table>
            </div>
        <div class="row d-flex justify-content-end">
        <td>
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#exampleModalCenter">Thêm Kế Hoạch Dự Chi </button>
        </td>
        </div>
        </section>

        <!-- Modal Sua -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

        </div>
        <?php require_once '../footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>