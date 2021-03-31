<?php

require_once(__DIR__ . '/../config/database_config.php');

/**
* MySQLサーバに接続する
*
*/
function connect_db()
{
    $database = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DBNAME);

    if ($database == false) 
    {
        die('接続エラー (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }

    mysqli_set_charset($database, 'utf8');

    return $database;

}

/**
* MySQLサーバから切断する
*
* @param object $database MySQLサーバへの接続を表すオブジェクト
*/
function disconnect_db($database)
{
    mysqli_close($database);
}


?>