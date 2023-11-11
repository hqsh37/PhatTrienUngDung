<?php
    require_once "connect.php";
    class ModelCanhBao{
        function selectAllCanhBao(){
            $conn;
            $c = new ketnoidatabase();
            if($c -> connect($conn)){
                $query = "
                            select tk.tenTaiKhoan as TenTK, hm.sotienhanmuc as SoTienHM, hm.sotiencanhbao as SoTien,
                            SUM(ktc.sotien) as TongTienKhoanThu, hm.id_hangmuc as HangMucN
                            FROM taikhoan tk INNER JOIN hanmucchi hm 
                            ON tk.id = hm.id_taikhoan 
                            inner join khoanthuchi ktc
                            ON tk.id = ktc.id_taikhoan
                            WHERE hm.sotiencanhbao < (
                            SELECT SUM(ktc.sotien)
                            FROM khoanthuchi ktc INNER JOIN taikhoan tk
                            on ktc.id_taikhoan = tk.id inner join hanmucchi hm
                            on hm.id_taikhoan = tk.id
                            WHERE ktc.id_taikhoan = tk.id
                            )
                            and hm.id_hangmuc >= all (
                                select count(id_hangmuc) 
                                from khoanthuchi ktc inner join taikhoan tk 
                                on ktc.id_taikhoan = tk.id 
                                where ktc.id_taikhoan = tk.id
                            )
                        ";
                $tbl = mysql_query($query);
                return $tbl;
            }else {
                return false;
            }
        }
    }
?>