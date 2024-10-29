<?php 
$connexion = mysqli_connect("localhost", "root", "", "barberz");
if (!$connexion) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
<?php
$sql = "CREATE TABLE users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     firstname VARCHAR(30) NOT NULL,
     lastname VARCHAR(30) NOT NULL,
     email VARCHAR(50),
     password VARCHAR(50)
     )";
if (mysqli_query($connexion, $sql)) {
     echo "Table users created successfully";
} else {
     echo "Error creating table: " . mysqli_error($connexion);
 }            
?>