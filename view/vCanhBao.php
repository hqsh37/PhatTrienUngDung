<?php
    require_once "controller/cCanhBao.php";
    $c = new ControllerCanhBao();
    $tbl = $c -> getAllCanhBao();
    if($tbl){
              if (mysql_num_rows($tbl)>0) {
                $c = new ControllerCanhBao();
                echo '<h4 class="ct-font text-center mt-5 mb-5 ">DANH SÁCH TÀI KHOẢN VƯỢT MỨC</h4>';
                echo '<table class="table table-hover">';
                echo '<thead>
                        <tr>
                          <th scope="col">Tên Tài Khoản</th>
                          <th scope="col">Số Tiền</th>
                          <th scope="col">Hạn Mức Chi Tiêu</th>
                          <th scope="col">Số Tiền Vượt Quá Hạn Mức</th>
                          <th scope="col">Hạng Mục Chi Nhiều Nhất</th>
                        </tr>
                      </thead>
                      <tbody>';
                  while ($row = mysql_fetch_assoc($tbl)) {
                  echo '<tr>';
                    echo '<th scope="row">'.$row['TenTK'].'</th>';
                    echo '<td>'.$row['SoTienHM'].'</td>';
                    echo '<td>'.$row['SoTien'].'</td>';
                    echo '<td>'.$row['TongTienKhoanThu']-$row['SoTien'].'</td>';
                    echo '<td>'.$row['HangMucN'].'</td>';
                  echo '</tr>';
                  }
                echo '</tbody></table>';
                }else{
                    echo "0 Results";
                }
            }
    else{
      echo "ERROR";
    }
?>
<div>
  <h4 class="ct-font text-center mt-5 mb-5 ">DANH SÁCH TÀI KHOẢN VƯỢT MỨC</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Tên Tài Khoản</th>
      <th scope="col">Số Tiền</th>
      <th scope="col">Hạn Mức Chi Tiêu</th>
      <th scope="col">Số Tiền Vượt Quá Hạn Mức</th>
      <th scope="col">Hạng Mục Chi Nhiều Nhất</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>4</td>
      <td>@2</td>
      <td>1</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>hihi</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>3</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>hihi</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>4</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>hihi</td>
    </tr>

  </tbody>
</table>
</div>