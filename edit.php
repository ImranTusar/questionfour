<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='imran';
 $conn=new mysqli($hostname,$username, $password,$dbname);
 if($conn->connect_error){
          echo $conn->connect_error;
 }
    $sql= "CREATE DATABASE mydb";
   if ($conn->query($sql)==TRUE){
    echo "DB Created";

   }
  $sql= "UPDATE student SET username='TUSAR',age=24 WHERE id=2";
  if( $conn->query($sql)==TRUE){
    echo "update";
 }else{
    echo $conn->connect_error;
 }

 $conn->close();
?>

