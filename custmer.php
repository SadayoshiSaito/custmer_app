<?php

require_once(__DIR__ . '/common_db.php');

/**
* 顧客一覧データを取得する
*
* @return object 顧客一覧
*/
function get_custmer_list()
{
    // MySQLサーバに接続
    $db = connect_db();

    $sql = 'select * from custmers order by created_at desc';

    $result = mysqli_query($db, $sql);

    // MySQLサーバから切断
    disconnect_db($db);

    return $result;
}

/**
* 顧客データを新規登録する
*
*/
function add_custmer()
{
    // MySQLサーバに接続
    $db = connect_db();

    $sql = 'INSERT INTO custmers (custmer_name, custmer_name_kana, custmer_email, custmer_phone_number) 
            VALUES(?, ?, ?, ?)';
    $statement = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($statement, 'ssss', $_POST['custmer_name'], $_POST['custmer_name_kana'], $_POST['custmer_email'], $_POST['custmer_phone_number']);
    
    if (!mysqli_stmt_execute($statement))
    {
        printf("Error message: %s\n", mysqli_error($db));
    }

    mysqli_stmt_close($statement);

    // MySQLサーバから切断
    disconnect_db($db);
}


?>