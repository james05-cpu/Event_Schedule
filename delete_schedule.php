<?php 
require_once('db-connect.php');
if(!isset($_GET['id'])){
    echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
    exit;
}

$stm =$conn->prepare("DELETE FROM `schedule_list` where id = '{$_GET['id']}'");
$deleted=$stm->execute();
if($deleted){
    echo "<script> alert('Event has deleted successfully.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    //echo "Error: "."$conn->error"."<br>";
    echo "SQL: "."<br>";
    echo "</pre>";
}
$conn->close();

?>