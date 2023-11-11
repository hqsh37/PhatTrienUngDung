<?php
    class ketnoidatabase{
        function connect(& $conn){
            $conn = mysql_connect('localhost', '1', '1402');
            if ($conn) {
                $db = mysql_select_db('quanlythuchi');
                return $db;
            } else {
                return false;
            }
        }
        function disconnect($conn){
            mysql_close($conn);
        }
    }
?>