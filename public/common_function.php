<?php

require_once(__DIR__ . '/../config/server_config.php');

/**
* リンクURIを取得する
*
* @param string $subName トップページ以下のURI
* @return string リンクURL 
*/
function get_link_uri($subName = '')
{
    return TOP_PAGE_URI . '/' . $subName;
}

/**
* リンクURIを出力する
*
* @param string $subName トップ以下のURI
*/
function print_link_uri($subName = '')
{
    print get_link_uri($subName);
}

/**
 * 引数の値をエスケープ処理して出力する
 * 
* @param string $value 出力したい文字列
 */
function print_data($value)
{
    print htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

?>