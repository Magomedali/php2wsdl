<?php
/**
 * /client.php
 */
header("Content-Type: text/html; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));


/**
 * Пути по-умолчанию для поиска файлов
 */
set_include_path(get_include_path()
    .PATH_SEPARATOR.'classes'
    .PATH_SEPARATOR.'objects');



ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);



$client = new SoapClient("http://xampp:8082/test/soap/wsdl_generator/gen/example.wsdl");

$out = $client->add(4,4);
var_dump($out);