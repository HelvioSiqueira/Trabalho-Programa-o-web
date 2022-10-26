<?php
//include method PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, senha FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row fecht all
  while ($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - cpf_cnpj " . $row["cpf_cnpj"]. "<br>";
    //echo "Senha: " .$row["senha"]. " - email: " . $row["email"]. "<br>";
  }
} else {
  echo "";
}
//$conn->close();
