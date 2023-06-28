<?php 
 require 'DB.php';
 header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET");

 $select=$db->prepare("SELECT * FROM paths");
 $select->execute();
 $select=$select->fetchAll(PDO::FETCH_ASSOC);
 print_r(json_encode($select))


?>