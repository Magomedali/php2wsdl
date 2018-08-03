<?php


/**
 * smsservice.php
 */
header("Content-Type: text/xml; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));

include_once("classes/Test.php");


ini_set("soap.wsdl_cache_enabled", "0"); // отключаем кеширование WSDL-файла для тестирования

//Создаем новый SOAP-сервер
$server = new SoapServer("http://xampp:8082/test/soap/wsdl_generator/gen/example.wsdl");

//Регистрируем класс обработчик
$server->setClass("Test");


//Запускаем сервер
$server->handle();