<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style_hqs.css">
</head>

<body class="body-signup">
    <div class="container ct-signup">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">ĐĂNG KÝ</h2>
            </div>
            <form action="#" method="post">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="first-name">Nhập họ tên:</label>
                        <div class="form-row">
                            <div class="col">
                                <input required="true" type="text" class="form-control" id="first-name" placeholder="First name">
                            </div>
                            <div class="col">
                                <input required="true" type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required="true" type="email" class="form-control" id="email" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input required="true" type="password" class="form-control" id="pwd"
                            placeholder="Nhập Mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="confirmation_pwd">Confirmation Password:</label>
                        <input required="true" type="password" class="form-control" id="confirmation_pwd"
                            placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="sdt">Số điện thoại:</label>
                        <input required="true" type="number" class="form-control" id="sdt" placeholder="Nhập số điện thoại">
                    </div>
                    <button class="btn btn-signup">ĐĂNG KÝ</button>
                </div>
            </form>
            <p class="text-center" >Đã có tài khoản <a href="./vDangNhap.php">đăng nhập</a></p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>