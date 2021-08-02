<?php
 require "vendor/autoload.php";

// echo $_ENV["name"];
// $e=new Emp();
// echo $e->getString();
$db=DBConnection::getConnection();
$res=$db->select("emp","*");
print_r($res);

?>