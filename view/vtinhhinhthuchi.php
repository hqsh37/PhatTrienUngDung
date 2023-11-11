<?php
// Kết nối cơ sở dữ liệu
 $servername = "localhost";
 $username = "20042221";
 $password = "12345";
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
$data = array();

// Lấy dữ liệu từ cơ sở dữ liệu cho từng tháng trong năm
foreach ($months as $month) {
    // Truy vấn cơ sở dữ liệu để lấy tổng tiền cho tháng hiện tại
    $query = "SELECT SUM(sotien) AS tongtien FROM khoanthuchi WHERE MONTH(thoigian) = $month AND YEAR(thoigian) = $selectedYear";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $tongtien = $row['tongtien'];

    // Thêm dữ liệu vào mảng
    $data[$month] = $tongtien;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Biểu đồ cột PHP</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
 #myChartContainer {
            width: 800px;
            height: 300px;
            position: relative;
        }
canvas {
            position: relative;
            z-index: 0;
        }
</style>
</head>
<body>


    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="year">Chọn năm:</label>
        <select name="year" id="year">
            <?php
            // Tạo danh sách các năm từ 2000 đến năm hiện tại
            $startYear = 2000;
            $endYear = intval(date('Y'));
            for ($i = $endYear; $i >= $startYear; $i--) {
                $selected = ($i == $selectedYear) ? 'selected' : '';
                echo "<option value=\"$i\" $selected>$i</option>";
            }
            ?>
        </select>
        <button type="submit">Xem biểu đồ</button>
    </form>

    <div id="myChartContainer">
 <center><h4 style=' width:400px;border: 1px solid black;border-radius: 20px;text-align: center;background-color: rgb(30, 144, 255);
            color: aliceblue;'>Tình hình thu chi</h4></center>
        <canvas id="myChart"></canvas>
    </div>

    <script>
        // Biểu đồ cột
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($months); ?>,
                datasets: [{
                    label: 'Tổng tiền',
                    data: <?php echo json_encode(array_values($data)); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
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
</body>
</html>
