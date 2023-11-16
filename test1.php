<?php
include "controller/cKhoanCT.php";
$p = new ControlKhoanCT();
$data = $p->viewKhoanCT(18);
var_dump($data);
// if (!empty($data)) {
//     foreach($data as $row){
//         // `id`, `id_taikhoan`, `sotien`, `diengiai`, `thoigian`, `hinhanh`, `loaigiaodich`, `id_hangmuc`
//         echo $row['id_taikhoan'], $row['sotien'], $row['thoigian'], $row['diengiai'];

//     }
// } else {
//     echo "<h4>Vui lòng thêm tài khoản để sử dụng!</h4>";
// }

// $dataTk = $p->viewTk(18);

// if (!empty($dataTk)) {
//     foreach($dataTk as $row){
//         echo $row["tenTaiKhoan"]."</br>";

//     }
// } else {
//     echo "<h4>Vui lòng thêm tài khoản để sử dụng!</h4>";
// }

// $dataHm = $p->viewHangMuc(18);
// print_r($dataHm);
// if (!empty($dataHm)) {
//     foreach($dataHm as $row){
//         echo $row["tenhangmuc"], $row["id"];

//     }
// } else {
//     echo "<h4>Vui lòng kiểm tra lại hoặc báo với admin!</h4>";
// }

?>  