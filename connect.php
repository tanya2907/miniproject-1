<?php
$username= $_POST['username'];
$password=$_POST['password'];

//Database connection
$conn = new mysqli('localhost','root','','intlogin');
if($conn->connect_error){
  die('connection failed : '.$conn->connect_error);
}else{
  $stmt=$conn->prepare("insert into internal(username, password)values(?,?)");
  $stmt->bind_param("ss",$username, $password);
  $stmt->execute();
  echo "stored succesfully";
  $stmt->close();
  $conn->close();
}
?>
