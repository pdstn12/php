<?php 

// $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

// echo json_encode($age);


$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

var_dump($obj);

// echo $obj->Peter;
// echo $obj->Ben;
// echo $obj->Joe;