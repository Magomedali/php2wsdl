<?php 

include_once("classes/Test.php");
include_once("vendor/autoload.php");


use PHP2WSDL\PHPClass2WSDL;
use classes\Test;

$class = 'Test';

$wsdlGenerator = new PHPClass2WSDL($class, 'http://xampp:8082/test/soap/wsdl_generator/gen/server.php');
$wsdlGenerator->generateWSDL(true);

$wsdlXML = $wsdlGenerator->save('example.wsdl');

print_r("Файл не сгерерирован!!!");
?>