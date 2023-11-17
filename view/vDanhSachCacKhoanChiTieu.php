<?php
include "controller/cKhoanCT.php";

$user_id = $_SESSION['user_id'];
if($user_id == 0){
    echo '<script>window.location.href = "?page=home"</script>';
}
$p = new ControlKhoanCT();  
$data = $p->viewKhoanCT($user_id);
$dataTk = $p->viewTk($user_id);
$dataHm = $p->viewHangMuc($user_id);
?>

<body>
    <div class="container">

        <div class="body">
            <section>
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-md-8 d-flex align-items-center justify-content-center content mx-auto">
                        <p class="bg-primary p-2">Danh Sách Các Khoản Chi Tiêu</p>
                    </div>
                </div>
                <div class="body-kct">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Hạng Mục</th>
                                <th scope="col">Số Tiền </th>
                                <th scope="col">Thời Gian</th>
                                <th scope="col">Loại GD</th>
                                <th scope="col">Diễn giải</th>
                                <th scope="col">Hoạt Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Ăn Uống</td>
                                <td>4 500 000</td>
                                <td>14/12/2023</td>
                                <td>Chi</td>
                                <td>dien giai vd</td>
                                <td>
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-sua">Sửa </button> /
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-xoa">xóa </button>
                                </td>
                            </tr>
                            <?php
                            if (!empty($data)) {
                                foreach($data as $row){
                                    $loaiGD = "";
                                    if($row["loaigiaodich"]){
                                        $loaiGD = "Chi";
                                    } else {
                                        $loaiGD = "Thu";
                                    }
                                    echo "<tr>
                                        <td scope='row'>".$row["tenhangmuc"]."</td>
                                        <td>".$p->formatCurrency($row["sotien"])."</td>
                                        <td>".$row["thoigian"]."</td>
                                        <td>".$loaiGD."</td>
                                        <td>".$row["diengiai"]."</td>
                                        <td>
                                            <button type='button' data-toggle='modal' class='rs-btn'
                                                data-target='#modal-sua".$row["id"]."'>Sửa </button> /
                                            <button type='button' data-toggle='modal' class='rs-btn'
                                                data-target='#modal-xoa".$row["id"]."'>xóa </button>
                                        </td>
                                    </tr>";


                                }
                            } else {
                                echo "<h4>Vui lòng thêm tài khoản để sử dụng!</h4>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row d-flex justify-content-end">
                    <td>
                        <button type="button" data-toggle="modal" class="btn" data-target="#modal-them">Thêm
                            Các Khoản Chi Tiêu</button>
                    </td>
                </div>
            </section>

            <!-- Modal Sua -->
            <?php
            if (!empty($data)) {
                foreach($data as $row){
                    $chonTK = '';
                    if (!empty($dataTk)) {
                        $chonTK = "<select class='form-control' id='taikhoan' name='taikhoan'>";
                        foreach($dataTk as $rowTK){
                            $chonTK = $chonTK."<option value='".$rowTK["id"]."'>".$rowTK["tenTaiKhoan"]."</option>";
                    
                        }
                        $chonTK = $chonTK."</select>";
                    } else {
                        $chonTK = "<input type='text' class='form-control' readonly value='Bạn cần thêm tài khoản để sử dụng!!'>";
                    }

                    $hangmuc = '';
                    if (!empty($dataHm)) {
                        $hangmuc = "<select class='form-control' id='hangmuc' name='hangmuc'>";
                        foreach($dataHm as $rowHm){
                            $hangmuc = $hangmuc."<option value='".$rowHm["id"]."'>".$rowHm["tenhangmuc"]."</option>";
                        }
                        $hangmuc = $hangmuc."</select>";
                    } else {
                        $hangmuc = "<input type='text' class='form-control' readonly value='Vui lòng kiểm tra lại hoặc báo với admin!!'>";
                    }
                    
                    echo "<div class='modal fade' id='modal-sua".$row["id"]."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                
                        <form method='POST' action='?page=thuchi&loai=xuly&kieu=sua&id=".$row["id"]."'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>Sửa Thông tin</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'>
                                    <div class='form-group'>
                                        <label for='taikhoan'>Chọn tài khoản</label>
                                        ".$chonTK."
                                    </div>
                                    <div class='form-group'>
                                        <label for='sotien-ct'>Số Tiền</label>
                                        <input type='number' class='form-control' id='sotien-ct' name='sotien-ct'>
                                    </div>
                                    <div class='form-group'>
                                        <div class='row form-group'>
                                            <div class='col-3'>
                                                <label for='date-ct'>Thời Gian </label>
                                            </div>
                                            <div class='col-12'>
                                                <input type='date' name='date-ct' id='date-ct' class='form-control'>
                                            </div>
                
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label for='hangmuc'>Hạng Mục</label>
                                        ".$hangmuc."
                                    </div>
                                    <div class='form-group'>
                                        <label for='loai-gd'>Loại giao dịch</label>
                                        <select class='form-control' id='loai-gd' name='loai-gd'>
                                            <option value='1'>Chi</option>
                                            <option value='0'>Thu</option>
                                        </select>
                                    </div>
                                    <div class='form-group'>
                                        <label for='exampleFormControlFile1'>Hình Ảnh</label>
                                        <input type='file' class='form-control-file' id='img-ct' name='img-ct'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='diengiai-ct'>Diễn giải</label>
                                        <textarea type='text' class='form-control' id='diengiai-ct' name='diengiai-ct'
                                            aria-describedby='emailHelp'></textarea>
                                    </div>
                
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Hủy</button>
                                    <button type='submit' class='btn btn-primary'>Lưu lại</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>";
                echo "<div class='modal fade' id='modal-xoa".$row["id"]."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <form method='POST' action='?page=thuchi&loai=xuly&kieu=xoa&id=".$row["id"]."'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>Thông Báo</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'>
                                    <p>Bạn có chắc muốn xóa khoản chi tiêu này không ?</p>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Hủy</button>
                                    <button type='button' class='btn btn-primary'>Xóa</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>";
                }
            } else {
                echo "<h4>Vui lòng thêm tài khoản để sử dụng!</h4>";
            }
            ?>
            <!-- Modal Thêm -->
            <div class='modal fade' id='modal-them' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>

                <form method='POST' action='?page=thuchi&loai=xuly&kieu=them' enctype='multipart/form-data'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>Tạo khoản thu chi</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        <div class='modal-body'>
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
                                <div class='row form-group'>
                                    <div class='col-3'>
                                        <label for='date-ct'>Thời Gian </label>
                                    </div>
                                    <div class='col-12'>
                                        <input type='date' name='date-ct' id='date-ct' class='form-control'>
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
                            <div class='form-group'>
                                <label for='exampleFormControlFile1'>Hình Ảnh</label>
                                <input type='file' class='form-control-file' id='img-ct' name='img-ct'>
                            </div>
                            <div class='form-group'>
                                <label for='diengiai-ct'>Diễn giải</label>
                                <textarea type='text' class='form-control' id='diengiai-ct' name='diengiai-ct'
                                    aria-describedby='emailHelp'></textarea>
                            </div>

                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Hủy</button>
                            <button type='submit' class='btn btn-primary'>Lưu lại</button>
                        </div>
                    </div>
                </form>
            </div>
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
<?php
if (isset($_POST["Luu"])) {
    include_once("controller/cQuanLyKhoanChiTieu.php");
    $id_taikhoan = $_POST["ten"];
    $sotien = $_POST["sotien"];
    $thoigian = $_POST["thoigian"];
    $hangmuc = $_POST["hangmuc"];
    $hinhanh = $_POST["hinhanh"];
    $loaigiaodich = $_POST["loaigiaodich"];
    $id_hangmuc = $_POST["id_hangmuc"];

    // Kiểm tra và xử lý các trường dữ liệu
    // ...

    $p = new ControllerQuanLyKhoanChiTieu();
    $kq = $p->addKhoanChiTieu($id_taikhoan, $sotien, $diengiai, $thoigian, $hinhanh, $loaigiaodich, $id_hangmuc);
    echo '<script>';
    echo 'var success = ' . json_encode($kq) . ';';
    echo 'setTimeout(function() {';
    echo '  showModal(success ? "Thêm thành công" : "Không thêm được");';
    echo '  setTimeout(function() { window.location.href = "vHome.php"; }, 3000);';
    echo '}, 1000);';
    echo '</script>';
}
?>