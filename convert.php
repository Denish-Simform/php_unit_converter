<?php
    if(isset($_POST["from"])) {
        $from = $_POST["from"];
    }
    if(isset($_POST["para1"])) {
        $para1 = $_POST["para1"];
    }
    if(isset($_POST["para2"])) {
        $para2 = $_POST["para2"];
    }  
    echo convert($from, $para1, $para2);
    function convert($from, $para1, $para2) : float {
        $base = round($from * $para1, 4);
        $ans = round($base, 4) / $para2;
        return round($ans, 4);
    }
?>