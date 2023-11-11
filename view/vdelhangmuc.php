
<?php
                require_once_once("Controller/cproduct.php");
                $p= new controlpro();
                $kq=$p->Deletepro($_REQUEST['Delpro']);
                if($kq){
                    echo"<script>alert('Xóa dữ liệu thành công')</script>";
                    echo header("refresh:0;url='index.php?hangmuc'");
                }
            ?>