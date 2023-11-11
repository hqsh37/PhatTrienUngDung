<?php
// Kết nối cơ sở dữ liệu
 $servername = "localhost";
 $username = "1";
 $password = "1402";
 $dbname = "quanlythuchi";

 // Xử lý khi người dùng bấm nút "Xem biểu đồ"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy năm được chọn từ form
    $selectedYear = $_POST['year'];
} else {
    // Nếu không có yêu cầu POST, mặc định sử dụng năm hiện tại
    $selectedYear = date('Y');
}
// Tạo kết nối MySQLi
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Lỗi kết nối cơ sở dữ liệu: " . $conn->connect_error);
}

// Lấy danh sách các tháng từ 1 đến 12
$months = range(1, 12);

// Lấy năm hiện tại hoặc năm được chọn từ form
$currentYear = date('Y');
$selectedYear = isset($_POST['year']) ? $_POST['year'] : $currentYear;

// Tạo mảng chứa dữ liệu cho biểu đồ

$tongThuData = array();
$tongChiData = array();
// Lấy dữ liệu từ cơ sở dữ liệu cho từng tháng trong năm
foreach ($months as $month) {
    // Truy vấn cơ sở dữ liệu để lấy tổng tiền cho tháng hiện tại
    $query = "SELECT SUM(CASE WHEN loaigiaodich = 1 THEN sotien ELSE 0 END) AS tongThu,SUM(CASE WHEN loaigiaodich = 2 THEN sotien ELSE 0 END) AS tongChi FROM khoanthuchi WHERE MONTH(thoigian) = $month AND YEAR(thoigian) = $selectedYear";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $tongThu = $row['tongThu'];
    $tongChi = $row['tongChi'];

    // Thêm dữ liệu vào mảng
   
    $datathu[$month] = $tongThu;
    $datachi[$month] = $tongChi;
   
}
$query1 = "SELECT SUM(CASE WHEN loaigiaodich = 1 THEN sotien ELSE 0 END) AS tongThu,SUM(CASE WHEN loaigiaodich = 2 THEN sotien ELSE 0 END) AS tongChi FROM khoanthuchi WHERE  YEAR(thoigian) = $selectedYear";
   $result1 = $conn->query($query1);
   $row = $result1->fetch_assoc();
   $tongThu1 = $row['tongThu'];
    $tongChi1 = $row['tongChi'];
$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Biểu đồ cột PHP</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="./css/phuc.css">
</head>
<body>
    
<center><h4 style=' width:400px;border: 1px solid black;border-radius: 20px;text-align: center;background-color: rgb(30, 144, 255);
            color: aliceblue;'>Tình hình thu chi</h4></center>
<center>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="year">Chọn năm:</label>
        <select name="year" id="year">
            <?php
           
            $startYear = 2010;
            $endYear = intval(date('Y'));
            for ($i = $endYear; $i >= $startYear; $i--) {
                $selected = ($i == $selectedYear) ? 'selected' : '';
                echo "<option value=\"$i\" $selected>$i</option>";
            }
            ?>
        </select>
        <button type="submit" name="xem">Xem biểu đồ</button>
    </form>
    
    <div id="myChartContainer">
 
        <canvas id="myChart"></canvas> <b>Biều đồ cột thể hiện tổng số tiền thu và tổng số tiền chi trong năm theo từng tháng</b>
    </div>
    
    </center>
    <script>
        // Biểu đồ cột
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($months);?>,
                datasets: [{
                    label: 'Tổng thu',
                    data: <?php echo json_encode(array_values($datathu)); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Tổng chi',
                    data: <?php echo json_encode(array_values($datachi)); ?>,
                    backgroundColor: 'rgba(135,206,235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }
            ]},
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                       
		stacked: true

                    }
                }
            }
        });
    </script>
    <br><br>
    <div >
    <table >
        <tr>
            <td id="tt"> <h6 >TỔNG THU:<?php echo number_format($tongThu1,0,',','.')."VNĐ" ;?></h6></td>
        </tr>
        <tr>
            <td id="tt"> <h6 >TỔNG CHI:<?php echo number_format($tongChi1,0,',','.')."VNĐ" ;?></h6></td>
        </tr>
    </table>
      
      
   </div>
</body>
</html>
