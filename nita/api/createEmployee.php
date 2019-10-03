<?php
include_once(__DIR__."/../lib/Employee.php");
include_once(__DIR__."/../lib/DataFormat.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
$emp = new Employee();
$emp->setValue(4,'bismillah','yaallah','bismillah@gmail.com','082282263468','1999-01-01',1,340000,1,1,4);
$result=$emp->create();
$format= new DataFormat();
echo $format->asJSON($result);
