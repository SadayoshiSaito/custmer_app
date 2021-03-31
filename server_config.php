<?php

/** PHPが起動しているトップディレクトリのURI */
//define("HOST_URI", (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST']);
define("HOST_URI", '');
/** サブディレクトリに置いた場合、index.phpまでのパスを記述する */
//define("FOLDER_PATH",  '/custmer_test/public');
define("FOLDER_PATH", '');

/** このWebアプリのトップディレクトリ */
define("TOP_PAGE_URI",  HOST_URI . FOLDER_PATH);

?>