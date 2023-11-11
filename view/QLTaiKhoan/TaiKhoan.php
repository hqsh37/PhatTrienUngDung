<?php


class TaiKhoan{
    // public $ten;
    // public $soTien;

    function ViewTaiKhoan($ten, $soTien) {
        $btn = new Modal();
        $sua = $btn->ButtonModal('Sửa',"btn-sua","", "a");
        $btn1 = new Modal();
        $xoa = $btn1->ButtonModal('Xóa',"btn-xoa","", "a");
        return "<div class='sub-tk'>
        <span class='ti-wallet icon-subtk'></span>
        <div class='thongtin'>
            <div class='ten-tk'>".$ten."</div>
            <div class='so-tien'>".$soTien."</div>
        </div>
        <span class='icon-more'>
            ".$sua." / ".$xoa."
        </span>
    </div>";
    
    }
}

?>