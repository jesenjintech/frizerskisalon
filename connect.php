<?php
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];

$conn = new mysqli('ocalhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(ime,prezime)
    values(?,?)");
    $stmt->bind_parm("ss",$ime, $prezime);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
?>