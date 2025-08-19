<?php
header('Content-Type: application/json');
$conn = new mysqli('localhost', 'root', 'MYP8ew9A', b'restoran');
if($conn->connect_error){ die(json_encode([])); }

if($_SERVER['REQUEST_METHOD']==='POST'){
$ime=$conn->real_escape_string($_POST['ime']);
$tekst=$conn->real_escape_string($_POST['tekst']);
$ocjena=intval($_POST['ocjena']);
$conn->query("INSERT INTO recenzije (ime, tekst, ocjena) VALUES ('$ime','$tekst',$ocjena)");
echo json_encode(['status'=>'ok']); exit;
}

$res=$conn->query("SELECT * FROM recenzije ORDER BY datum DESC");
$data=[];
while($row=$res->fetch_assoc()){ $data[]=$row; }
echo json_encode($data);
?>