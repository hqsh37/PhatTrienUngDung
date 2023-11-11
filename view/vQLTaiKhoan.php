<?php
// Import
include "view/QLTaiKhoan/Modal.php";
include "view/QLTaiKhoan/TaiKhoan.php";
?>

<div class="container">
    <div class="body-qltk">
        <div class="nav-qltk">
            <h4>Quản Lý tài Khoản</h4>
            <p>Tong tien: <b>1.000.000d</b></p>
            <?php
                    $btn = new Modal();
                    echo $btn->ButtonModal('Thêm Tài Khoản',"btn-them-tk","btn btn-outline-secondary", "button");
                ?>
        </div>
        <div class="container-qltk">
            <div class="search-qltk">
                <form class="form-inline my-2 my-lg-0" method="GET">
                    <input name="page" value="taikhoan" class="dis-none">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

            <div class="taikhoan">
                <?php
                    $taiKhoan = new TaiKhoan();
                    echo $taiKhoan->ViewTaiKhoan("Mua Sắm 1", "400.000đ");
                    echo $taiKhoan->ViewTaiKhoan("Mua Sắm 2", "800.000đ");
                    echo $taiKhoan->ViewTaiKhoan("Mua Sắm 3", "600.000đ");
                ?>


            </div>
        </div>
    </div>
    <!-- Modal -->
    <?php
    $formThem ="<form>
    <div class='form-group'>
        <label for='sodu-tk'>Số  dư ban đầu</label>
        <input type='text' class='form-control' id='sodu-tk' aria-describedby='emailHelp'>
    </div>
    <div class='form-group'>
        <label for='ten-tk'>Tên tài khoản</label>
        <input type='text' class='form-control' id='ten-tk' aria-describedby='emailHelp'>
    </div>
    <div class='form-group'>
        <label for='loai-tk'>Loại tài Khoản</label>
        <select class='form-control' id='loai-tk'>
        <option>Tiền mặt</option>
        <option>Ngân hàng</option>
        </select>
    </div>
    <div class='form-group'>
        <label for='ten-tk'>Diễn giải</label>
        <textarea type='text' class='form-control' id='ten-tk' aria-describedby='emailHelp'></textarea>
    </div>
    </form> ";
            $viewModal = new Modal();
            echo $viewModal->ViewModal("Tạo tài khoản", $formThem, "Hủy", "Lưu", "btn-them-tk", "aria-labelledby='staticBackdropLabel' data-backdrop='static' data-keyboard='false'");
            echo $viewModal->ViewModal("Sửa tài khoản", $formThem, "Hủy", "Lưu", "btn-sua", "aria-labelledby='staticBackdropLabel' data-backdrop='static' data-keyboard='false'");
            echo $viewModal->ViewModal("Thông Báo", "<p>Bạn có chắc muốn xóa khoản chi tiêu này không ?</p>", "Hủy", "Xác nhận", "btn-xoa", "");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</div>