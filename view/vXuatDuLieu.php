<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <title>Xuất dữ liệu</title>
    <style>
        .container {
            max-width: 80%;
        }

        .nav-item {
            padding: 0;
        }

        #menu {
            padding: 0;
        }

        .navbar {
            padding: 0;
        }

        #menu_nav {
            width: 155px;
            /* Đặt chiều rộng mong muốn */
            height: 45px;
            /* Đặt chiều cao mong muốn */
        }

        .form-control {
            max-width: 450px;
            padding: 0;
        }

        .content>p {
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }

        table {
            border: 1px solid black !important;
            background-color: white;
        }

        thead>tr>th {
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
                        <p class="bg-primary p-2">Xuất dữ liệu thu chi</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-4" id="kq">
                        <div class="col-md-8 offset-md-2">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Tài khoản:
                                        <select>
                                            <option>Ví tiền</option>
                                            <option>  </option>
                                        </select>
                                    </h5>
                                    <h5 class="card-title">Thời gian:
                                        <input class="textbox" type="time">
                                    </h5>
                                    <h5 class="card-title">Loại File:
                                        <select>
                                            <option>PDF</option>
                                            <option>Excel</option>
                                        </select>
                                    </h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-info">Xuất dữ liệu</button>
                            </div>
            </section>

        </div>
        <?php require_once '../footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>