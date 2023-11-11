<?php
    require_once "connect.php";
    class ModelCanhBao{
        function selectAllCanhBao(){
            $conn;
            $c = new ketnoidatabase();
            if($c -> connect($conn)){
                $query = "select * from hanmucchi where sotiencanhbao > sotienhanmuc";
                $tbl = mysql_query($query);
                return $tbl;
            }else {
                return false;
            }
        }
    }
?>