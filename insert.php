<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "undefined";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$naam= $_POST['name'];
$image = $_POST['image'];
$artiest = $_POST['artist'];
$genre = $_POST['genre'];
$prijs = $_POST['price'];

$sql = "INSERT INTO records (naam, image, artiest, genre, prijs)
values ('$naam','$image','$artiest','$genre','$prijs')";
if ($conn->query($sql)) {
  echo "CD added to database";
}else {
  die(mysqli_error($conn));
}


?>