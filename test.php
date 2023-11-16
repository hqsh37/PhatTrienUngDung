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

<?php 
include "controller/cKhoanCT.php";
$p = new ControlKhoanCT();
$dataTk = $p->viewTk(18);
$dataHm = $p->viewHangMuc(18);

?>

<body class="body-signup">
    <div class="container ct-signup">
        <div class="modal-dialog">
            <form>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sửa Thông tin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class='form-group'>
                            <label for='taikhoan'>Chọn tài khoản</label>
                            <?php
                            if (!empty($dataTk)) {
                                echo "<select class='form-control' id='taikhoan' name='taikhoan'>";
                                foreach($dataTk as $row){
                                    echo "<option value='".$row["id"]."'>".$row["tenTaiKhoan"]."</option>";
                            
                                }
                                echo "</select>";
                            } else {
                                echo "<input type='text' class='form-control' readonly value='Bạn cần thêm tài khoản để sử dụng!!'>";
                            }
                            ?>
                        </div>
                        <div class='form-group'>
                            <label for='sotien-ct'>Số Tiền</label>
                            <input type='number' class='form-control' id='sotien-ct' name='sotien-ct'>
                        </div>
                        <div class='form-group'>
                            <div class="row form-group">
                                <div class="col-3">
                                    <label for="date-ct">Thời Gian </label>
                                </div>
                                <div class="col-12">
                                    <input type="date" name="date-ct" id="date-ct" class="form-control">
                                </div>

                            </div>
                        </div>
                        <div class='form-group'>
                            <label for='hangmuc'>Hạng Mục</label>
                            <?php
                            if (!empty($dataHm)) {
                                echo "<select class='form-control' id='hangmuc' name='hangmuc'>";
                                foreach($dataHm as $row){
                                    echo "<option value='".$row["id"]."'>".$row["tenhangmuc"]."</option>";
                                }
                                echo "</select>";
                            } else {
                                echo "<input type='text' class='form-control' readonly value='Vui lòng kiểm tra lại hoặc báo với admin!!'>";
                            }
                            ?>
                        </div>
                        <div class='form-group'>
                            <label for='loai-gd'>Loại giao dịch</label>
                            <select class='form-control' id='loai-gd' name='loai-gd'>
                                <option value='1'>Chi</option>
                                <option value='0'>Thu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Hình Ảnh</label>
                            <input type="file" class="form-control-file" id='img-ct' name='img-ct' >
                        </div>
                        <div class='form-group'>
                            <label for='diengiai-ct'>Diễn giải</label>
                            <textarea type='text' class='form-control' id='diengiai-ct'  name='diengiai-ct' aria-describedby='emailHelp'></textarea>
                        </div>  

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary">Lưu lại</button>
                    </div>
                </div>
            </form>
        </div>
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