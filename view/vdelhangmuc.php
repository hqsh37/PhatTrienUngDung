
<?php
                include_once("Controller/cproduct.php");
                $p= new controlpro();
                $kq=$p->Deletepro($_REQUEST['Delpro']);
                if($kq){
                    echo"<script>alert('Xóa dữ liệu thành công')</script>";
                }
            ?>