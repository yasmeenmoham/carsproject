<?php
include_once("includes/logged.php");


if(isset($_GET["id"])){
    include_once("includes/conn.php");
     $id= $_GET["id"];

try {
    $sql = "DELETE FROM `insert_cars` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    echo "delete sucessfuly";

}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }}else{
    echo "Invaild request";
  }

?>