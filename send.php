<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $details = $_POST['details'] ;

  $conn = new mysqli('localhost','root','','test1');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt =$conn->prepare("insert into contactus(name,email,details) values(?, ?, ?)");
    $stmt->bind_param("sss",$name,$email,$details);
    $stmt->execute();
    echo "Contact details saved..";
    $stmt->close();
    $conn->close();

}
?>
