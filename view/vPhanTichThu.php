<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/phantichthu.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <?php require_once '../header.php'; ?>
<div class="body">
<section>
        <div class="main-title d-flex justify-content-center mx-auto">
            <h4 class="bg-primary p-2 text-white ">Phân Tích Thu</h4>
        </div>  

        <div class="container">

            <div class="form-container">
                <form method="post">
                    <div class="form-group">
                        <label for="phan_tich_theo">Phân tích theo</label>
                        <select class="form-control" id="phan_tich_theo" name="phan_tich_theo">
                            <option value="tuần">Tuần</option>
                            <option value="tháng">Tháng</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="thoi_gian">Thời gian</label>
                        <input type="date" class="form-control" id="thoi_gian" name="thoi_gian">
                    </div>

                    <div class="form-group">
                        <label for="hang_muc">Hạng mục</label>
                        <select class="form-control" id="phan_tich_theo" name="phan_tich_theo" id="hang_muc" name="hang_muc">
                        <option value="all">Tất cả hạng mục</option>
                            <option value="anuong">Ăn uống</option>
                            <option value="lamdep">Làm đẹp</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tai_khoan_chi_tieu">Tài khoản chi tiêu</label>
                        <select class="form-control" id="phan_tich_theo" name="phan_tich_theo" id="tai_khoan_chi_tieu" name="tai_khoan_chi_tieu">
                            <option value="all">Tất cả tài khoản</option>
                            <option value="anuong">Tài khoản 1</option>
                            <option value="lamdep">Tài khoản 2</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary d-flex justify-content-center mx-auto">Phân tích</button>
                </form>
            </div>

            <div class="chart-container">

                <div id="chart"></div>
                    <div class="summary">
                        <h5>Tổng thu:</h5>
                    </div>

                <div class="summary">
                    <h5>Trung bình thu/ngày:</h5>
                </div>
        </div>

    </div>
</section>
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