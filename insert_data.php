<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gmaps";
$st = $_POST['status'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$nama_sensor=htmlspecialchars($_GET["nama_sensor"]) ; // 'sensor_A';
$status=htmlspecialchars($_GET["status"]) ; //34;


  $sql = "INSERT INTO sensor (id_sensor,nama_sensor,status) VALUES (NULL,'$nama_sensor','$nilai','$waktu')";
  $update_st = mysqli_query($conn, "update sensor set status='$st' where id_sensor = '$id_sensor' ");
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
