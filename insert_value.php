<?php
$servername='localhost';
$username='root';
$password='';
$dbname='imran';
 $conn=new mysqli($servername,$username, $password,$dbname);
 if($conn->connect_error){
          echo $conn->connect_error;
 }
  $sql="INSERT INTO users (id, name, age, username, password) VALUES('191152489', 'Imran', 23, 'khan', 'ImranKhan'),('74215898','Hasan', 38,'Sifat','Mahfujur'),('54546956','Kamal',25,'Kobir','Kobirkhan')";
 if( $conn->query($sql)==TRUE)
 {
    echo "Inserted";
 }
 else
 {
    echo $conn->connect_error;
 }
 $conn->close();
?>
