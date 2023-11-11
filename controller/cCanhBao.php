<?php
    require_once 'model/mCanhBao.php';
    class ControllerCanhBao {
        function getAllCanhBao(){
            $c = new ModelCanhBao();
            $tbl = $c -> selectAllCanhBao();
            return $tbl;
        }
    }
?>